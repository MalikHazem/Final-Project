
@section('content')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 10px">
                        <div class="product-cart-inner">
                            <div id="example-basic">
                                <h3 style="color:#333">المستخدمين</h3>
                                <section>
                                    <div class="product-list-cart">
                                        <div class="product-status-wrap border-pdt-ct">
                                             <table  class="table table-hover table-bordered" id="sampleTable" style="margin-top: 10px">
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
                                                @foreach($users as $user)
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
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        function edit($code) {
            window.location.href = $code;
        }
    </script>
@endsection
