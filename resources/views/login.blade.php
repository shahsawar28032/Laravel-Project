<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    
    <div class="container" style="margin-top: 100px">
        <div class="row justify-content-center">
            <div class="col-5">     
               <div class="card p-3">
               <h1 class="text-center mb-3" 
               style="font-weight: bolder; color:rgba(94, 93, 93, 0.897)">Sign in</h1>
         {{-- alert massage  --}}
         @if(session('conf'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
         {{session('conf')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

    <form action="store" method="post">
       @csrf
               <!-- Email input -->
        <div class="form-outline mb-2">
            <input type="email" name="email"  value="{{old('email')}}" class="form-control  @error('email') is-invalid @enderror"   placeholder="Email">
            <span class="text-danger">@error('email'){{$message}}@enderror
            </span><br>
            <label class="form-label" for="form2Example1">Email address</label>
          </div>
         
                <!-- Password input -->
        <div  class="form-outline mb-2">
            <input type="password" name="password"  value="{{old('password')}}" class="form-control  @error('password') is-invalid @enderror"placeholder="Password">
            <span class="text-danger">@error('password'){{$message}}@enderror</span><br>
            <label class="form-label" for="form2Example2">Password</label>
          </div>

          {{-- alert massage  --}}
          @if(session('status'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{session('status')}}
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>
           @endif
            <!-- Submit button -->
        <input type="submit"  class="btn btn-primary btn-block mb-4" value="Sign in">

              
        <!-- Register buttons -->
        <div class="text-center">
          <p>Not a member? <a href="registerpage">Register</a></p>
          <p>or sign up with:</p>
         </div>
      </div>
  </form>
       </div>
       </div>
       </div>
</body>
</html>












