<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmail extends Controller
{
    //sending mail to admin
    public function fn_sendmail()
    {
    	$data = array(
    			'name' => "Zayat Admin",
    	);
    	
    	Mail::send('mailtemplate', $data, function ($message) {
    		$message->from('mohit9987@gmail.com', 'Zayat Member');
    	
    		$message->to('it@falconbreeze.com')->subject('There is a new Member Request!');
    	});
    		 
    }
}
