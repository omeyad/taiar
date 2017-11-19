<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\DeliveryType;
use App\Order;
use Illuminate\Support\Facades\Auth;

class ordersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $DeliveryTypeValue =  DB::table('DeliveryTypes')->select('id', 'dname')->get();
        return view('order.add')->with('DeliveryTypeList' , $DeliveryTypeValue);



    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $ordersList=DB::table('orders')
            ->join('suppliers', 'orders.supplier_forginKey', '=', 'suppliers.id')
            ->join('DeliveryTypes', 'orders.delivary_type_forginKey', '=', 'DeliveryTypes.id')
            ->select('DeliveryTypes.dname', 'suppliers.name', 'orders.description', 'orders.direction', 'orders.allowedTime')
            ->get();

        return view('order.ordersList')->with('ordersList' , $ordersList);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'orderName' => 'required',
            'direction' => 'required',
            'orderTime' => 'required',
            'dType' => 'required',
        ]);

        //store
        $data=$request->all();
        $order=new Order;
        $order->description=$data['orderName'];
        $order->delivary_type_forginKey=$data['dType'];
        $order->allowedTime=$data['orderTime'];
        $order->direction=$data['direction'];
        // $order->supplier_forginKey=Auth::id();
        $order->save();

        //redirect
        return back()->with('success','تم الطلب بنجاح');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
