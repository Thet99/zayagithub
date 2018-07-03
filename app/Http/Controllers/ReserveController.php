<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use DB;
use App\Reserve;

class ReserveController extends Controller
{
    //store reserve information to database @param: input fields, requests


    public function store(Request $request){
    //dd($request);

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
            
            $empinfo1=DB::table('imploymentinfo')->insert(

                [
                    'member_id'=>$id,
                    'company_name'=>$request->cm_name1,
                    'business_type'=>$request->bs_type1,
                    'position'=>$request->pposition1,
                    'start'=>$request->fro1,
                    'end'=>$request->to1,

                ]

            );
        };


        if($empinfo1){


           $emergency_contact=DB::table('emergency_contact')->insert(['member_id'=>$id,'name'=>$request->emergency_name,'email'=>$request->emergency_email,'phone'=>$request->emergency_phone]);

        }


        if($emergency_contact){

            $membership_proposal=DB::table('membership_proposal')->insert(['membership_name'=>$request->proposal_level,'member_id'=>$id,'start'=>$request->ppl_start,'end'=>$request->ppl_end,'applicant_sign'=>$request->signature,'proposal_date'=>$request->proposal_date]);
        }



         if($emergency_contact){

           return redirect()->back()->with('flash_success','Successfully Sent');

     }

}

}
