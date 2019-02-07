<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Candidate;

class RegisterController extends Controller
{
    public function register  (Request $request)
    {
        $this->validate ($request,[
          'name'=>'required',
          'stdno'=>'required',
          'branch'=>'required',
          'year'=>'required',
          'course'=>'required',
          'blood'=>'required',
          'email'=>'required',
          'phone'=>'required',
          'host'=>'required',
          'address'=>'required'
          

            ] );
            



            $candidates= new Candidate;
            $candidates->name=$request->input('name');
            $candidates->stdno=$request->input('stdno');
            $candidates->branch=$request->input('branch');
            $candidates->year=$request->input('year');
            $candidates->course=$request->input('course');
            $candidates->blood=$request->input('blood');
            $candidates->email=$request->input('email');
            $candidates->phone=$request->input('phone');
            $candidates->host=$request->input('host');
            $candidates->address=$request->input('address');
            $candidates->save();
           return redirect('/')->with('alert','Registeration Successful!');
            //return redirect('/')->with('alert','hello');
           // return ('<script type="text/javascript">alert("Registration successful!");</script>');
           // return  view('response');
           
    }
}
