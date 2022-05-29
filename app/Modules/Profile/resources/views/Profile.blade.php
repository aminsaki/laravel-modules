@extends('License::layouts.admin')
@section('container')
    <main class="main">
        <div class="container">
            <div class="row">
                <div class="breadcrumbs u-margin-top-9 u-margin-bottom-19">
                    <div class="breadcrumbs--title">
                        <h5><a href="" class="title"> پروفایل کاربر </a></h5>
                        <img src="/images/arrow_down.svg" alt="" class="breadcrumbs--icon"/>
                    </div>
                </div>
            </div>
            <form id="myForm"   class="row" action="{{url('profiles')}}" method="post" >
                {{ csrf_field() }}

                <div class="col-md-12 u-margin-bottom-19">
                    <div class="submit__form">
                        <button id="form-submit"   class="btn btn--success" type="button"> بروزرسانی
                        </button>
                    </div>
                </div>

                <div class="grid grid__container u-padding-bottom-100">
                    <div class="row u-margin-0">
                        <div class="master__form">
                            <div class="row u-margin-0 u-margin-bottom-30">
                                <div class="panel">
                                    <div class="panel__body">
                                        <div class="row u-margin-top-16">
                                            <div class="col-md-4 col-sm-12 u-margin-bottom-sm-16">
                                                <div class="m-form--group">
                                                    <div class="m-form--group--top">
                                                        <div class="right">
                                                            <label for="" class="title">نام <span>*</span></label>
                                                            <!-- error -->
                                                        </div>
                                                    </div>
                                                    <div class="m-form--group--bottom">
                                                        <div class="m-form--control--row">
                                                            <div class="container__forms">
                                                                <input type="text" name="first_name" maxlength="50"
                                                                       class="m-form--control m-form--control--input"
                                                                       value="{{$result->contacts[0]->first_name }}">
                                                            </div>
                                                            <span
                                                                class="error--message">{{ $errors->first('first_name') }}</span>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 u-margin-bottom-sm-16">
                                                <div class="m-form--group">
                                                    <div class="m-form--group--top">
                                                        <div class="right">
                                                            <label for="" class="title">نام خانوادگی
                                                                <span>*</span></label><!-- error -->
                                                        </div>
                                                    </div>
                                                    <div class="m-form--group--bottom">
                                                        <div class="m-form--control--row">
                                                            <div class="container__forms">
                                                                <input type="text" name="last_name" maxlength="50"
                                                                       class="m-form--control m-form--control--input"
                                                                       value="{{$result->contacts[0]->last_name }}">
                                                            </div>
                                                            <span
                                                                class="error--message">{{ $errors->first('last_name') }}</span>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 u-margin-bottom-sm-16">
                                                <div class="m-form--group">
                                                    <div class="m-form--group--top">
                                                        <div class="right">
                                                            <label for="" class="title">ایمیل<span>*</span></label>
                                                            <!-- error -->
                                                        </div>
                                                    </div>
                                                    <div class="m-form--group--bottom">
                                                        <div class="m-form--control--row">
                                                            <div class="container__forms">
                                                                <input type="text" name="email" maxlength="100"
                                                                       class="m-form--control m-form--control--input"
                                                                       value="{{$result->email }}">
                                                            </div>
                                                            <span
                                                                class="error--message">{{ $errors->first('email') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--     rows2-->
                                        <div class="row u-margin-top-16">
                                            <div class="col-md-6 col-sm-12 u-margin-bottom-sm-16">
                                                <div class="m-form--group">
                                                    <div class="m-form--group--top">
                                                        <div class="right">
                                                            <label class="title">کدملی <span>*</span></label>
                                                        </div>
                                                    </div>
                                                    <div class="m-form--group--bottom">
                                                        <div class="m-form--control--row">
                                                            <div class="container__forms">
                                                                <input type="text" name="nationalCode" maxlength="10"
                                                                       class="m-form--control m-form--control--input"
                                                                       value="{{$result->contacts[0]->national_code }}">
                                                            </div>
                                                            <span
                                                                class="error--message">{{ $errors->first('nationalCode') }}</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12 u-margin-bottom-sm-16">
                                                <div class="m-form--group">
                                                    <div class="m-form--group--top">
                                                        <div class="right">
                                                            <label for="" class="title">تلفن همراه
                                                                <span>*</span></label>
                                                            <!-- error -->
                                                        </div>
                                                    </div>
                                                    <div class="m-form--group--bottom">
                                                        <div class="m-form--control--row">
                                                            <div class="container__forms">
                                                                <input type="text" name="phoneNumber" maxlength="11"
                                                                       class="m-form--control m-form--control--input"
                                                                       value="{{$result->contacts[0]->phone_number }}">
                                                            </div>
                                                            <span
                                                                class="error--message">{{ $errors->first('phoneNumber') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--     rows3-->
                                        <div class="row u-margin-top-16">
                                            <div class="col-md-12 col-sm-12 u-margin-bottom-sm-16">
                                                <div class="m-form--group">
                                                    <div class="m-form--group--top">
                                                        <div class="right">
                                                            <label for="" class="title">آدرس <span>*</span></label>
                                                            <!-- error -->
                                                        </div>
                                                    </div>
                                                    <div class="m-form--group--bottom">
                                                        <div class="m-form--control--row">
                                                            <div class="container__forms">
                                                                <input type="text" name="address" maxlength="100"
                                                                       class="m-form--control m-form--control--input"
                                                                       value="{{$result->contacts[0]->address_street}}">
                                                            </div>
                                                            <span
                                                                class="error--message">{{ $errors->first('address') }}</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 u-margin-bottom-sm-16">
                                                <div class="m-form--group">
                                                    <div class="m-form--group--top">
                                                        <div class="right">
                                                            <label for="" class="title">شهر <span>*</span></label>
                                                            <!-- error -->
                                                        </div>
                                                    </div>
                                                    <div class="m-form--group--bottom">
                                                        <div class="m-form--control--row">
                                                            <div class="container__forms">
                                                                <input type="text" name="city" maxlength="50"
                                                                       class="m-form--control m-form--control--input"
                                                                       value="{{$result->contacts[0]->address_city }}">
                                                            </div>
                                                            <span
                                                                class="error--message">{{ $errors->first('city') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 u-margin-bottom-sm-16">
                                                <div class="m-form--group">
                                                    <div class="m-form--group--top">
                                                        <div class="right">
                                                            <label for="" class="title">استان <span>*</span></label>
                                                            <!-- error -->
                                                        </div>
                                                    </div>
                                                    <div class="m-form--group--bottom">
                                                        <div class="m-form--control--row">
                                                            <div class="container__forms">
                                                                <input type="text" name="state" maxlength="50"
                                                                       class="m-form--control m-form--control--input"
                                                                       value="{{$result->contacts[0]->address_state}}">
                                                            </div>
                                                            <span
                                                                class="error--message">{{ $errors->first('state') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 u-margin-bottom-sm-16">
                                                <div class="m-form--group">
                                                    <div class="m-form--group--top">
                                                        <div class="right">
                                                            <label for="" class="title">کد پستی <span>*</span></label>
                                                            <!-- error -->
                                                        </div>
                                                    </div>
                                                    <div class="m-form--group--bottom">
                                                        <div class="m-form--control--row">
                                                            <div class="container__forms">
                                                                <input type="text" name="postalCode" maxlength="10"
                                                                       class="m-form--control m-form--control--input"
                                                                       value="{{$result->contacts[0]->address_postal_code }}">
                                                            </div>
                                                            <span
                                                                class="error--message">{{ $errors->first('postalCode') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 u-margin-bottom-sm-16">
                                                <div class="m-form--group">
                                                    <div class="m-form--group--top">
                                                        <div class="right">
                                                            <label for="" class="title">کشور <span>*</span></label>
                                                            <!-- error -->
                                                        </div>
                                                    </div>
                                                    <div class="m-form--group--bottom">
                                                        <div class="m-form--control--row">
                                                            <div class="container__forms">
                                                                <input type="text" name="addressCountry" maxlength="50"
                                                                       class="m-form--control m-form--control--input"
                                                                       value="{{$result->contacts[0]->address_country}}">
                                                            </div>
                                                            <span
                                                                class="error--message">{{ $errors->first('addressCountry') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-12 u-margin-bottom-sm-16">
                                                <div class="m-form--group">
                                                    <div class="m-form--group--top">
                                                        <div class="right">
                                                            <label for="" class="title">آدرس وب سایت
                                                                <span>*</span></label><!-- error -->
                                                        </div>
                                                    </div>
                                                    <div class="m-form--group--bottom">
                                                        <div class="m-form--control--row">
                                                            <div class="container__forms">
                                                                <input type="text" name="webSite" maxlength="100"
                                                                       class="m-form--control m-form--control--input"
                                                                       value="{{$result->contacts[0]->web_site }}">
                                                            </div>
                                                            <span
                                                                class="error--message">{{ $errors->first('webSite') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-12 u-margin-bottom-sm-16">
                                                <div class="m-form--group">
                                                    <div class="m-form--group--top">
                                                        <div class="right">
                                                            <label for="" class="title">آدرس اینستاگرام
                                                                <span>*</span></label><!-- error -->
                                                        </div>
                                                    </div>
                                                    <div class="m-form--group--bottom">
                                                        <div class="m-form--control--row">
                                                            <div class="container__forms">
                                                                <input type="text" name="instagram" maxlength="100"
                                                                       class="m-form--control m-form--control--input"
                                                                       value="{{$result->contacts[0]->instagram }}">
                                                            </div>
                                                            <span
                                                                class="error--message">{{ $errors->first('instagram') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 u-margin-bottom-sm-16">
                                                <div class="m-form--group">
                                                    <div class="m-form--group--top">
                                                        <div class="right">
                                                            <label for="" class="title">توضحیات <span>*</span></label>
                                                            <!-- error -->
                                                        </div>
                                                    </div>
                                                    <div class="m-form--group--bottom">
                                                        <div class="m-form--control--row">
                                                            <div class="container__forms">
                                                            <textarea cols="2" name="description" maxlength="200"
                                                                      class="m-form--control m-form--control--input">
                                                             {{$result->contacts[0]->description}}
                                                            </textarea>
                                                            </div>
                                                            <span
                                                                class="error--message">{{ $errors->first('description') }}</span>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
@endsection
@push('scripts')
    <script>


        document.getElementById("form-submit").addEventListener("click", function () {
            document.getElementById("form-submit").disabled = true;
            document.getElementById("form-submit").textContent = 'در حال بارگذاری ...';
            document.getElementById("myForm").submit();
        });

        @if(isset($success))

        $(function () {
            swal({
                icon: 'success',
                text: '{{$success}}',
                showConfirmButton: false,
                timer: 3000
            });
        });

        @endif
    </script>
@endpush



