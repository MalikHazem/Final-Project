<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Painting;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = DB::table('users')
        ->join('orders', 'users.id', '=', 'orders.user_id')
        ->select('users.first_name', 'users.last_name', 'orders.*')
        ->get();

        return view('Orders.main', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order=new Order;
        $order->user_id  = $request->user_id;
        $order->painting_id  = $request->painting_id;
        // $user = User::findOrFail(request()->user_id);
        // $user->product()->save($order);
        // $painting = Painting::findOrFail(request()->painting_id);
        // $painting->paintings()->save($order);
        $order->payment=$request->payment;
        $order->price=$request->price;
        $current = Carbon::now();
        $order->date=date("Y-m-d-h-i");
        $order->save();
        $painting=Painting::where('id',$order->painting_id)->first();
        $painting->booked=1;
        $painting->save();

        return $order;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $id = Auth::user()->id;
        // $current = Carbon::now();
        // $date = $current->subMinute("UTC");
        // echo $date;
        $date = date("Y-m-d-h-i");
        $id_order = Order::max('id');
        $order = Order::where('user_id',$id)
        ->where('orders.id', $id_order)
        // ->where('date',$date)
        ->join('paintings', 'orders.painting_id', '=', 'paintings.id')
        ->select('paintings.p_name', 'orders.*')
        ->first();
        return $order;
    }

    public function done($id)
    {
        $order=Order::find($id);
        $order->sent="تم الاستلام";
        $order->save();
        $painting=Painting::where('id',$order->painting_id)->first();
        $painting->available="false";
        $painting->owner=$order->user_id;
        $painting->save();

        return Redirect::to('http://127.0.0.1:8000/Orders');
    }

    public function cancel($id)
    {
        $order=Order::find($id);
        $order->sent="تم الالغاء";
        $order->save();
        $painting=Painting::where('id',$order->painting_id)->first();
        $painting->booked="0";
        $painting->save();
        $order->delete();

        return Redirect::to('http://127.0.0.1:8000/Orders');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}

