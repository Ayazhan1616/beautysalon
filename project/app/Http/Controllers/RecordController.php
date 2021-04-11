<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Record;
use App\Http\Resources\Record as RecordResource;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get records
        $records = Record::paginate(15);

        //return collection of records as a resource
        return RecordResource::collection($records);

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
       $record = $request->isMethod('put') ? Record::findOrFail($request->record_id) : new Record;

        $record->id = $request->input('record_id');
        $record->name = $request->input('name');
        $record->phone_number = $request->input('phone_number');
        $record->e_mail = $request->input('e-mail');
        $record->master_name = $request->input('master_name');
        $record->procedure_name = $request->input('procedure_name');
        $record->recording_time = $request->input('recording_time');

        if($record->save()){
            return new RecordResource($record);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //get record
        $record = Record::findOrFail($id);

        //return single record as a resource
        return new RecordResource($record);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         //get record
         $record = Record::findOrFail($id);

         if($record->delete()){
         return new RecordResource($record);
         }
    }
}
