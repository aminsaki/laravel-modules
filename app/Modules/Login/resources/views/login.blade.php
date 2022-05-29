@extends('License::layouts.app')
@section('container')
    <section class="login section">
        <div class="login__wrapper">
            <div class="sidbar__left--login">
                <div class="img__sidbar">
                    <img src='{{url('/public/images/bgLogin.svg')}}' alt=""/>
                </div>
            </div>
            <div class="sidbar__right--login">
                <div class="sidbar__right__wrapper">
                    <div class="login__logo">
                        <img src='/images/Logo.svg' alt=""/>
                    </div>
                    <div class="login__title">
                        <h2>سیستم مدیریت ارتباط با مشتری</h2>
                    </div>
                    <div class="login__form">
                        <form action="{{route('loginLogin')}}"   method="post" class="contact__form" id="form__login">
                            {{ csrf_field() }}

                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li style="color: red">{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="form__group">
                                <label class="form__group--lable">نام کاربری</label>
                                <input type="text" name="email"  value="{{old('email')}}" class="form__group--input"  id="username__login" >
                                <i class="user__icon"></i>
                            </div>


                            <div class="form__group">
                                <label class="form__group--lable">پسورد</label>
                                <input name="password"
                                    class="form__group--input" type="password"
                                    id="password__login" value="{{old('password')}}">

                                <i class="user__pass"></i>
                                <div class="showPassword"></div>
                            </div>

                            <div class="form__group">
                                <div class="button__group">
                                    <button type="submit" class="btn btn--login">ورود</button>
                                </div>
                            </div>
                            <div class="form__group">
                                <a href="#" class="form__group--forgetPassword"
                                >کلمه عبور را فراموش کرده اید؟</a
                                >
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

