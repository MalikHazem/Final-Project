@extends('master')
@section('main')
    <div dir="rtl" class="col-md-12" style="margin-top: 5rem; " >
        <div class="tile">
            <div class="tile-body">
                <div class="row1"   >
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin: 30px ;">
                        <div class="product-cart-inner">
                            <div id="example-basic">
                                <table class="table" style="margin-top: 25px ;   " >
                                    <thead >
                                      <tr style="background-color: #AE0CE8">
                                        <th style="background-color: #AE0CE8" scope="col">رقم الطلبية</th>
                                        <th style="background-color: #AE0CE8" scope="col">رقم المستخدم</th>
                                        <th style="background-color: #AE0CE8" scope="col">رقم اللوحة</th>
                                        <th style="background-color: #AE0CE8" scope="col">السعر</th>
                                        <th style="background-color: #AE0CE8" scope="col">التاريخ</th>
                                        <th style="background-color: #AE0CE8" style="width: 20%"colspan="2"><center>العمليات على المستخدمين</center></th>
                                      </tr>
                                    </thead>
                                    @foreach($orders as $order)

                                    <tbody>
                                      <tr style="background-color: #ffffff; border: 2px solid #AE0CE8">
                                        <td style="background-color: #ffffff; border: #AE0CE8;" scope="row">{{$order->id}}</td>
                                        <td style="background-color: #ffffff; border: #AE0CE8">{{$order->user_id}}</td>
                                        <td style="background-color: #ffffff; border: #AE0CE8">{{$order->painting_id}}</td>
                                        <td style="background-color: #ffffff; border: #AE0CE8">{{$order->price}}</td>
                                        <td style="background-color: #ffffff; border: #AE0CE8">{{$order->date}}</td>
                                        <td style="background-color: #ffffff; border: #AE0CE8"><form method="post" action="{{url('Orders/done',$order->id)}}"><button class="btn btn-outline-dark">تم التسليم </button></form></td>
                                        {{-- <td style="width: 10%; background-color: #ffffff; border: #AE0CE8"><a style="text-align: center;" href="{{url('Orders/done',$order->id)}}" class="btn btn-outline-dark">  تم التسليم </a> </td>
                                        <td style="width: 10%; background-color: #ffffff; border: #AE0CE8"><a style="text-align: center; width: 50%" href="{{url('Orders/cancel',$order->id)}}" class="btn btn-outline-dark"> الغاء</a> </td> --}}
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
