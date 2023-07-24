<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        foreach ($orders as $order)
        return view('front.order', compact('orders','order'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $orders = Order::all();
            foreach ($orders as $order) {
                if ($order->book_id == $request->book_id && $order->user_id == $request->user_id) {
                    $number = $order->orders + $request->orders;
                    $order->update(['orders' => $number]);
                    break;
                } else {
                    Order::create($request->all());
                }
            }

        return redirect()->route('front.order');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $orders = Order::all();
        foreach ($orders as $order) {
                $order->update(['status' => 'purchased']);
        }

        return redirect()->route('front.order');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
