@extends('layout')

@section('title')
Add user
@endsection

@section('content')


<form action="save" method="post">
    @csrf
    <input type="text" name="name" value="{{old('name')}}" class="form-control mt-2 @error('name') is-invalid @enderror"  placeholder="Name" >
    <span class="text-danger">
        @error('name')
            {{$message}}
        @enderror
    </span>
    <input type="text" name="email"  value="{{old('email')}}" class="form-control mt-2 @error('email') is-invalid @enderror"   placeholder="Email" >
    <span class="text-danger">
        @error('email')
            {{$message}}
        @enderror
    </span>
    <input type="password" name="password"  value="{{old('password')}}" class="form-control mt-2 @error('password') is-invalid @enderror"placeholder="Password" >
    <span class="text-danger">
        @error('password')
            {{$message}}
        @enderror
    </span>
    <input type="number"name="age"  value="{{old('age')}}" class="form-control mt-2 @error('age') is-invalid @enderror"placeholder="Age" >
    <span class="text-danger">
        @error('age')
            {{$message}}
        @enderror
    </span>
    <textarea name="address" value="{{old('address')}}" class="form-control mt-2 @error('address') is-invalid @enderror" placeholder="Address"></textarea>
    <span class="text-danger">
        @error('address')
            {{$message}}
        @enderror
    </span>   
    <br>
    <input type="submit" class="btn btn-primary mt-3 px-3 py-2" name="insert">
    <a href="index" class="btn btn-outline-danger mt-3 ">All users</a>
</form>

@endsection
