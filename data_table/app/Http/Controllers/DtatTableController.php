<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;

class DtatTableController extends Controller
{
    // get all data from table (load table)
    public function index (){
        //$temp = Customers::all()->paginate(10);
        $temp = Customers::orderby('id','asc')->paginate(10);
        return view('index')->with ('data_tbl_arr',$temp);
    }


    // delete customer 
    public function delete ($id_num){
        //return $id_num;
        $temp = Customers::find ($id_num);
        $temp->delete();
        //return view('mssg')->with ('mssg','User Removed ');;
        return redirect('/')->with ('success','User Removed ');;
    }


    public function create  (Request $request){
        //return $request;
        $this->validate($request,[
            'email'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'phone'=>'required',
            'regtime'=>'required|numeric|digits_between:1,10'
        ]
        );

        $temp = new Customers;
        $temp->email = $request->input ('email');
        $temp->firstname = $request->input ('first_name');
        $temp->lastname = $request->input ('last_name');
        $temp->phone = $request->input ('phone');
        $temp->regtime = $request->input ('regtime');
        $temp->save();

        //return view('mssg')->with ('mssg','New User Created ');;
        return redirect('/')->with ('success','New User Created ');;
    }

    public function update(Request $request){
        $this->validate($request,[
            'id'=>'required',
            'email'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'phone'=>'required',
            'regtime'=>'required|numeric|digits_between:1,10'
        ]
        );

        $temp = Customers::find ($request->input ('id'));
        $temp->id = $request->input ('id');
        $temp->email = $request->input ('email');
        $temp->firstname = $request->input ('first_name');
        $temp->lastname = $request->input ('last_name');
        $temp->phone = $request->input ('phone');
        $temp->regtime = $request->input ('regtime');
        $temp->save();

        //return view('mssg')->with ('mssg','User Updated');
        return redirect('/')->with ('success','User Updated');;
    }


    public function edit ($id){
        $temp = Customers::find ($id);
        return view ('create')->with ('arr' , $temp);
    }
}
