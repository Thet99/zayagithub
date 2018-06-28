<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Event;
use App\Ephoto;
use DB;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
  public function get(){
  	$events=Event::orderBy('created_at','desc')->paginate(10);

  	$result=array();
  	foreach($events as $event){
  		$ephoto=Ephoto::where('event_id',$event->id)->get()->first();      
  		$event['ephoto']=$ephoto;
  		$result[]=$event;
  	}
   // echo json_encode($result);
  	return $result;
  }
  
}
