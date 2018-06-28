<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use DB;
use App\Reserve;

class ReserveController extends Controller
{
    //store reserve information to database @param: input fields, request

    public function store(Request $request){


    	$id= DB::table('resmembers')->insertGetId(
    	array(
    			'name'=>$request->name,
    			'email'=>$request->email_personal,
    			'business_mail'=>$request->bs_mail,
    			'dob'=>$request->dob,
    			'gender'=>$request->gender,
    			'passport_id'=>$request->passport,
    			'addr_c'=>$request->home_country_addr,
    			'addr_m'=>$request->mm_addr,
    			'mobile_c'=>$request->hm_ph,
                'mobile_m'=>$request->mm_ph,
                'profession'=>$request->profession,
                'position'=>$request->position,
                'skills'=>$request->skill,
                'companyinfo'=>$request->cm_info,                

    	)

    	);

      
        if($id){
            
            $empinfo=DB::table('imploymentinfo')->insert(

                [
                    'member_id'=>$id,
                    'company_name'=>$request->cm_name,
                    'business_type'=>$request->bs_type,
                    'position'=>$request->pposition,
                    'start'=>$request->fro,
                    'end'=>$request->to,

                ]

            );
        };


        if($empinfo){


           $emergency_contact=DB::table('emerygency_contenc')->insert(['member_id'=>$id,'name'=>$request->name,'email'=>$request->email,'phone'=>$request->phone]);

        }


        if($emergency_contact){

            $membership_proposal=DB::table('membership_proposal')->insert(['membership'=>$request->proposal_level,'start'=>$request->ppl_start,'end'=>$request->ppl_end,'proposal_date'=>$request->proposal_date]);
        }



         if($emergcency){

           return redirect()->back();

     }

}

}
