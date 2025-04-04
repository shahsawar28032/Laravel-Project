
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5">

        <div class="card p-3">
            <h1>FORM LOGIN</h1>
    <form action="store" method="post">
        @if(session('status'))
        <div class="alert alert-success">
        {{session('status')}}
        </div>
        @endif 
        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="email" name="email"  value="{{old('email')}}" class="form-control  @error('email') is-invalid @enderror"   placeholder="Email">
          <label class="form-label" for="form2Example1">Email address</label>
        </div>
        <span class="text-danger">
            @error('email')
                {{$message}}
            @enderror
        </span>
      
        <!-- Password input -->
        <div  class="form-outline mb-4">
          <input type="password" name="password"  value="{{old('password')}}" class="form-control  @error('password') is-invalid @enderror"placeholder="Password">
          <label class="form-label" for="form2Example2">Password</label>
        </div>
      
        <span class="text-danger">
            @error('password')
                {{$message}}
            @enderror
        </span><br>
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





{{-- store register --}}

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
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6">     
                <div class="alert alert-success"><h1>Registration</h1></div>         
             <form action="" method="post">
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
                <input type="submit" class="btn btn-primary mt-3 px-5 py-2" value="Register">
                <a href="/" class="btn btn-danger mt-3 ">login</a>
            </form>

        
            </div>
        </div>
    </div>

</body>
</html>
