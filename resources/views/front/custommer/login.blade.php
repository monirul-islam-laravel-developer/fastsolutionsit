@extends('front.master.master')
@section('title')
    Login Page
@endsection
@section('body')
    <div class="account-content">
        <h4 class="account-content__title mb-48 text-capitalize">Welcome Back!</h4>
        <form action="{{route('customer-logincheck')}}" method="get">
            @csrf
            <div class="row gy-4">
                <div class="col-12">
                    <label for="identifier" class="form-label mb-2 font-18 font-heading fw-600">Email / Phone</label>
                    <div class="position-relative">
                        <input type="text" name="identifier" class="common-input common-input--bg common-input--withIcon" id="identifier" placeholder="Phone/Email">
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
                    <div class="flx-between gap-1">
                        <div class="common-check my-2">
                            <input class="form-check-input" type="checkbox" name="checkbox" id="keepMe">
                            <label class="form-check-label mb-0 fw-400 font-14 text-body" for="keepMe">Keep me signed in</label>
                        </div>
                        <a href="#" class="forgot-password text-decoration-underline text-main text-poppins font-14">Forgot password?</a>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-main btn-lg w-100 pill"> Sign In</button>
                </div>

                </div>
                <div class="col-sm-12 mb-0">
                    <div class="have-account">
                        <p class="text font-14">New to the market? <a class="link text-main text-decoration-underline fw-500" href="{{route('customer-register')}}">sign up</a></p>
                    </div>
                </div>
        </form>
            </div>
@endsection


