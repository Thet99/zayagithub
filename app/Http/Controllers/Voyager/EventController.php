<?php

namespace App\Http\Controllers\Voyager;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\Controller;
use TCG\Voyager\Facades\Voyager;
use App\Event;
use App\Ephoto;
use DB;
use Image;
use Mail;
use App\User;
use Illuminate\Support\Facades\Input;
// use Intervention\Image\ImageManagerStatic as Image;

class EventController extends Controller
{
	public function index(){

		$events=Event::paginate(7);
		//dd($events);
		$view='voyager::events.browse';
		return Voyager::view($view,compact('events'));
	}


	public function create(){
		$view='voyager::events.create';
		return Voyager::view($view);

	}

	public function store(Request $request){

		$data=$request->all();
		$photos=array();
		
		if($request->movie_link){
			$movielink=$request->movie_link;
			
		}else{ 

			$movielink=NULL;
		}
		$imageFilePath = public_path('/storage/events');
		$homepic=$request->homepic->getClientOriginalName();		
		$count=isset($request->innerpic) ? count($request->innerpic) : 0;
		 if(Input::file('homepic')){

		 	$files=Input::file('homepic');
		 	$image=$files;
		    $input['imagename'] = $image->getClientOriginalName();
            $fileName = substr($image->getClientOriginalName(), 0, strrpos($image->getClientOriginalName(),'.'));
           $random = substr(md5(rand(0,1000)),0,5);
           $start= strpos($input['imagename'],".");
           $extname = substr($input['imagename'], $start );
           $new_name = $fileName.'_'.$random.$extname;
           $destinationPath = public_path('events');
            if($image->move($imageFilePath,$new_name)){

            	$pho['fileName'] = $new_name;
                $pho['forHome']  = 1;
                $pho['movielink']=$movielink;
                $photos[] = $pho;
            };

            //dd($photos);
		 }

		 //Other images

		 if($count>0){

		 	for($i=0;$i<$count;$i++){
		 		$files=Input::file('innerpic');
		 		if(!empty($files)):

		 			foreach($files as $file):
		 			 $image=$file;
		 			 $input['imagename'] = $image->getClientOriginalName();
           $fileName = substr($image->getClientOriginalName(), 0, strrpos($image->getClientOriginalName(),'.'));
           $random = substr(md5(rand(0,1000)),0,5);
           $start= strpos($input['imagename'],".");
           $extname = substr($input['imagename'], $start );
           $new_name = $fileName.'_'.$random.$extname;
           $destinationPath = public_path('/events');
           if($image->move($imageFilePath,$new_name)){
           		$pho['fileName'] = $new_name;
                $pho['forHome']  = 0;
                $pho['movielink']=NULL;
                $photos[] = $pho;

           }


		 	    endforeach;
		 	endif;


		 	}
		 	
		 }

		 $event=Event::create(array('name'=>$data['name'],'shortnote'=>$data['shortnote'],'detail'=>$data['detail'],'ticket_price'=>$data['ticket_price'],'event_date'=>$data['event_date']));

		 if(is_array($photos) && count($photos)>0):

		 	foreach($photos as $onePhoto){
		 		$eid= DB::table('events')
                ->latest()
                ->first();
		 		extract($onePhoto);
		 		$phoName= $fileName;
                $forHome= $forHome;
                $movielink=$movielink;
                $eventId=$eid->id;

                $eventPhoto=Ephoto::create(array('photo_name'=>$phoName,'event_id'=>$eventId,'forhome'=>$forHome,'movie_link'=>$movielink));

		 	}
		 endif;
		 
		 //$new_event=$this->sent_message();, send mail after creating event
		 $events=Event::paginate(7);		 

		 return Voyager::view('voyager::events.browse',compact('events'))->withFleshSuccess('Event created successfully');

	}



