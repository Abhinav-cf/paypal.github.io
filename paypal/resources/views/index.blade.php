@extends('include/include')
@section('content')
<div class="text-center mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="price"><span class="currency">$</span>67</h3>
                </div>
                <div class="card-block">
                    <div class="card-title">
                        Paypal Integration using Laravel
                        <ul class="list-group">
                            <li class="list-group-item">Feature 1</li>
                            <li class="list-group-item">Feature 2</li>
                            <li class="list-group-item">Feature 3</li>
                            <li class="list-group-item">Feature 4</li>
                            <li class="list-group-item">Feature 5</li>
                        </ul>
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_xclick">
                            <input type="hidden" name="business" value="L8WLCTHP78BHE">
                            <input type="hidden" name="lc" value="IN">
                            <input type="hidden" name="item_name" value="pst converter">
                            <input type="hidden" name="item_number" value="1">
                            <input type="hidden" name="amount" value="49.00">
                            <input type="hidden" name="currency_code" value="USD">
                            <input type="hidden" name="button_subtype" value="services">
                            <input type="hidden" name="no_note" value="1">
                            <input type="hidden" name="no_shipping" value="2">
                            <input type="hidden" name="undefined_quantity" value="1">
                            <input type="hidden" name="cancel_return" value="http://127.0.0.1:8000/">
                            <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">
                            <input type="hidden" name="notify_url" value="http://127.0.0.1:8000/detail">
                            <input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
                            </form>
                            {{-- <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=L8WLCTHP78BHE&lc=IN&item_name=pst%20converter&item_number=1&amount=49%2e00&currency_code=USD&button_subtype=services&no_note=1&no_shipping=2&undefined_quantity=1&cancel_return=http%3a%2f%2f127%2e0%2e0%2e1%3a8000%2f&bn=PP%2dBuyNowBF%3abtn_buynowCC_LG%2egif%3aNonHosted&notify_url=http%3a%2f%2f127%2e0%2e0%2e1%3a8000%2fdetail">  fsdf sd f</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection