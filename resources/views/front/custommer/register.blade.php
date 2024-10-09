@extends('front.master.master')
@section('title')
    Cart Page
@endsection
@section('body')
    <div class="account-content">
        <h4 class="account-content__title mb-48 text-capitalize">Create A Free Account</h4>

        <form action="{{route('store-customer')}}" method="POST" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <div class="row gy-4">
                <div class="col-12">
                    <label for="name" class="form-label mb-2 font-18 font-heading fw-600">Full Name</label>
                    <div class="position-relative">
                        <input type="text" name="name" class="common-input common-input--bg common-input--withIcon" id="name" placeholder="Your full name">
                        <span class="input-icon"><img src="{{asset('/')}}front/assets/images/icons/user-icon.svg" alt=""></span>
                    </div>
                </div>
                <div class="col-12">
                    <label for="name" class="form-label mb-2 font-18 font-heading fw-600">Number</label>
                    <div class="position-relative">
                        <input type="text" name="number" class="common-input common-input--bg common-input--withIcon" id="name" placeholder="Your full name">
                    </div>
                </div>
                <div class="col-12">
                    <label for="name" class="form-label mb-2 font-18 font-heading fw-600">Alter Number</label>
                    <div class="position-relative">
                        <input type="text" name="alt_number" class="common-input common-input--bg common-input--withIcon" id="name" placeholder="Your full name">
                    </div>
                </div>
                <div class="col-12">
                    <label for="name" class="form-label mb-2 font-18 font-heading fw-600">Address</label>
                    <div class="position-relative">
                        <input type="text" name="address" class="common-input common-input--bg common-input--withIcon" placeholder="Enter Full Address">

                    </div>
                </div>
                <div class="col-12">
                    <label for="email" class="form-label mb-2 font-18 font-heading fw-600">Email</label>
                    <div class="position-relative">
                        <input type="email" name="email" class="common-input common-input--bg common-input--withIcon" id="email" placeholder="infoname@mail.com">
                        <span class="input-icon"><img src="{{asset('/')}}front/assets/images/icons/envelope-icon.svg" alt=""></span>
                    </div>
                </div>

                <div class="col-12">
                    <label for="your-password" class="form-label mb-2 font-18 font-heading fw-600">Password</label>
                    <div class="position-relative">
                        <input type="password" name="password" class="common-input common-input--bg common-input--withIcon" id="your-password" placeholder="6+ characters, 1 Capital letter">
                        <span class="input-icon toggle-password cursor-pointer" id="#your-password"><img src="{{asset('/')}}front/assets/images/icons/lock-icon.svg" alt=""></span>
                    </div>
                </div>
                <div class="col-12">
                    <div class="common-check my-2">
                        <input class="form-check-input" type="checkbox" name="checkbox" checked id="agree">
                        <label class="form-check-label mb-0 fw-400 font-16 text-body" for="agree">I agree to the terms & conditions</label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-main btn-lg w-100 pill"> Create An Account</button>
                </div>
                <div class="col-12">
                </div>
                <div class="col-sm-12 mb-0">
                    <div class="have-account">
                        <p class="text font-14">Already a member? <a class="link text-main text-decoration-underline  fw-500" href="{{route('customer-login')}}">Login</a></p>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
@endsection

