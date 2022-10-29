<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stdmaterial;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
            {
                
                public function fileUpload()
                {
                    return view('uploadfiles');
                }

                public function fileUploadPost(Request $request)
                {

                
                    $request->validate([
                        'file' => 'required|mimes:pdf|max:2048',
                    ]);
                
                    if($request->hasFile('file')){
                            // fiel name with ext
                            $getFileNameWithExt= $request->file('file')->getClientOriginalName();
                            // get file name
                            $fileName = pathinfo($getFileNameWithExt,PATHINFO_FILENAME);
                            // get ext
                            $extension = $request->file('file')->getClientOriginalExtension();
                            // filename to store
                            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
                            // upload image
                            $path=$request->file('file')->storeAs('public/stdM_files',$fileNameToStore);

                    }
                    else{
                        $fileNameToStore='nofile.jpg'; 
                    }
                    $stdm = new Stdmaterial();
                    $stdm->file =  $fileNameToStore;
                    $stdm->catname = $request->input('catname')  ;
                    $stdm->save();
                    
                    return redirect('/studymaterial/viewfiles');
            
                }

            public function edit($id)
                {
                  $edit=Stdmaterial::find($id);
                  $name = Auth::user()->name;
                  $name_array = explode(' ',trim($name));
                  $inname =  $name_array[0];
                  $iname =  $inname[0];
                  return view('studymaterial.edit', compact('edit', 'iname'));

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
                    $request->validate([
                        'ucatname' => 'required',
                    ]);
                

                    $fedit=Stdmaterial::find($id);
                    $fedit->catname = $request->input('ucatname')  ;
                    if($request->hasFile('file')){
                            // fiel name with ext
                            $getFileNameWithExt= $request->file('file')->getClientOriginalName();
                            // get file name
                            $fileName = pathinfo($getFileNameWithExt,PATHINFO_FILENAME);
                            // get ext
                            $extension = $request->file('file')->getClientOriginalExtension();
                            // filename to store
                            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
                            // upload image
                            $path=$request->file('file')->storeAs('public/stdM_files',$fileNameToStore);
                            $fedit->file =  $fileNameToStore;

                    }
                   
                    $fedit->save();
                        
                    return redirect('/studymaterial/viewfiles');
                    // return view('Stdmaterial.editfile')->with('Stdmaterial',$edit);
      
                      
                }

                /**
                 * Remove the specified resource from storage.
                 *
                 * @param  int  $id
                 * @return \Illuminate\Http\Response
                 */
                public function destroy($id)
                {
                $dfile = Stdmaterial::findorfail($id);
               
                if($dfile->file !='nofile.jpg'){
                    Storage::delete('public/stdM_files/'.$dfile->file);
                }
                $dfile->delete();
                return redirect('/studymaterial/viewfiles');

                }


        
            }
