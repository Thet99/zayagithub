<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests\SendMessageContactRequest;

class ContactController extends Controller
{
    

 //    public function contact(){
	// 	// $categories = Category::where('parent_id',0)->get();

	// 	return view('contact.contact');
	// }

	public function send_toadmin(SendMessageContactRequest $request){
		$data = $request->all();

		Mail::send("email.contactmessage1",$data,
		function ($message){ 
			$recepient = "it@falconbreeze.com";
			$message->to($recepient);
			$message->subject("Message from zayat.com.mm");
		});

		return redirect()->back()->flash('flash_success','Your Email have bent Sent Successfully!');

	}
}
