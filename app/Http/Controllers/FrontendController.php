<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Event;
use App\Ephoto;
use App\Term;
use App\Plan;
use App\Facility;
use App\Community;
use App\Position;
use DB;
use Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;

class FrontendController extends Controller
{
   public function events(){

    $upevents = Event::orderBy('created_at','asc')->paginate(3);    
        
    $upphotos=DB::table('event_photos')->where('forhome' , 1)->get();
   //dd($upevents);
    
    //dd($upphotos);
    $oldevents = Event::orderBy('created_at','desc')->paginate(3);    
        
    $oldphotos=DB::table('event_photos')->where('forhome' , 1)->get();    
    
    return view('events.index',compact('upevents','upphotos','oldevents','oldphotos'));

    // $events=Event::orderBy('created_at','desc')->paginate(10);

    // $results=array();
    // foreach($events as $event){
    //   $ephoto=Ephoto::where('event_id',$event->id)->get()->first();      
    //   $event['ephoto']=$ephoto;
    //   $results[]=$event;
    // }
   //dd($results);
    //dd($events);
    // return view('events.index',compact('events','results'));
    }

    public function showEvent($id){
        $latestevents=DB::table('events')->select('name','id')->orderBy('created_at','desc')->limit(5)->get();
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
        $data=community::all();
        
        return view('community.index',compact('data'));
    }

    public function location(){
        $data=DB::table('locations')->select('title','photo','des')->get();

        return view('location.index',compact('data'));
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
    public function getReserveForm($id){

       
        $membership_plan=Plan::where('id',$id)->pluck('title','id');
        $positions=Position::pluck('title','id');
       // dd($membership_plan);
        //dd($positions);

        return view('reserve-form',compact('membership_plan','positions'));
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


     public function mailtoAdmin(Request $request){
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
                    $message->to(env('mail'));
                    $message->subject("Contact Message From Client");
        });
        

        return redirect(route('home'))->with("flash_success","Mail Successfully Sent");
     }

    public function contact(){

        // $categories=Category::where("parent_id",0)->get();
        return view('contact');
     }

     public function test(){
    $events=Event::orderBy('created_at','asc')->paginate(10);
   //$paging=$events->links();
    $result=array();
    foreach($events as $event){
        $ephoto=Ephoto::where('event_id',$event->id)->get()->first();      
        $event['ephoto']=$ephoto;
        $result[]=$event;
    }
    //$result->paging()
    //echo json_encode($result);
    return $result;
  }
}
