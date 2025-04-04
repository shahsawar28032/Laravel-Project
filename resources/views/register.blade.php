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
     <!-- Section: Design Block -->
<section class="text-center">
    <!-- Background image -->
    <div class="p-5 bg-image" style="
          background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
          height: 150px;
          "></div>
    <!-- Background image -->
  
    <div class="card mx-4 mx-md-5 shadow-5-strong bg-body-tertiary" style="
          margin-top: -100px;
          backdrop-filter: blur(30px);
          ">
      <div class="card-body py-5 px-md-5">
  
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <h2 class="fw-bold mb-5">Sign up now</h2>
            {{-- form  --}}
            <form action="storess" method="post">
                  @csrf
               {{-- Name input  --}}
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div data-mdb-input-init class="form-outline">

                    <input type="text" id="form3Example1" name="name" value="{{old('name')}}" class="form-control py-2
                    @error('name') is-invalid @enderror"  placeholder="Enter your name" />
                    <span class="text-danger">@error('name'){{$message}}@enderror
                    </span><br>
                    <label class="form-label" for="form3Example1">Name</label>
                    
                  </div>
                </div>
                {{-- Email input  --}}
                <div class="col-md-6 mb-4">
                  <div data-mdb-input-init class="form-outline">
                    <input type="email" id="form3Example2" name="email" value="{{old('email')}}" class="form-control py-2
                    @error('email') is-invalid @enderror"  placeholder="Enter your email" />
                    <span class="text-danger">@error('email'){{$message}}@enderror
                    </span><br>
                    <label class="form-label" for="form3Example2">Email</label>
                  </div>
                </div>
              </div>
               {{-- Passwor input  --}}
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div data-mdb-input-init class="form-outline">
                    <input type="password" id="form3Example1" name="password" value="{{old('password')}}" class="form-control py-2 
                    @error('password') is-invalid @enderror"  placeholder="Enter your password" />
                    <span class="text-danger">@error('password'){{$message}}@enderror
                    </span><br>
                    <label class="form-label" for="form3Example1">Password</label>
                  </div>
                </div>
                {{-- Name input  --}}
             <div class="col-md-6 mb-4">
                  <div data-mdb-input-init class="form-outline">
                    <input type="number" id="form3Example2" name="age" value="{{old('age')}}" class="form-control py-2 
                    @error('age') is-invalid @enderror"  placeholder="Enter your age" />
                    <span class="text-danger">@error('age'){{$message}}@enderror
                    </span><br>
                    <label class="form-label" for="form3Example2">Age</label>
                  </div>
                </div>
              </div>

              
  
              <!-- Email input -->
              <div data-mdb-input-init class="form-outline mb-4">
                <textarea type="text" id="form3Example3" name="address" value="{{old('address')}}" class="form-control py-3
                @error('address') is-invalid @enderror"  placeholder="Address"></textarea>
                <span class="text-danger">@error('address'){{$message}}@enderror
                </span><br>
                <label class="form-label" for="form3Example3">Address</label>
              </div>
  
             
              <!-- Submit button -->
              <input type="submit" class="btn btn-primary w-50 py-2" value="Register">
              
  
              <!-- Register buttons -->
              <div class="text-center">
                <p>Already have an account: <a href="/">sign in</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>