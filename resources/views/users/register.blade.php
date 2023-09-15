@extends('../layouts.layout')
@section('content')
  
  <h3 class="display-4">Register</h3><br><br>
  <div class="row">
      <div class="col-md-12">
        <div class="outer-form">
          <form class="myForm" method="post" action="/user/create">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">User name</label>
              <input type="text" class="form-control" placeholder="User name" name="name" value="{{old('Name')}}">
              @error('Name')
                <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
              @enderror
            </div>

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

            <div class="form-group">
              <label for="exampleInputEmail1">Cornfirm password</label>
              <input type="password" class="form-control" placeholder="User name" name="password_confirmation" value="{{old('password_confirmation')}}">
              @error('password_confirmation')
                <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
              @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button><br><br>

            <small>Already registerd? <a href="/login" class="a-auth">Login</a></small>
          </form>
        </div>
      </div>

  </div>
@endsection