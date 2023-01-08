@extends('master3')
@section('main')
    <div class="col-md-12"">
    <div class="tile">
        <div class="tile-body">
            <div class="row1">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 100px">
                    <div >
                        <div style="width: 40%;  ;float: right ; margin-right :10px ; margin-top:  ; margin-bottom:10px" >
                <table> <tr>    <img style="width: 80% ; height:287px" src= "http://localhost:8000/images/{{$painting->image}}"  class="rounded mx-auto d-block"></tr></table>
                        </div>
                        <div style="width: 50%; float: right ;">

                                <table  class="table table-striped table-dark" id="sampleTable"  >
                                    <tr ><td>اسم اللوحة</td><td >{{$painting->p_name}}</td> </tr>
                                    <tr > <td>اسم الرسام</td><td >{{$painting->a_name}}</td></tr>
                                    <tr > <td>نوع اللوحة  </td> <td >{{$painting->category}}</td></tr>
                                    <tr > <td> التفاصيل</td> <td >{{$painting->details}}</td></tr>
                                    <tr> <td> سعر اللوحة</td><td>{{$painting->price}}</td></tr>
                                    <tr > <td>التوفر </td> <td >{{$painting->available}}</td></tr>
                                    <tr > <td>تاريخ الرسم  </td> <td >{{$painting->date}}</td></tr>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
