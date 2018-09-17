<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Item;
use App\Total;
class OrderController extends Controller
{
    public function select_order($item_id)
    {
    	$item = Item::find($item_id);
    	if($item->quantity > 0){
    		$notification = array(
            'message' => 'Item ordered successfully!!',
            'alert-type' => 'success'
        );
    		$order = new Order;
    		$order->item_id = $item_id;
    		$order->status_id = 0;
    		$order->save();
    		return redirect()->back()->with($notification);
    	}
    	else{
    		$notification = array(
            'message' => 'Item Out of stock!!',
            'alert-type' => 'warning'
        );
    		return redirect()->back()->with($notification);
    	}
    }
    public function delete_order($order_id){
    	$order = Order::find($order_id)->delete();
    	$notification = array(
            'message' => 'Item successfully removed!!',
            'alert-type' => 'success'
        );
    	return redirect()->back()->with($notification);
    }
    public function order_to_pay(Request $request, $order_id){
    	$this->validate($request,[
            'quantity' => 'required|integer'
        ]);
        $quantity = $request['quantity'];

        $order = Order::find($order_id);
         if($quantity <= $order->item->quantity && $quantity != 0 && $quantity > 0)
        {
            $order->item->itemcode;
            $update_quantity = $order->item->quantity - $quantity;
            Item::where('id', $order->item_id)->update(['quantity'=> $update_quantity]);
            $total = new Total;
            $total->item_code = $order->item->itemcode;
            $total->quantity = $quantity;
            $total->sub_total = $order->item->price * $quantity;
            $total->save();

            return redirect()->back()->with('pay_order', 'Item successfully ordered!!');
        }
            return redirect()->back()->with('pay_order', 'Quantity must not be greater than or less than the item quantity!');
    }
}
