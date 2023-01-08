@extends('master')
@section('main')
    <div  class="col-md-12" style="margin-top: 5rem; " >
        <div class="tile">
            <div class="tile-body">
                <div class="row1"   >
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 10px ; margin-left:30px ;">
                        <div class="product-cart-inner">
                            <div id="example-basic">
                                <form method="post" action="{{url('/users/passwordUpdate')}}">
                                    @csrf
                                    <p> كلمة المرور الحالية:</p>
                                    <input class="form-control" id="old_password" name="old_password" type="password">
                                    <p style="color: red" id="l_old_password" name="l_old_password">{{$errors->first('old_password')}}</p>

                                    <p> كلمة المرور الجديدة:</p>
                                    <input class="form-control" id="password" name="password" type="password">
                                    <p style="color: red" id="new_password" name="new_password">{{$errors->first('password')}}</p>

                                    <p>تاكيد كلمة المرور:</p>
                                    <input class="form-control" id="confirm_password" name="confirm_password" type="password">
                                    <p style="color: red" id="l_confirm_password" name="l_confirm_password">{{$errors->first('confirm_password')}}</p>

                                    <input class="btn btn-outline-dark" type="submit" value="حفظ">
                                </form>
                                <br><br><br><br><br>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
