<?php

namespace Illuminate\Foundation\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use Image;

trait RegistersUsers
{
    use RedirectsUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        //dd($request);
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

          $destinationPath = public_path('/storage/users');
          $img = Image::make($image->getRealPath());
          $img->resize(110, 118, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$new_name);

          $destinationPath = public_path('/storage/users');
          $image->move($destinationPath, $input['imagename']);

          $request['avatar']=$new_name;
        }
       // dd($request->avatar);       

       //dd($request->all());        

        event(new Registered($user = $this->create($request->except('upimg'))));

        $this->guard()->login($user);

        return $this->registered($request, $user)
                        ? : redirect($this->redirectPath());
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        //
    }
}
