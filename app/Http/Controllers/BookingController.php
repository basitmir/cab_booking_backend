<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class BookingController extends Controller
{
    public function getAllBookings(){
        $allBookings = DB::table('bookings')->get();
        return $allBookings;
    }

    public function addBooking(Request $request){
        // return $request;
        $booking=DB::table('bookings')->insert(
            [   
                'bookingUserId'=> $request->bookingUserId,
                'driverAssignedId'=> $request->driverAssignedId,
                'bookingName'=> $request->bookingName,
                'bookingAddressFrom'=> $request->bookingAddressFrom,
                'bookingAddressTo'=> $request->bookingAddressTo,
                'bookingLandmark'=>$request->landmark,
                'date'=>$request->date,
                'time'=>$request->time,
                'bookingPhone'=>$request->bookingPhone,
                'bookingTripType'=>$request->bookingTripType,
                // 'bookingAmount' => $request->bookingAmount,
                // 'bookingCity'=>$request->bookingCity,
                // 'bookingState'=>$request->bookingState,
                // 'bookingZip'=>$request->bookingZip,
                // 'bookingCountry'=>$request->bookingCountry,
            ]
        );
        if ($booking) {
            $document = [
                "result"=>"success",
                "message"=>"Record saved successfully",
                "title"=>"Success",
            ];
        }else{
            $document = [
                "result"=>"error",
                "message"=>"Record saving Failed!",
                "title"=>"Error",
            ];
        }
        return response()->json($document,200);
    }

    public function deleteBooking(Request $request, $id){
        // return $id;
        $deleted = DB::table('bookings')->where('id', '=', $id)->delete();
    if($deleted){
            $document = [
                "result"=>"success",
                "message"=>"Record deleted successfully",
                "title"=>"Success",
            ];
        }else{
            $document = [
                "result"=>"error",
                "message"=>"Record deleting Failed!",
                "title"=>"Error",
            ];
        }
        return response()->json($document,200);
    }
    public function editDriver(){
        
    }
}
