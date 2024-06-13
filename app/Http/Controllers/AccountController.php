<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class AccountController extends Controller
{
    public function showUpdate()
    {
        // Mengambil semua data akun
        $accounts = User::all();
        return view('update', ['username' => $accounts]);
    }

    public function update(Request $request)
    {
        // Validasi input
        $request->validate([
            'current_username' => 'required',
            'new_username' => 'required',
        ]);

        // Ambil data dari form
        $currentUsername = $request->input('current_username');
        $newUsername = $request->input('new_username');

        try {
            // Cari akun berdasarkan username saat ini
            $account = User::where('username', $currentUsername)->firstOrFail();

            // Perbarui username
            $account->username = $newUsername;
            $account->save();

            // Perbarui session dengan username yang baru
            session(['account.username' => $newUsername]);

            return redirect('/update')->with('success', 'Username berhasil diperbarui.');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect('/update')->with('error', 'Username saat ini tidak ditemukan.');
        } catch (QueryException $e) {
            return redirect('/update')->with('error', 'Gagal memperbarui username. Silakan coba lagi.');
        }
    }
}
