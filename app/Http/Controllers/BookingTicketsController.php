<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Station;
use App\Models\Seat;

class BookingTicketsController extends Controller
{
    //
    public function bookTicketsForm(){

        $stations = Station::get();
        $seats = Seat::get();

        return view("bookinform", ["stations"=>$stations, "seats"=>$seats]);
    }

    public function bookTickets(Request $request){
        
       // $name = $request->input("name");
       // $email = $request->input("email");
       try{

        BookedTicket::create($request->input());

       }catch(Exception $exception){

          return response()->json(['status'=>'failed', 'message'=>$exception->getmessage()]);

       }

       
    }
}
