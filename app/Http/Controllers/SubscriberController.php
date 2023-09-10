<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
   function subscriber(){
    $subscribers = Subscriber::all();
    return view('admin.subscriber.index' , compact('subscribers'));
   }

   function subscriber_delete($id){
    Subscriber::find($id)->delete();
    return back();
   }
}
