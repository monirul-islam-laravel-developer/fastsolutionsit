@extends('front.master.master')
@section('title')
    Order Page
@endsection
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
    /* Payment Options Styling */
    .payment-options {
        display: flex;
        justify-content: space-around;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .payment-options img {
        width: 100px;
        height: auto;
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .payment-options img:hover {
        transform: scale(1.1);
    }

    /* Modal Styling */
    .modal-content {
        border-radius: 8px;
        background-color: #fff;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        padding: 20px;
    }

    .modal-header {
        border-bottom: none;
        position: relative;
        padding-bottom: 0;
    }

    .modal-title {
        font-size: 18px;
        font-weight: bold;
        color: #333;
    }

    .close {
        position: absolute;
        top: 15px;
        right: 15px;
        font-size: 20px;
        color: #333;
        opacity: 0.6;
        transition: opacity 0.2s ease;
    }

    .close:hover {
        opacity: 1;
    }

    .modal-body {
        margin-top: 20px;
        font-size: 16px;
        color: #555;
        text-align: center;
    }

</style>


@section('body')
    <div class="container container-two">
        <div class="row">
            <div class="col-md-4">
                <div class="order-summary">
                    <h5 class="order-summary__title mb-32">Order Summary</h5>
                    <ul class="billing-list">
                        <li class="billing-list__item flx-between">
                            <span class="text text-heading fw-500">{{ $theme->name }}</span>
                            <span class="amount text-heading fw-500">Tk.{{ $theme->regular_price }}</span>
                        </li>
                        <li class="billing-list__item flx-between">
                            <span class="text text-heading fw-500">Discount</span>
                            @php
                                $discauntprice = $theme->regular_price - $theme->selling_price;
                            @endphp
                            <span class="amount text-body">Tk.{{ $discauntprice }}</span>
                        </li>
                        <li class="billing-list__item flx-between">
                            <span class="text text-heading fw-500">Cupon Discount</span>
                            <span class="amount text-body">Tk.00</span>
                        </li>
                        <li class="billing-list__item flx-between">
                            <span class="text text-heading font-20 fw-500 font-heading">Total</span>
                            @php
                                $grandtotalprice = $theme->regular_price - $discauntprice;
                            @endphp
                            <span class="amount text-heading font-20 fw-500 font-heading">Tk.{{ $grandtotalprice }}</span>
                        </li>
                    </ul>
                    <!-- Coupon form inside the order summary column -->
                    <form action="#" class="apply-coupon flx-align gap-3 mt-4">
                        <input type="text" class="common-input common-input--md w-auto pill" placeholder="Coupon code">
                        <button type="submit" class="btn btn-main btn-md py-3 px-sm-5 px-4 flx-align gap-2 pill fw-300">Apply</button>
                    </form>
                </div>
            </div>

            <div class="col-md-8 pe-sm-5">
                <div class="cart-personal__content">
                    <h5 class="cart-personal__title mb-32">Personal Information</h5>
                    <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- Personal Information Fields -->
                        <div class="mb-4">
                            <label for="name" class="form-label font-18 mb-2 fw-500 font-heading">Your Name <span class="text-danger">*</span></label>
                            <input type="text" class="common-input" name="name" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="mb-4">
                            <label for="number" class="form-label font-18 mb-2 fw-500 font-heading">Your Number <span class="text-danger">*</span></label>
                            <input type="number" class="common-input" name="number" id="number" placeholder="Your Number" required>
                        </div>
                        <div class="mb-4">
                            <label for="alternative_number" class="form-label font-18 mb-2 fw-500 font-heading">Your Alternative Number</label>
                            <input type="number" class="common-input" name="alt_number" id="alternative_number" placeholder="Your Alternative Number">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="form-label font-18 mb-2 fw-500 font-heading">Email Address <span class="text-danger">*</span></label>
                            <span class="text d-block mb-2">We will send the purchase receipt to this address.</span>
                            <input type="email" class="common-input" name="email" id="email" placeholder="Email Address" required>
                        </div>
                        <div class="mb-4">
                            <label for="website_name" class="form-label font-18 mb-2 fw-500 font-heading">Your Website Name <span class="text-danger">*</span></label>
                            <input type="text" class="common-input" name="website_name" id="website_name" placeholder="Your Website Name" required>
                        </div>
                        <div class="mb-4">
                            <label for="old_website" class="form-label font-18 mb-2 fw-500 font-heading">Your Website Link</label>
                            <span class="text d-block mb-2">If you have an old website</span>
                            <input type="text" class="common-input" name="old_website" id="old_website" placeholder="Your Website Link">
                        </div>

                        <!-- Payment Method Selection -->
                        <h3>Select Payment Method</h3>
                        <div class="payment-options mb-4">
                            <img src="{{ asset('/') }}front/assets/images/icons/bkash.jpg" alt="Bkash" data-toggle="modal" data-target="#bkash-modal">
                            <img src="{{ asset('/') }}front/assets/images/icons/nagadapp.jpg" alt="Nagad" data-toggle="modal" data-target="#nagad-modal">
                            <img src="{{ asset('/') }}front/assets/images/icons/dutch-bangla-rocket.png" alt="Rocket" data-toggle="modal" data-target="#rocket-modal">
                        </div>

                        <div class="mb-4">
                            <label for="payment_method" class="form-label font-18 mb-2 fw-500 font-heading">Select Your Payment Method</label>
                            <select class="form-control" name="payment_method" id="payment_method" required>
                                <option value="">--- Select Your Payment Method ---</option>
                                <option value="bkash">Bkash</option>
                                <option value="nagad">Nagad</option>
                                <option value="rocket">Rocket</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="transaction_id" class="form-label font-18 mb-2 fw-500 font-heading">Transaction ID <span class="text-danger">*</span></label>
                            <input type="text" class="common-input" name="transaction_id" id="transaction_id" placeholder="Input Your Payment Transaction ID" required>
                        </div>

                        <div class="mb-4">
                            <label for="transaction_image" class="form-label font-18 mb-2 fw-500 font-heading">Transaction Screenshot</label>
                            <input type="file" class="form-control" name="transaction_image" id="transaction_image">
                        </div>

                        <!-- Agreement Checkboxes -->
                        <div class="col-md-8">
                        <div class="mt-32 mb-32">
                            <div class="common-check mb-4">
                                <input class="form-check-input" type="checkbox" checked name="agree"  id="agree" required>
                                <label class="form-check-label mb-0" for="agree">Agree to Terms</label>
                            </div>
                            <div class="common-check mb-0">
                                <input class="form-check-input" type="checkbox" checked name="privacy" id="privacy" required>
                                <label class="form-check-label mb-0" for="privacy">Agree to Privacy Policy</label>
                            </div>
                        </div>

                        <!-- Navigation Buttons -->
                        <div class="cart-content__bottom flx-between gap-2">
                            <a href="{{ url()->previous() }}" class="btn btn-outline-light flx-align gap-2 pill btn-lg">
                                <span class="icon line-height-1 font-20"><i class="las la-arrow-left"></i></span>
                                Back
                            </a>
                            <button type="submit" class="btn btn-main flx-align gap-2 pill btn-lg">
                                Proceed to Payment
                            </button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- ====================== Cart Personal Info End ============================ -->
@endsection
