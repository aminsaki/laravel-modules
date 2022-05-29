@extends('License::layouts.admin')
@section('container')

    <div>
        <main class="main">
            <div class="container">
                <div class="row">
                    <div class="breadcrumbs u-margin-top-9 u-margin-bottom-19">
                        <div class="breadcrumbs--title">
                            <h5><a href="{{url('companys')}}" class="btn btn--success"> ثبت شرکت</a></h5>
                            <img src="/images/arrow_down.svg" alt="" class="breadcrumbs--icon"/>

                        </div>
                    </div>
                </div>
                <form class="row" action="#">

                    <div class="row">
                        <div class="table__continer">
                            <div class="table__row">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th><a href="#">نام</a></th>
                                        <th><a href="#">نام کسب و کار</a></th>
                                        <th><a href="#">مالک</a></th>
                                        <th><a href="#">تلفن کسب و کار</a></th>
                                        <th><a href="#">استان</a></th>
                                        <th><a href="#">شهر</a></th>
                                        <th><a href="#">وضعیت</a></th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($result as $row)
                                        <tr>
                                            <td>{{$row->first_name .' '. $row->last_name }}</td>
                                            <td>{{$row->organization_name}}</td>
                                            <td>{{$row->user->name}}</td>
                                            <td>{{$row->mobile}}</td>
                                            <td>{{$row->address_state}}</td>
                                            <td>{{$row->address_city}}</td>
                                            <td>
                                                <a href="#" id="btnDelete" data-id="{{$row->id}}"
                                                   class="btn btn-danger">حذف</a>
                                                <a href='{{url('companys/edit')}}/{{$row->id}}' class="btn">ویرایش</a>

                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <a href="#" class="show__more--lists" style="display: flex;justify-content: space-between;">
                                <span>رکورد  {{$count}} </span>
                                <span>
                              </span>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </main>
        <!-- end main__container -->
    </div>

@endsection

@push('scripts')
    <script>


        $(document).ready(function () {
            $("table tbody tr #btnDelete").click(function () {
            swal({
                text: "آیا برای حذف اطلاعات انتخاب شده، اطمینان دارید؟",
                type: "warning",
                buttons: {
                    cancel: "خیر",
                    confirm: "بله",
                }

            }).then((willDelete) => {
                if (!willDelete) return;

                    let id = $(this).attr('data-id');
                    let url = `{{url("/companys/delete")}}/${id}`;
                    window.location.replace(url);
                })
            });

        })
    </script>
    @if(session()->has('error'))
        <script>
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
    @if(session()->has('success'))
        <script>
            $(function () {
                swal({
                    icon: 'success',
                    text: '{{session()->get('success')}}',
                    showConfirmButton: false,
                    timer: 2000
                });
            });
        </script>
    @endif
@endpush

