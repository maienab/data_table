
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger" style="width:100%;" >
            {{$error}}
        </div>
    @endforeach
@endif



@if (session('success'))
    <div class="alert alert-success" style="width:100%;">
        {{session('success')}}
    </div>
@endif
