<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Room;
use App\Models\Facility;
use App\Models\MultiImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendRoomController extends Controller
{
    
    public function AllFrontendRoomList(){

        $rooms = Room::latest()->get();
        return view('frontend.room.all_rooms',compact('rooms'));
    } // End Method 

    public function RoomDetailsPage($id){

        $roomdetails = Room::find($id);
        $multiImage = MultiImage::where('rooms_id',$id)->get();
        $facility = Facility::where('rooms_id',$id)->orderBy('id','DESC')->limit(2)->get();

        $otherRooms = Room::where('id', '!=',$id)->get();


        return view('frontend.room.room_details',compact('roomdetails','multiImage','facility','otherRooms'));


    } // End Method 



}
