@extends('layouts.layout')
@section('content')
  
  <h3 class="display-4">Update Article</h3><br><br>
  <div class="row">
      <div class="col-md-12">
        <div class="outer-form">
          <form class="myForm" method="post" action="/articles/{{$article->id}}/update">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" class="form-control" placeholder="Title" name="Title" value="{{$article->Title}}">
              @error('Title')
              <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Description</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Description">{{$article->Description}}</textarea>
              @error('Description')
              <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>

  </div>
@endsection