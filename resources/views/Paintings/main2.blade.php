@extends('master')
@section('main')
    <div dir="rtl" class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 10px">
                        <div class="product-cart-inner">
                            <div id="example-basic">

                                <div class="container px-4 px-lg-5 mt-5">
                                    <form type="get" action="{{ url('/Paintings/like') }}">
                                        <input type="search" name="search" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
                                        <button type="submit" style="background-color: #AE0CE8; color:#ffffff" class="btn btn-light">Search</button>
                                    </form>
                                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                                        @foreach($paintings as $painting)
                                        <div id="mysearch" data-aos="zoom-out-right" data-aos-duration="1500" class="col mb-5">
                                            <div id="mytag" class="card h-100">
                                                <a href="{{url('/Paintings/show_painting',$painting->id)}}"><img class="card-img-top" src="{{url('images',$painting->image)}}" width="450px" height="150px"></a>
                                                <div class="card-body p-4">
                                                    <h4 id="p_name" class="text-center">{{$painting->p_name}}</h4>
                                                    <h6 id="a_name" class="text-center">{{$painting->a_name}} </h6>
                                                        @if(strlen($painting->details)>15)
                                                            <h6 id="details" class="text-center"><?php echo substr($painting->details,0,15) ?>...</h6>
                                                        @else
                                                            <h6 id="details" class="text-center">{{$painting->details}}</h6>
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <br>
                                <center>

                                    <span style="">{{$paintings->onEachSide(1)->links() }}</span>

                                </center>
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
          search = document.getElementById("mysearch");
          card = search.getElementById("mytag");
          for (i = 0; i < tr.length; i++) {
            h4 = card[i].getElementsByTagName("h4");
            if (h4) {
              txtValue = h4.textContent || h4.innerText;
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
