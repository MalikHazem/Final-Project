@extends('master')
@section('main')
    <div dir="rtl" class="col-md-12" style="margin-top: 5rem; " >
        <div class="tile">
            <div class="tile-body">
                <div class="row1"   >
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin: 30px ;">
                        <div class="product-cart-inner">
                            <div id="example-basic">
                                <table class="table table-striped table-dark" style="margin-top: 25px;width: 100%;" >
                                    <thead >
                                    <tr data-aos="flip-left" data-aos-duration="1000">
                                        <th style="width: 16%;" scope="col">رقم الطلبية</th>
                                        <th style="width: 16%;" scope="col">اسم المستخدم</th>
                                        <th style="width: 16%;" scope="col">رقم اللوحة</th>
                                        <th style="width: 16%;" scope="col">السعر</th>
                                        <th style="width: 16%;" scope="col">التاريخ</th>
                                        <th style="width: 16%" colspan="2" scope="col">العمليات على المستخدمين</th>
                                    </tr>
                                    </thead>
                                    @foreach($orders as $order)

                                    <tbody>
                                    <tr data-aos="flip-right" data-aos-duration="2000">
                                        <td scope="row">{{$order->id}}</td>
                                        <td>{{$order->first_name}} {{$order->last_name}}</td>
                                        <td>{{$order->painting_id}}</td>
                                        <td>{{$order->price}}</td>
                                        <td>{{$order->date}}</td>
                                        <td style="display: flex; flex-direction: row; justify-content: center; margin-top: 1px; background-color: red;"><form style="margin:0px 10px" method="post" action="{{url('Orders/done',$order->id)}}">@csrf<button class="btn btn-outline-primary">تم التسليم </button></form>
                                        <form method="post" action="{{url('Orders/cancel',$order->id)}}">@csrf<button class="btn btn-outline-primary">الغاء</button></form></td>
                                        {{-- <td style="text-align: center;width: 10%;"><a style="text-align: center;" href="{{url('Orders/done',$order->id)}}" class="btn btn-outline-primary">  تم التسليم </a>
                                        <a style="text-align: center; width: 20%;margin-right: 10%;" href="{{url('Orders/cancel',$order->id)}}" class="btn btn-outline-primary"> الغاء</a> </td> --}}
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
