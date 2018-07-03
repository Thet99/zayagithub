<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use DB;
use App\Http\Requests\SendMessageContactRequest;

class ContactController extends Controller
{
    

 //    public function contact(){
	// 	// $categories = Category::where('parent_id',0)->get();

	// 	return view('contact.contact');
	// }

	public function send_toadmin(SendMessageContactRequest $request){
		$data = $request->all();
		// //$data="This is body";
		$resmember=DB::table('resmembers')->limit(1)->get();
		//dd($data->resmember['name']);
		$data['resmember']=$resmember;
		Mail::send("email.contactmessage1",$data,
		function ($message){ 
			$recepient = "it@falconbreeze.com";
			$message->to($recepient);
			$message->subject("Message from zayat.com.mm");
			
		});

		return "<script>window.alert('Your Email have bent Sent Successfully!');</script>";

		// return redirect()->route('home')->with('flash_sent','Your Email have bent Sent Successfully!');

	}
	public function show(){
		$resmember=DB::table('resmembers')->limit(1)->get();
		//dd($resmember);
		return view('contact',compact('resmember'));
	}
}
