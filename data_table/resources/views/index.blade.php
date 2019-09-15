@extends('layout.lay')


@section('content')
    <div style="Width:100%; 
        text-align:center;
        font-size : 25;
        padding:10;">
        Interview Home Task    
    </div>
    <div class="col-sm-12" style="  border: 1px solid ">
        <div style="text-align:center">Create New Coustomer</div>
                  
            {!!Form::open(['action' => 'DtatTableController@create' , 'method'=>'POST' ])!!}
                <div class="form-group" style="width:35%; float:left; padding:10;">
                    Email :
                    {{Form::text('email', '', ['class'=>"form-control",'placeholder'=>'example@gmail.com'])}}
                </div>
                <div class="form-group" style="width:35%; float:left; padding:10;">
                    First Name :
                    {{Form::text('first_name', '', ['class'=>"form-control",'placeholder'=>'First name'])}}
                </div>
                <div class="form-group" style="width:35%; float:left; padding:10;">
                    Last Name :
                    {{Form::text('last_name', '', ['class'=>"form-control",'placeholder'=>'Last name'])}}
                </div>
                <div class="form-group" style="width:35%; float:left; padding:10;">    
                    Phone :
                    {{Form::text('phone', '', ['class'=>"form-control",'placeholder'=>'Phone'])}}
                </div>    
                <div class="form-group" style="width:35%; float:left; padding:10;">
                    Regtime :
                    {{Form::text('regtime','', ['class'=>"form-control" , 'placeholder'=>'Regtime'])}}
                </div>
                <div class="form-group" style="width:35%; float:left; padding-top:35;">
                    {{Form::submit('Create' , ['class'=>'btn btn-success' ])}}
                </div> 
            {!! Form::close() !!}
        </div>
    <br><br>
        @if  (count ($data_tbl_arr)>0)
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Email</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Regtime</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_tbl_arr as $i)
                        <tr>
                            <th scope="row">{{$i->id}}</th>
                            <td>{{$i->email}}</td>
                            <td>{{$i->firstname}}</td>
                            <td>{{$i->lastname}}</td>
                            <td>{{$i->phone}}</td>
                            <td>{{$i->regtime}}</td>
                            <td> 
                                <a class="btn btn-info" 
                                href="edit/{{$i->id}}">
                                Edit</a>
                                <a class="btn btn-danger" href="delete/{{$i->id}}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                {{$data_tbl_arr->links()}}
            </div>
        @endif

@endsection


        