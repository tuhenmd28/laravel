<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   <form action="{{url('/')}}/register" method="post">
    @csrf
  
    <div class="container">
        <h1 class="text-center">Registration</h1>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" value="{{old('name')}}" class="form-control" name="name" placeholder="" id="name">
            <small id="helpId" class="text-danger">@error('name')
                {{$message}}
                
            @enderror</small>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type=""  value="{{old('email')}}" class="form-control" name="email" placeholder="" id="email">
            <small id="helpId" class="text-danger">@error('email')
                {{$message}}
                
            @enderror</small>
        </div>
        <div class="form-group">
            <label for="pass">Password</label>
            <input type="password" class="form-control" name="password" placeholder="" id="pass">
            <small id="helpId" class="text-danger">@error('password')
                {{$message}}
                
            @enderror</small>
        </div>
        <div class="form-group">
            <label for="pass">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" placeholder="" id="pass">
            <small id="helpId" class="text-danger">
                @error('password_confirmation')
                {{$message}}
                
            @enderror</small>
        </div>
        <button class="btn btn-danger my-4">Submit</button>
    </div>
   </form>
  </body>
</html>