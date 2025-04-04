
@extends('layout')


@section('title')
User Deatail
@endsection

@section('content')
<table class="table table-striped table-bordered">
    <tr>
        <th colspan="2">
             {{-- logout button  --}}
             <form action="{{route('logout')}}" method="post" @style('display: inline')>
                @csrf
                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you leave this page')">logout</button>
            </form>
        </th>
    </tr>
    <tr>
        <th width="80px">Id:</th>
        <td>{{$stu->id}}</td>
    </tr>
  <tr>
        <th width="80px">Name:</th>
        <td>{{$stu->Name}}</td>
    </tr>
    <tr>
        <th width="80px">Email:</th>
        <td>{{$stu->Email}}</td>
    </tr>  
    <tr>
        <th width="80px">Age:</th>
        <td>{{$stu->Age}}</td>
    </tr>
    <tr>
        <th width="80px">Address:</th>
        <td>{{$stu->Address}}</td>
    </tr>
    <tr>
        <td><a href="index" class="btn btn-primary mt-2">Back</a></td>

    </tr>

</table>
    
@endsection

