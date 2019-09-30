@extends('master') @section('content');

<!-- Hero Section-->
<section class="hero hero-page gray-bg padding-small">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-9 order-2 order-lg-1">
                <h1>Checkout</h1>
                <p class="lead">You currently have 3 item(s) in your basket</p>
            </div>
            <div class="col-lg-3 text-right order-1 order-lg-2">
                <ul class="breadcrumb justify-content-lg-end">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item active">Checkout</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Checkout Forms-->
<section class="checkout">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="checkout1.html" class="nav-link">Address</a></li>
                    <li class="nav-item"><a href="checkout2.html" class="nav-link active">Delivery Method </a></li>
                    <li class="nav-item"><a href="#" class="nav-link disabled">Payment Method </a></li>
                    <li class="nav-item"><a href="#" class="nav-link disabled">Order Review</a></li>
                </ul>
                <div class="tab-content">
                    <div id="delivery-method" class="tab-block">
                        <form action="#" class="shipping-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="radio" name="shippping" id="option1" class="radio-template">
                                    <label for="option1"><strong>Usps next day</strong><br><span class="label-description">Get it right on next day - fastest option possible.</span></label>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="radio" name="shippping" id="option2" class="radio-template">
                                    <label for="option2"><strong>Usps next day</strong><br><span class="label-description">Get it right on next day - fastest option possible.</span></label>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="radio" name="shippping" id="option3" class="radio-template">
                                    <label for="option3"><strong>Usps next day</strong><br><span class="label-description">Get it right on next day - fastest option possible.</span></label>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="radio" name="shippping" id="option4" class="radio-template">
                                    <label for="option4"><strong>Usps next day</strong><br><span class="label-description">Get it right on next day - fastest option possible.</span></label>
                                </div>
                            </div>
                        </form>
                        <div class="CTAs d-flex justify-content-between flex-column flex-lg-row"><a href="checkout1.html" class="btn btn-template-outlined wide prev"><i class="fa fa-angle-left"></i>Back to Address</a><a href="checkout3.html" class="btn btn-template wide next">Choose payment method<i class="fa fa-angle-right"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="block-body order-summary">
                    <h6 class="text-uppercase">Order Summary</h6>
                    <p>Shipping and additional costs are calculated based on values you have entered</p>
                    <ul class="order-menu list-unstyled">
                        <li class="d-flex justify-content-between"><span>Order Subtotal </span><strong>$390.00</strong></li>
                        <li class="d-flex justify-content-between"><span>Shipping and handling</span><strong>$10.00</strong></li>
                        <li class="d-flex justify-content-between"><span>Tax</span><strong>$0.00</strong></li>
                        <li class="d-flex justify-content-between"><span>Total</span><strong class="text-primary price-total">$400.00</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@stop @section('title') landing Page @stop