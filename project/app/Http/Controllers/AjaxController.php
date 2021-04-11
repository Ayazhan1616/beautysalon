<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Record;

class AjaxController extends Controller {
  public function create() { 
      return view('skinproc'); 
     }  

     public function store(Request $request) { 
      $record = new Record;

     /* $record->id = $request->input('record_id');
      $record->name = $request->input('name');
      $record->phone_number = $request->input('phone_number');
      $record->e_mail = $request->input('e-mail');
      $record->master_name = $request->input('master_name');
      $record->procedure_name = $request->input('procedure_name');
      $record->recording_time = $request->input('recording_time');
*/
      $record->id = $request->id;
      $record->name = $request->name;
      $record->phone_number = $request->phone_number;
      $record->e_mail = $request->e_mail;
      $record->master_name = $request->master_name;
      $record->procedure_name = $request->procedure_name;
      $record->recording_time = $request->recording_time;

      $record->save();
      
      return response()->json(['success'=>'Form is successfully submitted!']);

    }
}