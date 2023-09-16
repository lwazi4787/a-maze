@extends('layouts.layout')
@section('content')
<h3 class="display-4">Create Article</h3><br><br>
  <div class="row">
      <div class="col-md-12">
        <div class="outer-form">
          <form class="myForm" method="post" action="/store" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" class="form-control" placeholder="Title" name="Title">
              @error('Title')
              <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Description</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Description" placeholder="Description"></textarea>
              @error('Description')
              <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
              @enderror
            </div>
            <div class="form-group">
              <select class="form-control" name="Category">
                <option value="visual art">Visual Art</option>
                <option value="techy art">Techy Art</option>
                <option value="graphic design">Graphic Design</option>
                <option value="video editing">Video Editing</option>
                <option value="graphic illustrations">Graphic Illustrations</option>
              </select>

                @error('Category')
                  <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <input type="file" class="form-control-file" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Image" name="img">
            @error('img')
              <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
            @enderror<br>
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>

  </div>
@endsection