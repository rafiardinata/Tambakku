<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <link rel="stylesheet" href="/css/checkout.css">
</head>

<body>
    <div class="checkout-container">
        <h1>Checkout</h1>
        <div class="payment-details">
            <h2>Payment Information</h2>
            <form method="GET" action="{{ route('checkout') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Nama Pembeli</label>
                    <input type="text" id="card-name" name="card-name" placeholder="Nama Pembeli" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat" placeholder="Alamat" required>
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah</label>
                    <input type="number" id="jumlah" name="jumlah" placeholder="Jumlah" required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" id="harga" name="harga" placeholder="Contoh : Rp 20.000/Kg" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3" id="pay-button">Pilih Pembayaran</button>
            </form>
            @if (isset($snap_token))
                <script src="https://app.sandbox.midtrans.com/snap/snap.js"
                    data-client-key="{{ config('services.midtrans.client_key') }}"></script>
                <script type="text/javascript">
                    document.getElementById('pay-button').onclick = function(event) {
                        event.preventDefault();
                        snap.pay('{{ $snap_token }}', {
                            onSuccess: function(result) {
                                document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                            },
                            onPending: function(result) {
                                document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                            },
                            onError: function(result) {
                                document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                            }
                        });
                    };
                </script>
            @endif
            {{-- <pre><div id="result-json"></div></pre> --}}
        </div>
    </div>
</body>

</html>
