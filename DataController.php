<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;


class DataController extends Controller
{
    public function home(){
       return view('/home');


    }//


    public function create(){
        return view('/create');
    }


    public function store(Request $request){
        // return view('/create');
        // die( 'input recorded');
        $data = new Data; //instance of Data model class
        $data->firstname = $request-> input('firstname');  //calling firstname input from create.blade
        $data->lastname = $request->input('lastname');
        $data->save(); //saves to database

      return redirect('/showAll')->with('data', $data); //returns fname and lname from showAll view
    }

    public function showAll(){
      $data = Data::all();
      return view('showAll', compact ('data'));


    }

    public function delete($id){
    $delete= Data::find($id);    //get items by the id from 
    $delete->delete();             //delete a particular id
    return redirect('showAll');

    }

    public function edit($id){
    $edit= Data::find($id);
    
      return view('edit', ['edit'=>$edit]);
    }

     public function update(Request $request, $id){
      $update= Data::find($id);
      $update->firstname= $request->input('firstname'); //
      $update->lastname= $request->input('lastname');
      $update->save();
      return redirect('showAll')->with('Data', $update);
     }

}
