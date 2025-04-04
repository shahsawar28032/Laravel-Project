@extends('layout')

@section('title')
Update User
@endsection

@section('content')

{{-- @if($errors->any())
<ul class="alert alert-danger">
@foreach ($errors->all() as $error)
<li>{{$error}}</li>
    
@endforeach
</ul>
@endif --}}
 {{-- logout button  --}}
 <form action="{{route('logout')}}" method="post" @style('display: inline')>
    @csrf
    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you leave this page')">logout</button>
</form>


<form action="{{route('edit',$stu->id)}}" method="post">
    @csrf
    <input type="text" class="form-control mt-2 @error('name') is-invalid @enderror"    placeholder="enter your name "name="name" value="{{$stu->Name}}">
    <span class="text-danger">
        @error('name')
            {{$message}}
        @enderror
    </span>

    <input type="email" class="form-control mt-2 @error('email') is-invalid @enderror"   placeholder="enter your email"name="email" value="{{$stu->Email}}">
    <span class="text-danger">
        @error('email')
            {{$message}}
        @enderror
    </span>

    <input type="number" class="form-control mt-2 @error('age') is-invalid @enderror"placeholder="enter your password"name="age" value="{{$stu->Age}}">
    <span class="text-danger">
        @error('age')
            {{$message}}
        @enderror
    </span>
    <textarea name="address" class="form-control mt-2 @error('address') is-invalid @enderror" placeholder="Address">{{$stu->Address}}</textarea>
    <span class="text-danger">
        @error('address')
            {{$message}}
        @enderror
    </span><br>
    <a href="index" class="btn btn-outline-primary mt-2">Back</a>
    <input type="submit" value="update" class="btn btn-primary mt-2" name="update">
</form>
@endsection