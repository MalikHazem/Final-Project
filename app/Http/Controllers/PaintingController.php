<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Painting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Location;
use App\Models\Category;

class PaintingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $paintings = Painting::where('owner',$id)->get();
        return view("paintings.showuser",compact('paintings'));
    }

    public function showadmin()
    {
        $paintings = Painting::get();
        return view("paintings.showadmin",compact('paintings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations = Location::get();
        $categorys = Category::get();
        return view('Paintings.create', compact('categorys','locations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file_extension = $request->image->getClientOriginalExtension();
        $file_name = time().".".$file_extension;
        $path = 'images';
        $request ->image-> move($path,$file_name);
        // $file =  $request ->file('image')-> store('images');

        $id = Auth::user()->id;
        $paintings=new Painting();
        $paintings->p_name=$request->p_name;
        $paintings->image= $file_name;
        $paintings->details=$request->details;
        $paintings->a_name=$request->a_name;
        $paintings->price=$request->price;
        $paintings->price=$request->price;
        $paintings->category=$request->category;
        $paintings->date=$request->date;
        $paintings->location=$request->location;
        $paintings->owner=$id;
        $paintings->save();

        return Redirect::to('http://127.0.0.1:8000/Paintings/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $id = Auth::user()->id;
        $locations = Location::get();
        $paintings = Painting::find($id);
        $categorys = Category::get();
        // $paintings = Painting::where('owner',$id)->first();
        return view("paintings.edit",compact('paintings','categorys','locations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $paintings=Painting::find($request->id);

        $file_extension = $request->image->getClientOriginalExtension();
        $file_name = time().".".$file_extension;
        $path = 'images';
        $request ->image-> move($path,$file_name);
        // $file =  $request ->file('image')-> store('images');

        $paintings->p_name=$request->p_name;
        $paintings->image= $file_name;
        $paintings->details=$request->details;
        $paintings->a_name=$request->a_name;
        $paintings->price=$request->price;
        $paintings->category=$request->category;
        $paintings->date=$request->date;
        $paintings->save();

        return Redirect::to('http://127.0.0.1:8000/Paintings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paintings = Painting::find($id);
        $paintings->delete();
        return Redirect::to('http://127.0.0.1:8000/Paintings');
    }
    public function main(Request $request)
    {
        // \Log::error("aaaaaa");
        $paintings = Painting::Paginate(12);
        $categorys = Category::get();
        return view('Paintings.main',compact('paintings','categorys'));
    }

    public function maincategory(Request $request, $category)
    {
        $paintings = Painting::join('category', 'paintings.category', '=', 'category.id')
        ->select('category.name', 'paintings.*')
        ->where("category.name", $category)
        ->paginate(12);
        $categorys = Category::get();
        // return $paintings;
        return view('Paintings.main',compact('paintings','categorys'));
    }


    public function show1($location){
        $painting = Painting::join('category', 'paintings.category', '=', 'category.id')
        ->select('category.name', 'paintings.*')
        ->where('location',$location)
        ->where('available',"yes")
        ->first();
        return $painting;
    }


    public function available(Request $request, $location)
    {
        // $painting = Painting::find($id);
        $painting = Painting::where('location',$location)->where('available','yes')->first();
    }

    public function show_painting($id)
    {
        $paintings = Painting::find($id)
        ->join('category', 'paintings.category', '=', 'category.id')
        ->select('category.name', 'paintings.*')
        ->where("paintings.id", $id)->first();
        return view('Paintings.show',compact('paintings'));
    }

    public function LocationLike($location, $searcha)
    {
        $paintings = Painting::where(function($query)use ($location, $searcha)
        {
            $query->where('p_name', 'LIKE', "%".$searcha."%")
            ->where('location',$location)
            ->where('available','yes');
        })
        ->orWhere(function($query)use ($location, $searcha)
        {
            $query->where('paintings.a_name', 'LIKE', "%".$searcha."%")
            ->where('location',$location)
            ->where('available','yes');
        })
        ->join('category', 'paintings.category', '=', 'category.id')
        ->select('category.name', 'paintings.*')
        ->orWhere(function($query)use ($location, $searcha)
        {
            $query->where('category.name', 'LIKE', $searcha)
            ->where('paintings.location',$location)
            ->where('paintings.available','yes');
        })
        ->with('category')
        ->first();
        return $paintings;
    }

    public function Like()
    {
        $searcha = $_GET['search'];
        $paintings = Painting::where('p_name', 'LIKE', "%".$searcha."%")
        ->join('category', 'paintings.category', '=', 'category.id')
        ->select('category.name', 'paintings.*')
        ->orWhere('category.name', 'LIKE', $searcha)
        ->orWhere('paintings.a_name', 'LIKE', $searcha)
        ->with('category')
        ->paginate(12);
        return view('Paintings.main',compact('paintings'));
    }
}

