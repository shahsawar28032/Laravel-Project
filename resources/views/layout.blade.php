<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="alert alert-primary">
                    <h1 class="text-center" style="font-weight:800; font-family:sans-serif; color:white">CRUD FORM</h1>
                    <h4>
                       @yield('title')
                   </h4>
                   <p style="text-align: center; font-weight: bold;">
                    Mr. {{ Auth::user()->Name }}
                </p>   
            </div>             
               
                @yield('content')
                
            </div>
        </div>
    </div>
</body>
</html>