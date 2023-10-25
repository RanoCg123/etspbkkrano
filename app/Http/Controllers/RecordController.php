<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Record;
class RecordController extends Controller
{
    public function create(){
        return view('addrecord');
    }
public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'condition' =>'required|string|max:255', 
        'temperature' => 'required|numeric|between:35,45.50',
        'file' => 'required|file|mimes:pdf,png,jpg,jpeg',
    ]);

    if ($validator->fails()) {
        return redirect('/add-record')
            ->withErrors($validator)
            ->withInput();
    }
    $condition = $request->condition;
    $temperature = $request->temperature;
    $file = $request->file('file') -> getClientOriginalName();
    $request->file('file')->storeAs('public/images/', $file);
    $data = new Record();
    $data -> patient = '1';
    $data -> doctor = '1';
    $data -> condition = $condition;
    $data -> temperature = $temperature;
    $data -> file = $file;
    $data ->save();
    return redirect('/add-record')->with('success', 'Record has been inserted!');
}
public function show(){
    $Records=Record::all();
    return view('record', compact('Records'));
}
}
