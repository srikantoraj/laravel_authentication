<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>   
       {{-- Registration Start --}}
       <div style="width: 500px ; margin:50px auto" class="register">
       
         
       <form action="/register" method="POST">
        @csrf
        <div class="mb-3 row">
            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
            <input type="text" name="name" class="form-control" id="inputName">
            @error('name')
               <small>{{$message}}</small> 
            @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" name="email" class="form-control" id="inputEmail">
              @error('email')
               <small>{{$message}}</small> 
            @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputMobile" class="col-sm-2 col-form-label">Mobile</label>
            <div class="col-sm-10">
            <input type="number" name="contact" class="form-control" id="inputMobile">
            @error('contact')
               <small>{{$message}}</small> 
            @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="password" name="password" class="form-control" id="inputPassword">
              @error('password')
               <small>{{$message}}</small> 
            @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
       {{-- Registration End --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>