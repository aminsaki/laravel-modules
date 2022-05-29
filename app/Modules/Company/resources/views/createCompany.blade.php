@extends('License::layouts.admin')
@section('container')
    <main class="main">
        <div class="container">
            <div class="row">
                <div class="breadcrumbs u-margin-top-9 u-margin-bottom-19">
                    <div class="breadcrumbs--title">
                        <h5><a href="#" class="title"> ثبت شرکت </a></h5>
                        <img src="{{url('public/images/arrow_down.svg')}}" alt="" class="breadcrumbs--icon"/>
                    </div>
                </div>
            </div>

            <form class="row" method="post" action="{{url('companys')}}">
                {{ csrf_field() }}
                <div class="col-md-12 u-margin-bottom-19">
                    <div class="submit__form">
                        <button class="btn btn--success" type="submit">
                            ذخیره
                        </button>
                    </div>
                </div>
                <div class="col-md-10 col-sm-10 ">
                    <div class="row u-margin-0">
                        <div class="master__form">
                            <div class="row u-margin-0 u-margin-bottom-30">
                                <div class="panel">
                                    <div class="panel__header">
                                        <div class="panel__header--row">
                                            <h3>ثبت شرکت</h3>
                                        </div>
                                    </div>
                                    <div class="panel__body">
                                        <!--   load  input form -->
                                        <div class="row">
                                            <div class="row u-margin-top-16">
                                                <div class="col-md-12 col-sm-12 u-margin-bottom-sm-16">
                                                    <div class="m-form--group">
                                                        <div class="m-form--group--top">
                                                            <div class="right">
                                                                <label for="" class="title">نام شرکت / موسسه /
                                                                    سازمان
                                                                    <span style="color:red">*</span>
                                                                </label>

                                                            </div>
                                                        </div>
                                                        <div class="m-form--group--bottom">
                                                            <div class="m-form--continers">
                                                                <div class="container__forms">
                                                                    <input type="text"
                                                                           name="organization_name"  maxlength="50"
                                                                           class="m-form--control m-form--control--input"
                                                                           value="{{ old('organization_name') }}"
                                                                    >
                                                                </div>
                                                                <span
                                                                    class="error--message">{{ $errors->first('organization_name') }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 u-margin-bottom-sm-16">
                                                    <div class="m-form--group">
                                                        <div class="m-form--group--top">
                                                            <div class="right">
                                                                <label for="" class="title">نام
                                                                    <span style="color:red">*</span>
                                                                </label>

                                                            </div>
                                                        </div>
                                                        <div class="m-form--group--bottom">
                                                            <div class="m-form--continers">
                                                                <div class="container__forms">
                                                                    <input type="text" name="first_name" maxlength="50"
                                                                           value="{{old('first_name')}}"
                                                                           class="m-form--control m-form--control--input"/>
                                                                </div>
                                                                <span
                                                                    class="error--message">{{ $errors->first('first_name') }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 u-margin-bottom-sm-16">
                                                    <div class="m-form--group">
                                                        <div class="m-form--group--top">
                                                            <div class="right">
                                                                <label for="" class="title">نام خانوادگی
                                                                    <span style="color:red">*</span></label>
                                                                <!-- error -->
                                                            </div>
                                                        </div>
                                                        <div class="m-form--group--bottom">
                                                            <div class="m-form--continers">
                                                                <div class="container__forms">
                                                                    <input type="text" name="last_name" maxlength="50"
                                                                           value="{{old('last_name')}}"

                                                                           class="m-form--control m-form--control--input"/>
                                                                </div>
                                                                <span
                                                                    class="error--message">{{ $errors->first('last_name') }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 u-margin-bottom-sm-16">
                                                    <div class="m-form--group">
                                                        <div class="m-form--group--top">
                                                            <div class="right">
                                                                <label for="" class="title">کدملی
                                                                    <span style="color:red">*</span></label>
                                                            </div>
                                                        </div>
                                                        <div class="m-form--group--bottom">
                                                            <div class="m-form--continers">
                                                                <div class="container__forms">
                                                                    <input type="text" name="national_number" maxlength="10"
                                                                           value="{{old('national_number')}}"
                                                                           class="m-form--control m-form--control--input"/>
                                                                </div>
                                                                <span
                                                                    class="error--message">{{ $errors->first('national_number') }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 u-margin-bottom-sm-16">
                                                    <div class="m-form--group">
                                                        <div class="m-form--group--top">
                                                            <div class="right">
                                                                <label for="" class="title">شماره تلفن همراه
                                                                    <span style="color:red">*</span>
                                                                </label>
                                                                <!-- error -->
                                                            </div>
                                                        </div>
                                                        <div class="m-form--group--bottom">
                                                            <div class="m-form--continers">
                                                                <div class="container__forms">
                                                                    <input type="text" name="mobile" maxlength="11"
                                                                           value="{{old('mobile')}}"

                                                                           class="m-form--control m-form--control--input"/>
                                                                </div>
                                                                <span
                                                                    class="error--message">{{ $errors->first('mobile') }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--         ///row2-->
                                            <div class="row u-margin-top-16">
                                                <div class="col-md-6 col-sm-12 u-margin-bottom-sm-16">
                                                    <div class="m-form--group">
                                                        <div class="m-form--group--top">
                                                            <div class="right">
                                                                <label for="" class="title">پست الکترونیکی
                                                                    <span style="color:red">*</span></label>
                                                            </div>
                                                        </div>
                                                        <div class="m-form--group--bottom">
                                                            <div class="m-form--continers">
                                                                <div class="container__forms">
                                                                    <input type="text"
                                                                           name="email"
                                                                           value="{{old('email')}}"
                                                                           class="m-form--control m-form--control--input"
                                                                    />

                                                                </div>


                                                                <span
                                                                    class="error--message">{{ $errors->first('email') }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 u-margin-bottom-sm-16">
                                                    <div class="m-form--group">
                                                        <div class="m-form--group--top">
                                                            <div class="right">
                                                                <label for="" class="title">جنسیت
                                                                    <span style="color:red">*</span></label>
                                                            </div>
                                                        </div>
                                                        <div class="m-form--group--bottom">
                                                            <div class="m-form--continers">
                                                                <div class="container__forms">
                                                                    <select
                                                                        class="m-form--control m-form--control--input"
                                                                        name="gender" id="gender">
                                                                        <option value="man">مرد</option>
                                                                        <option value="female">زن</option>
                                                                    </select>
                                                                </div>
                                                                <span
                                                                    class="error--message">{{ $errors->first('gender') }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row u-margin-top-16">
                                                <div class="col-md-12 col-sm-12 u-margin-bottom-sm-16">
                                                    <div class="m-form--group">
                                                        <div class="m-form--group--top">
                                                            <div class="right">
                                                                <label for="" class="title">آدرس <span
                                                                        style="color:red">*</span>
                                                                </label><!-- error -->
                                                            </div>
                                                        </div>
                                                        <div class="m-form--group--bottom">
                                                            <div class="m-form--control--row">
                                                                <div class="container__forms">
                                                                    <input type="text" name="address" maxlength="100"
                                                                           value="{{ old('address')  }}"
                                                                           class="m-form--control m-form--control--input">
                                                                </div>
                                                                <span
                                                                    class="error--message">{{ $errors->first('address') }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 u-margin-bottom-sm-16">
                                                    <div class="m-form--group">
                                                        <div class="m-form--group--top">
                                                            <div class="right">
                                                                <label for="" class="title">شهر <span
                                                                        style="color:red">*</span>
                                                                </label><!-- error -->
                                                            </div>
                                                        </div>
                                                        <div class="m-form--group--bottom">
                                                            <div class="m-form--control--row">
                                                                <div class="container__forms">
                                                                    <input type="text" name="address_city" maxlength="50"
                                                                           value="{{old('address_city') }}"
                                                                           class="m-form--control m-form--control--input">
                                                                </div>
                                                            </div>
                                                            <span
                                                                class="error--message">{{ $errors->first('address_city') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 u-margin-bottom-sm-16">
                                                    <div class="m-form--group">
                                                        <div class="m-form--group--top">
                                                            <div class="right">
                                                                <label for="" class="title">استان <span
                                                                        style="color:red">*</span>
                                                                </label>
                                                                <!-- error -->
                                                            </div>
                                                        </div>
                                                        <div class="m-form--group--bottom">
                                                            <div class="m-form--control--row">
                                                                <div class="container__forms">
                                                                    <input type="text"
                                                                           name="address_state" maxlength="50"
                                                                           value="{{ old('address_state')  }}"
                                                                           class="m-form--control m-form--control--input">
                                                                </div>
                                                            </div>
                                                            <span
                                                                class="error--message">{{ $errors->first('address_state') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 u-margin-bottom-sm-16">
                                                    <div class="m-form--group">
                                                        <div class="m-form--group--top">
                                                            <div class="right">
                                                                <label for="" class="title">کد پستی <span
                                                                        style="color:red">*</span>
                                                                </label>
                                                                <!-- error -->
                                                            </div>
                                                        </div>
                                                        <div class="m-form--group--bottom">
                                                            <div class="m-form--control--row">
                                                                <div class="container__forms">
                                                                    <input type="text"
                                                                           name="address_postal_code" maxlength="11"
                                                                           value="{{old('address_postal_code') }}"
                                                                           class="m-form--control m-form--control--input">
                                                                </div>
                                                            </div>
                                                            <span
                                                                class="error--message">{{ $errors->first('address_postal_code') }}</span>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-12 u-margin-bottom-sm-16">
                                                    <div class="m-form--group">
                                                        <div class="m-form--group--top">
                                                            <div class="right"><label for="" class="title">کشور
                                                                    <span style="color:red">*</span>
                                                                </label>
                                                                <!-- error -->
                                                            </div>
                                                        </div>
                                                        <div class="m-form--group--bottom">
                                                            <div class="m-form--control--row">
                                                                <div class="container__forms">
                                                                    <input type="text"
                                                                           name="address_country" maxlength="50"
                                                                           value="{{old('address_country')}}"
                                                                           class="m-form--control m-form--control--input">
                                                                </div>
                                                                <span
                                                                    class="error--message">{{ $errors->first('address_country') }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 u-margin-bottom-sm-16">
                                                    <div class="m-form--group">
                                                        <div class="m-form--group--top">
                                                            <div class="right">
                                                                <label for="" class="title">توضحیات <span
                                                                        style="color:red">*</span>
                                                                </label>
                                                                <!-- error -->
                                                            </div>
                                                        </div>
                                                        <div class="m-form--group--bottom">
                                                            <div class="m-form--control--row">
                                                                <div class="container__forms">
                        <textarea type="text" cols="2" name="description" maxlength="200"
                                  class="m-form--control m-form--control--input">
                         {{old('description')}}
                        </textarea>
                                                                </div>
                                                                <span class="error--message">
                                                                         {{ $errors->first('description') }}</span>
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
                </div>
            </form>

        </div>
    </main>
@endsection

@push('scripts')

    @if(session()->has('error'))
            $(function () {

                swal({
                    icon: 'error',
                    text: '{{session()->get('error')}}',
                    showConfirmButton: false,
                    timer: 2000
                });
            });
        </script>
        @endif
@endpush

