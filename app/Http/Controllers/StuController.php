<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stdmaterial;
use Illuminate\Support\Facades\Auth;
use App\User;
// use Illuminate\Support\Facades\Storage;
class StuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
      
        $edit_records=User::find($id);
        $name = Auth::user()->name;
        $name_array = explode(' ',trim($name));
        $inname =  $name_array[0];
        $iname =  $inname[0];
    //   dd($id);
        return view('studentrecords.edit_records', compact('edit_records', 'iname'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         // dd($request);
        
    

        $edit_records=User::find($id);
        $edit_records->name = $request->input('uname')  ;
        $edit_records->email = $request->input('email')  ;

        $edit_records->password = $request->input('password')  ;

        
       
        $edit_records->save();
            
        return redirect('/studentrecords/view_stud');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $duser = User::findorfail($id);       
        $duser->delete();
        return redirect('/studentrecords/view_stud');

     }
}
