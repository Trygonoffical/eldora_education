<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Stdmaterial;
use App\Question;

use App\User;
// use App\Http\Controllers\Hash;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $name = Auth::user()->name;
        $name_array = explode(' ',trim($name));
        $inname =  $name_array[0];
        $iname =  $inname[0];
        return view('home', compact('iname'));
    }
    public function Uploadm()
    {
        # code...
        $name = Auth::user()->name;
        $name_array = explode(' ',trim($name));
        $inname =  $name_array[0];
        $iname =  $inname[0];
        return view('studymaterial.uploadfiles', compact('iname'));
    }
    public function ViewMaterial(){
        # code...
        $name = Auth::user()->name;
        $name_array = explode(' ',trim($name));
        $inname =  $name_array[0];
        $iname =  $inname[0];
        $std = Stdmaterial::all();
        return view('studymaterial.viewfiles', compact('iname', 'std'));
    }
public function newreg()
{
    # code...
    $name = Auth::user()->name;
    $name_array = explode(' ',trim($name));
    $inname =  $name_array[0];
    $iname =  $inname[0];
    return view('studentrecords.stu_register', compact('iname'));
}
    public function s_register(Request $request){
        
        $request->validate([
            'uname' => 'required',
            'email' => 'required|unique:users|max:255',
        ]);
        $newus = new User();
        $newus->name = $request->input('uname');
        $newus->email = $request->input('email');
        $newus->password = Hash::make($request->input('password')) ;
        $newus->save();
        return redirect('/studentrecords/view_stud/');
        // dd($request); 
        // $test =  Hash::make($request->input('password'));   
        // dd($test )  ; 
    
        // return view('studentrecords.stu_register');
    }
    
    public function view_stud(){

        
            $data=User::all();

            // return view('home')->with('tasks', $data); 
        
    
        $name = Auth::user()->name;
        $name_array = explode(' ',trim($name));
        $inname =  $name_array[0];
        $iname =  $inname[0];
        return view('studentrecords.view_stud', compact('iname', 'data'));
    
        // return view('studentrecords.stu_register');
    }


     public function createtest()
    {

        // $t_data=test::all();
        $name = Auth::user()->name;
        $name_array = explode(' ',trim($name));
        $inname =  $name_array[0];
        $iname =  $inname[0];
        return view('test.createTest', compact('iname'));
    }

                public function question( Request $request){
                    
                    $data=new Question;
                    $data->test_id = $request->input('t_id');
                    $data->ques_no = $request->input('ques_no');
                    $data->ques_type = $request->input('q_type');
                    $data->category = $request->input('category');
                    $data->section = $request->input('section');
                    $data->question = $request->input('question');
                    $data->answer = $request->input('answer');
                    // dd( request()->all() );
                    $data->save();
                    return redirect('/test/viewTest' );
                  
                }
                public function Viewtest(){
                    # code...
                    $name = Auth::user()->name;
                    $name_array = explode(' ',trim($name));
                    $inname =  $name_array[0];
                    $iname =  $inname[0];
                    $quest= Question::all();
                    return view('test.viewTest', compact('iname', 'quest'));
                }
}
