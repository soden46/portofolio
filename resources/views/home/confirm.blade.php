@extends('layouts.app')
@section('content')

<section class="ftco-section ftco-project" id="sawer">
    <div class="container">
        <div class="row justify-content-center mb-2">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h1 class="big big-2">Dukung Saya</h1>
                <h2 class="mb-4">Sawer</h2>
            </div>
        </div>
        <div class="row d-md-flex align-items-center">
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                <div class="card text-center mt-8 mb-3">
                    <div class="card-header">
                        Integrasi Midtrans
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Midtrans Laravel API</h5>
                        <table>
                            <tr>
                                <td>Nama:</td>
                                <td>{{$donate->name}}
                            </tr>
                            <tr>
                                <td>Pesan:</td>
                                <td>{{$donate->message}}</td>
                            </tr>
                            <tr>
                                <td>Total Sawer</td>
                                <td>{{$donate->amount}}</td>
                            </tr>
                        </table>
                        <button type="submit" id="pay-button" class="btn btn-primary">Konfirmasi</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    // For example trigger on button clicked, or any time you need
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function() {
        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        window.snap.pay('{{$snapToken}}', {
            onSuccess: function(result) {
                /* You may add your own implementation here */
                window.location.href = '/detail-saweran'
                console.log(result);
            },
            onPending: function(result) {
                /* You may add your own implementation here */
                alert("wating your payment!");
                console.log(result);
            },
            onError: function(result) {
                /* You may add your own implementation here */
                alert("payment failed!");
                console.log(result);
            },
            onClose: function() {
                /* You may add your own implementation here */
                alert('you closed the popup without finishing the payment');
            }
        })
    });
</script>
@endsection