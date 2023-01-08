@extends('master')
@section('main')
    <div dir="rtl" class="col-md-12"">
    <div class="tile">
        <div class="tile-body">
            <div class="row1">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 100px">
                    <div >
                        <div style="margin-right :10%; margin-bottom:10px" >
                            <form method="post" action="{{url('/Paintings/update',$paintings->id)}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                  <label for="name">اسم اللوحة </label>
                                  <input style="width: 30%" type="text" class="form-control" id="p_name" name="p_name" value="{{$paintings->p_name}}">
                                </div><br>

                                <div class="form-group">
                                  <label for="exampleFormControlFile1">أضف لوحة </label>
                                  <input style="width: 30%" type="file" class="form-control-file" name="image" id="image">
                                </div><br>

                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="Decs">وصف اللوحة </label>
                                    <textarea style="width: 60%" type="text" class="form-control" name="details" id="details">
                                        {{$paintings->details}}
                                    </textarea>
                                  </div><br>

                                  <div class="form-group">
                                  <label for="name">اسم الفنان </label>
                                  <input style="width: 30%" type="text" class="form-control" id="a_name" name="a_name" value="{{$paintings->a_name}}">
                                </div><br>

                                <div class="form-group">
                                  <label for="name">السعر  </label>
                                  <input style="width: 30%" type="text" class="form-control" id="price" name="price" value="{{$paintings->price	}}">
                                </div><br>

                                <div class="form-group">
                                    <label for="category">النوع اللوحة </label>
                                    <select style="width: 30%" class="form-select form-select-lg mb-3" name="category" id="category" value="{{$paintings->category}}">
                                      @foreach($categorys as $category)
                                          <option value="{{$category->id}}">{{$category->name}}</option>
                                      @endforeach
                                  </select>
                                  </div>

                                <div class="form-group">
                                  <label for="category">تاريخ اللوحة </label>
                                  <input style="width: 30%" type="date" class="form-control" id="date" name="date" value="{{$paintings->date}}">
                                </div><br>

                                <div class="form-group">
                                    <label for="category">موقع عرض اللوحة </label>
                                    <select style="width: 30%" class="form-select form-select-lg mb-3" name="location" id="location" value="{{$paintings->location}}">
                                        @foreach($locations as $location)
                                            <option value="{{$location->id}}">{{$location->location}}</option>
                                        @endforeach
                                    </select ><br>
                                </div><br>

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
