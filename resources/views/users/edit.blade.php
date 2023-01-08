@extends('master')
@section('main')
    <div dir="rtl" class="col-md-12"">
    <div class="tile">
        <div class="tile-body">
            <div class="row1">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 100px">
                    <div >
                        <div style="margin-right :10%; margin-bottom:10px" >
                            <form method="post" action="{{url('/Users/update',$users->id)}}">
                                @csrf
                                <p>الاسم الاول:</p>
                                <input style="width: 30%" class="form-control" name="first_name" value="{{$users->first_name}}">
                                <p style="color: red" id="first_name" name="first_name">{{$errors->first('	first_name')}}</p>
                                <p>الاسم الثاني:</p>
                                <input style="width: 30%" class="form-control" name="last_name" value="{{$users->last_name}}">
                                <p style="color: red" id="last_name" name="last_name">{{$errors->first('last_name')}}</p>
                                <p>الايميل:</p>
                                <input style="width: 30%" class="form-control" name="email" value="{{$users->email}}" type="email">
                                <p style="color: red" id="email" name="email">{{$errors->first('email')}}</p>
                                <p>صلاحية:</p>
                                <select style="width: 30%" class="form-select form-select-lg mb-3" name="permission_id" id="permission_id">
                                    @foreach($permissions as $permission)
                                        <option value="{{$permission->id}}">{{$permission->name}}</option>
                                    @endforeach
                                </select ><br>
                                <p style="color: red" id="permissions" name="permissions">{{$errors->first('permissions')}}</p>
        {{--                                    <p> كلمة المرور الجديدة:</p>--}}
        {{--                                    <input class="form-control" id="password" name="password" type="password">--}}
                                <div class="mb-3">
                                </div>
                                <button type="submit" style="background-color: #AE0CE8; color:#ffffff" class="btn btn-light">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
