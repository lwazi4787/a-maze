@extends('../layouts.layout')
@section('content')

  @if(session()->has('message'))

    <div class="alert alert-success">
      {{session('message')}}
    </div>

  @endif
  
  <h3 class="display-4">Login</h3><br><br>
  <div class="row">
      <div class="col-md-12">
        <div class="outer-form">
          <form class="myForm" method="post" action="/user/login">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" placeholder="Email" name="email" value="{{old('Email')}}">
              @error('Email')
                <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
              @enderror
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Password</label>
              <input type="password" class="form-control" placeholder="Password" name="password" value="{{old('password')}}">
              @error('password')
                <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button><br><br>

            <small>Not registerd? <a href="/register" class="a-auth">Register</a></small>
          </form>
        </div>
      </div>

  </div>
@endsection