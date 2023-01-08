@extends('master')
@section('main')
    <div  class="col-md-12" style="margin-top: 5rem; " >
        <div class="tile">
            <div class="tile-body">
                <div class="row1"   >
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 10px ; margin-left:30px ;">
                        <div class="product-cart-inner">
                            <div id="example-basic">
                                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
                                <table id="myTable" dir="rtl" class="table table-striped table-dark" style="margin-top: 25px ;" >
                                    <thead >
                                        <tr data-aos="flip-left" data-aos-duration="1000" class="vertical-align: middle;">
                                            <th>رقم اللوحة</th>
                                            <th>اسم اللوحة</th>
                                            <th>اسم الرسام</th>
                                            <th>نوع اللوحة</th>
                                            <th>التفاصيل</th>
                                            <th>سعر اللوحة</th>
                                            <th>التوفر</th>
                                            <th>تاريخ الرسم</th>
                                            <th colspan="2"><center>العمليات على المستخدمين</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach($paintings as $painting)
                                            <tr data-aos="flip-right" data-aos-duration="2000">
                                            <td>{{$painting->id}}</td>
                                            <td>{{$painting->p_name}}</td>
                                            <td>{{$painting->a_name}}</td>
                                            <td>{{$painting->category}}</td>
                                            <td>{{$painting->details}}</td>
                                            <td>{{$painting->price}}</td>
                                            <td>{{$painting->available}}</td>
                                            <td>{{$painting->location}}</td>
                                            <td style="text-align: center"><a href="{{url('Paintings/edit',$painting->id)}}" class="btn btn-outline-primary">تعديل</a></td>
                                            <td style="text-align: right"><a href="{{url('Paintings/delete',$painting->id)}}" class="btn btn-outline-primary"> حذف</a></td>
                                            </tr>
                                            @endforeach
                                    </tbody>

                                </table>

                                <br>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <script>
        function myFunction() {
          var input, filter, table, tr, td, i, txtValue;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("myTable");
          tr = table.getElementsByTagName("tr");
          for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
              txtValue = td.textContent || td.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
            }
          }
        }
        </script>
@endsection
