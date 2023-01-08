@extends('master')
@section('main')
    <div dir="rtl" class="col-md-12">
    <div class="tile">
        <div class="tile-body">
            <div class="row1">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 100px">
                    <div >
                        <div style="width: 40%;  ;float: right ; margin-right :10px ; padding-top: 2% ; margin-bottom:10px" >

                <table> <tr><img data-aos="flip-down" data-aos-duration="2000" style="width: 80% ; height:287px" src= "http://localhost:8000/images/{{$paintings->image}}"  class="rounded mx-auto d-block"></tr></table>
                        </div>
                        <div style="width: 50%; float: right; padding-top: 2%">
                                <table data-aos="flip-left" data-aos-duration="2000" class="table table-striped table-dark" id="sampleTable"  >
                                    <tr><td>اسم اللوحة</td><td >{{$paintings->p_name}}</td> </tr>
                                    <tr><td>اسم الرسام</td><td >{{$paintings->a_name}}</td></tr>
                                    <tr><td>نوع اللوحة  </td> <td >{{$paintings->name}}</td></tr>
                                    <tr><td> التفاصيل</td> <td >{{$paintings->details}}</td></tr>
                                    <tr><td> سعر اللوحة</td><td>{{$paintings->price}}</td></tr>
                                    <tr><td>التوفر </td> <td >{{$paintings->available}}</td></tr>
                                    <tr><td>تاريخ الرسم  </td> <td >{{$paintings->date}}</td></tr>
                                </table>
                                <br><br><br><br><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
