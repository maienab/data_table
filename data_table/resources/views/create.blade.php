@extends('layout.lay')

@section('content')
    <div class="container">
        <div style="font-size:25;
        text-align:center;
        padding:15;">Edit User
        </div>    
        {!!Form::open(['action' => 'DtatTableController@update' , 'method'=>'POST' ])!!}
        <div style="display:none">
            {{Form::text('id', $arr->id )}}
        </div>
        Email :
        <div class="form-group">  
            {{Form::text('email', $arr->email)}}
        </div>
        First Name :
        <div class="form-group">
            {{Form::text('first_name',$arr->firstname)}}
        </div>
        Last Name :
        <div class="form-group">
            {{Form::text('last_name',$arr->lastname)}}
        </div>
        Phone :
        <div class="form-group">    
            {{Form::text('phone',$arr->phone)}}
        </div>    
        Regtime :
        <div class="form-group">
            {{Form::text('regtime',$arr->regtime)}}
        </div>
        <div class="form-group">
            {{Form::submit('Update' , ['class'=>'btn btn-success' ])}}
        </div> 
        {!! Form::close() !!}    
    </div>
@endsection
