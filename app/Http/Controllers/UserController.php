<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use DB;
use Flash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user=User::find($id);
        //dd($user);
        return view('users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //  protected function validator(array $data)
    // {
        // return Validator::make($data, [
        //     'fname' => 'required|string|max:255',
        //     'lname' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:6',
        //     'mobile' => 'required|string|min:8',
        //     'cname' => 'required|string',
        //]);
    public function update(Request $request, $id)
    {
        //update user information
        // $this->validator($request->all())->validate();
        //dd($request->all());

        $data=$request->all();
        $user=User::find($id);
        $file = $request->file('upimg');
        if(!empty($file)){

          $image = $file;
          $input['imagename'] = $image->getClientOriginalName();
          $fileName = substr($image->getClientOriginalName(), 0, strrpos($image->getClientOriginalName(),'.'));
           //$ext = end(explode(".", $input['imagename']));
           $random = substr(md5(rand(0,1000)),0,5);
           $start= strpos($input['imagename'],".");
           $extname = substr($input['imagename'], $start );
           $new_name = $fileName.'_'.$random.$extname;

          $destinationPath = public_path('/storage/users'.'/'.date('F').date('Y').'/');
          $img = Image::make($image->getRealPath());
          $img->resize(640, 480, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$new_name);

          $destinationPath = public_path('/storage/users'.'/'.date('F').date('Y').'/');
          $image->move($destinationPath, $input['imagename']);

          $request['avatar']=$new_name;


          $editeduser->update($request->except('upimg'));

        }else{

       if($request->password != ''){
        $password=$request->password;

        $user->update(array(

            'fname' => $request['fname'],
            'lname' => $request['lname'],
            'email' => $data['email'],
            'mobile' => $request['mobile'],
            'company' => $request['cname'],
            'avatar'  =>$request['oldpic'],
            'password' => bcrypt($password),

            ));
    
      }else{
        $password=$request->oldpass;

        $user->update(array(

            'fname' => $request['fname'],
            'lname' => $request['lname'],
            'email' => $data['email'],
            'mobile' => $request['mobile'],
            'company' => $request['cname'],
            'avatar'  =>$request['oldpic'],
            'password' =>$password,

            ));
        }


        
        return redirect(route('user.index'))->with('flash_success','Edit Successfully');
        
      }
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
