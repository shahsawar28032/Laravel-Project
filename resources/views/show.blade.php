@extends('layout')

@section('title')
All user
@endsection

@section('content')

@if(session('status'))
<div class="alert alert-primary alert-dismissible fade show" role="alert">
{{session('status')}}
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 
</div>
@endif
  
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th colspan="7"><a href="insertpage"class="btn btn-primary">Add new</a>
                {{-- logout button  --}}
                <form action="{{route('logout')}}" method="post" @style('display: inline')>
                    @csrf
                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you leave this page')">logout</button>
                </form>
            </th>
        </tr>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>AGE</th>
            <th>ADDRESS</th>
            <th>Operation</th>                            
        </tr>
 </thead>
    <tbody>
        @foreach($stu as $idd)
        <tr>
        <td>{{$idd->id}}</td>
        <td>{{$idd->Name}} </td>
        <td>{{$idd->Email}}</td>
        <td>{{$idd->Age}}</td>
        <td>{{$idd->Address}}</td>
        <td><a href="{{route('updatepage',$idd->id)}}" class="btn btn-primary btn-sm">Edit</a>
        <a href="{{route('viewpage',$idd->id)}}" class="btn btn-warning text-white btn-sm">view</a>
        <form action="{{route('delete',$idd->id)}}" method="post" style="display:inline">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record!')">Delete</button>

      
        </form>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$stu->links('pagination::bootstrap-5')}}

@endsection