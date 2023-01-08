@extends('master')
@section('main')
    <div  class="col-md-12" style="margin-top: 5rem; " >
        <div class="tile">
            <div class="tile-body">
                <div class="row1"   >
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 10px ; margin-left:30px ;">
                        <div class="product-cart-inner">
                            <div id="example-basic">
                                <table dir="rtl" class="table table-striped table-dark" style="margin-top: 25px ;" >
                                    <thead >
                                        <tr class="vertical-align: middle;">
                                            <th>رقم المستخدم</th>
                                            <th>الاسم الاول</th>
                                            <th>الاسم الاخير</th>
                                            <th>البريد الالكتروني</th>
                                            <th>كلمة المرور</th>
                                            <th>رقم الهاتف</th>
                                            <th>المدينة</th>
                                            <th>الصلاحية</th>
                                        </tr>
                                    </thead>
                                    @foreach($users as $user)

                                    <tbody>
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->first_name}}</td>
                                            <td>{{$user->last_name}}</td>
                                            <td>{{$user->password}}</td>
                                            <td>{{$user->phone}}</td>
                                            <td>{{$user->city}}</td>
                                            <td>{{$user->permissions}}</td>
                                            <td><a href="{{url('users/edit',$user->id)}}" class="btn btn-outline-primary">تعديل</a></td>
                                            <td><a href="{{url('users/delete',$user->id)}}" class="btn btn-outline-primary"> حذف</a></td>
                                        </tr>

                                    </tbody>
                                    @endforeach

                                  </table>

                                <br>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
