<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <title>Login</title>
  </head>
  <body style="background-image: url( {{ asset('img/kucing.jpg') }} ); background-repeat: no-repeat; background-size: cover;">
    @include('layouts.header')
    <div class="container py-5">
      <div class="w-50 center border rounded px-3 py-3 mx-auto" style="background-color: white;">
        <h1>Login bro</h1>
        {{-- untuk menangkap inputan --}} 
        @if ($errors -> any()) 
        <div class="alert alert-danger">
          <ul> @foreach ($errors->all() as $item) 
            <li>{{$item}}</li> @endforeach 
          </ul>
        </div> @endif <form action="" method="POST"> 
          @csrf 
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="username" value="{{old('username')}}" name="username" class="form-control">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
          </div>
          <div class="mb-3 d-grid">
            <button name="submit" type="submit" class="btn btn-primary">Login</button>
            @include('layouts.footer')
          </div>
        </form>
      </div>
    </div>
  </body>
</html>