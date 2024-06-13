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
            <form id="checkout-form">
                <div class="form-group">
                    <label for="product_name">Product:</label>
                    <span id="product_name">{{ $product_name }}</span>
                </div>
                <div class="form-group">
                    <label for="product_price">Price per unit:</label>
                    <span id="product_price">Rp. {{ number_format($product_price, 0, ',', '.') }}</span>
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <span type="number" id="quantity" name="quantity" min="1" required>{{ $quantity }}</span>
                </div>
                <div class="form-group">
                    <label for="total_price">Total Price:</label>
                    <span id="total_price">Rp. {{ number_format($total_price, 0, ',', '.') }}</span>
                </div>
                <button type="button" class="btn btn-primary mt-3" id="pay-button">Pilih Pembayaran</button>
            </form>
            <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
            <script type="text/javascript">
                document.getElementById('quantity').addEventListener('input', function() {
                    var quantity = document.getElementById('quantity').value;
                    var pricePerUnit = {{ $product_price }};
                    var totalPrice = quantity * pricePerUnit;
                    document.getElementById('total_price').innerText = 'Rp. ' + totalPrice.toLocaleString();
                });

                document.getElementById('pay-button').onclick = function(){
                    snap.pay('{{ $snap_token }}', {
                        onSuccess: function(result){
                            document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                        },
                        onPending: function(result){
                            document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                        },
                        onError: function(result){
                            document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                        }
                    });
                };
            </script>
        </div>
    </div>
</body>
</html>
