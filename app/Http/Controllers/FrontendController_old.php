<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Event;
use App\Ephoto;
use App\Term;
use App\Plan;
use App\Facility;
use DB;
use Mail;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
   public function events(){

    $events = Event::paginate(3);  
     //dd($events);
    $ephotos=DB::table('event_photos')->where('forhome',1)->get();
    //dd($ephotos);
    
    	return view('events.index',compact('events','ephotos'));
    }

    public function showEvent($id){
        $latestevents=DB::table('events')->select('name','id')->orderBy('created_at','desc')->limit(3)->get();
        //dd($latestevents);
        $events = Event::find($id);
        $ephotos=Ephoto::where('event_id',$id)->get(); 

       //dd($events);
       // $ephotos=DB::table('event_photos')->where('event_id',$id)->where(function ($q){
       //  $q->where('forhome',0);
       // })->get();
       //dd($ephotos);

        return view('events.detail',compact('events','ephotos','latestevents'));
    }

    public function faqs(){

        $faqs=DB::table('faqs')->paginate(5);

    	return view('faqs.index',compact('faqs'));
    }

    public function plans(){
        //$plans=DB::table('plans')->get();
        $facilities=Facility::all();
        $memberships=DB::table('memberships')->get();
       // dd($plans);
        return view('plans.index',compact('facilities','memberships'));
    }

    public function planDetail($id){
        $membership=DB::table('memberships')->select('name','id')->where('id',$id)->get()->first();
        $plans=Plan::where('membership_id',$id)->get()->all();
        //dd($plan);

        return view('plans.detail',compact('plans','membership'));
    }

    public function community(){
        
        return view('community.index');
    }

    public function location(){

        return view('location.index');
    }

    public function terms(){
        $terms=Term::paginate(2);
        return view('terms.index',compact('terms'));
    }

    public function about(){
        return view('about');
    }

    // public function testdF($table="users"){      
    //     //dd($inputs);
       
    //     $inputs=DB::getSchemaBuilder()->getColumnListing($table);

    //     return view('register',compact('inputs'));

    

        
    //  } 
    // public function dec_room(){
    //     return view('location.dec_room');
    // }
    //  public function hotdeck(){
    //     return view('location.hotdeck');
    // }

    // public function rgForm(){

    //     return view('register_rework');
    // }
    public function getReserveForm(){
        return view('reserve-form');
    }

    public function makeReserve(Request $request){
        $data=$request->all();
        //dd($data);
    }



    public function sent_message(Request $request){
        $data=$request->all();

        //dd($final);
        //dd($recs);
        // dd($user);
        // dd($data);
        Mail::send("email.contactmessage",$data,function ($message){ 
                    $user=User::Where('role_id',2)->get();
                    $recs=array();
                    foreach($user as $u){

                        $recs[]=$u->email;
                    }

                    $recepient_mail=$recs;
                    //$recepient_mail=implode(',',$recs);  
                    //$recepient_mail=trim($tecepienta_mail);  
                    //dd($recepient_mail);       
                        //$recepient_mail="thatnyihtwe@gmail.com";
                    $message->to($recepient_mail);
                    $message->subject("Message From LaraShop");
        });
        

        return redirect(route('home'))->with("flash_success","Mail Successfully Sent");
     }

    public function contact(){

        // $categories=Category::where("parent_id",0)->get();
        return view('contact');
     }

     public function test(){
        $events=Event::all();
        dd($events);
     }
}
