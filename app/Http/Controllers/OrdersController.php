<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Events\OrderSubmitted;
use App\Http\Requests\CreateOrder;
use App\Orders;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Orders::all();

        if (request()->has('sort')) {
            $orders = $orders->sortBy(
                request('sort'),
                SORT_REGULAR,
                request('direction') == 'Desc'
            );
        }



        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $order = new Orders;
        $contacts = Contact::all();

        return view('orders.create', compact('order', 'contacts'));
    }

    public function store(CreateOrder $request)
    {
        Orders::create([
            'contact_id' => $request->contact,
            'product' => $request->product,
            'price' => $request->price
        ]);

        event(new OrderSubmitted($request->all()));

        return redirect('orders')->with('alert', 'Order created!');
    }
}