	public function update(Request $request){


		$data=$request->all();
		//dd($data);
		$photos=array();
		
		if($request->movie_link){
			$movielink=$request->movie_link;
			
		}else{ 

			$movielink=NULL;
		}
		$imageFilePath = public_path('/storage/events');
		$homepic=$request->homepic->getClientOriginalName();		
		$count=isset($request->innerpic) ? count($request->innerpic) : 0;
		 if(Input::file('homepic')){

		 	$files=Input::file('homepic');
		 	$image=$files;
		    $input['imagename'] = $image->getClientOriginalName();
            $fileName = substr($image->getClientOriginalName(), 0, strrpos($image->getClientOriginalName(),'.'));
           $random = substr(md5(rand(0,1000)),0,5);
           $start= strpos($input['imagename'],".");
           $extname = substr($input['imagename'], $start );
           $new_name = $fileName.'_'.$random.$extname;
           $destinationPath = public_path('events');
            if($image->move($imageFilePath,$new_name)){

            	$pho['fileName'] = $new_name;
                $pho['forHome']  = 1;
                $pho['movielink']=$movielink;
                $pho['photo_id']=$request->photo_id;
                $photos[] = $pho;
            };

            //dd($photos);
		 }

		 //Other images

		 if($count>0){

		 	for($i=0;$i<$count;$i++){
		 		$files=Input::file('innerpic');
		 		if(!empty($files)):

		 			foreach($files as $file):
		 			 $image=$file;
		 			 $input['imagename'] = $image->getClientOriginalName();
           $fileName = substr($image->getClientOriginalName(), 0, strrpos($image->getClientOriginalName(),'.'));
           $random = substr(md5(rand(0,1000)),0,5);
           $start= strpos($input['imagename'],".");
           $extname = substr($input['imagename'], $start );
           $new_name = $fileName.'_'.$random.$extname;
           $destinationPath = public_path('/events');
           if($image->move($imageFilePath,$new_name)){
           		$pho['fileName'] = $new_name;
                $pho['forHome']  = 0;
                $pho['movielink']=NULL;
                $pho['photo_id']=$request->photo_id;
                $photos[] = $pho;

           }


		 	    endforeach;
		 	endif;


		 	}
		 	
		 }

		 // $event=Event::create(array('name'=>$data['name'],'shortnote'=>$data['shortnote'],'detail'=>$data['detail'],'ticket_price'=>$data['ticket_price'],'event_date'=>$data['event_date']));
		 //dd($photos);
		 $edata=$request->all();
		 $event=Event::findOrFail($request->eid);

		 $event->name=$edata['name'];
		 $event->shortnote=$edata['shortnote'];
		 $event->detail=$edata['detail'];
		 $event->ticket_price=$edata['ticket_price'];
		 $event->event_date=$edata['event_date'];
		 $event->save();
		 //dd($photos);
		 if(is_array($photos) && count($photos)>0):

		 	foreach($photos as $onePhoto){
		 		extract($onePhoto);
		 		// dd($onePhoto);
		 		$phoName= $fileName;
                $forHome= $forHome;
                $movielink=$movielink;
                $eventId=$request->eid;
                $photo_id=$photo_id;

                //$photos[] = $pho;
                //$ephoto=Ephoto::findOrFail($photo_id);
                // dd($ePhoto);
                // $eventPhoto=Ephoto::create(array('photo_name'=>$phoName,'event_id'=>$eventId,'forhome'=>$forHome,'movie_link'=>$movielink));
                $phoName;
                $forHome;
                $movielink;
                $eventId;
                //$ephoto->photo_id=$photo_id;
                $update_photo=new Event;
                $update_photo->update(['photo'=>$phoName,'forhome'=>$forHome,'movie_link'=>$movielink,'event_id'=>$eventId]);
		 	}
		 endif;
		 
		 //$new_event=$this->sent_message();

		 $events=Event::paginate(10);
		 //dd($events);
		 return Voyager::view('voyager::events.browse',compact('events'));


	}

	public function edit($id){
		$event=Event::find($id);
		//dd($event);
		// $home=Ephoto::where('event_id',$id)AND('forhome',1);
		// echo $home;die();
		$ephotos=Ephoto::all()->where('event_id',$id);			
		return Voyager::view('voyager::events.edit',compact('event','ephotos'));

	}
	

	public function destroy(Request $request, $id){
		$event=Event::find($id);
		$event->delete($id);
		DB::table('event_photos')->where('event_id',$id)->delete();
		return redirect()->back();

	}

 //After creating event mail to all users
	public function sent_message(){
        $data=array();
        $event=Event::get()->first();
        $data['name']=$event->name;
        $data['date']=$event->event_date;
        $data['message_body']="Dear Our Member, as your are one of zayat members, you're receving this mail. We have created an event recently and you could join this event if you're interested in. Event Name:".$data['name']."Event Date".$data['date']."Thank You Admin @ zayat.com.mm";
        //$data['location']=>$event->location;
        //dd($data);

        //dd($final);
        //dd($recs);
        // dd($user);
        // dd($data);
        $view=voyager::view('email.contactmessage');
        Mail::send('email.contactmessage',$data,function ($message){ 
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
                    $message->subject("Message From Zayat");
        });
        

        
     }


	
}
 

?>