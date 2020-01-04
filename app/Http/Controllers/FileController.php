<?php

// FileController.php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\FileDoc;
use Input;

class FileController extends Controller
{
  public function store(Request $request)
  {
     $file_report = new FileDoc();
     $request->validate([
      'title' => 'required:max:255',
      'overview' => 'required',
      'categories'=>'required',
      'publish'=> 'required',
    ]);

    // auth()->user()->files()->create([
    //   'title' => $request->get('title'),
    //   'overview' => $request->get('overview'),
    //   'categories'=>$request->get('categories'),
    //   'publish' =>$request->get('publish'),
    //   'user_id' =>$request->get('users_name'),
    // ]);
    $file_report->title = Input::get('title');
    $file_report->overview = Input::get('overview');
    $file_report->categories = Input::get('categories');
    $file_report->publish = Input::get('publish');
    $file_report->user_id = Input::get('users_name');
            
    if(Input::hasFile('file_name')){
      $f = Input::file('file_name');
      $upload_to ='upload/report';

      $relative_path = $upload_to.'/'.$f->getClientOriginalName();
      $absolute_path = public_path().'/'.$upload_to;
      $f->move($absolute_path, $f->getClientOriginalName());
      $file_report->file_name = $relative_path;
      $file_report->save();
    }

    
      return back()->with('message', 'Your file is submitted Successfully');
    }
}