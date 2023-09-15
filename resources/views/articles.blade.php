@extends('layouts.layout')
@section('content')
<h3 class="display-4">All Articles</h3><br><br>
  
  @if(session()->has('message'))

        <div class="alert alert-success">
            {{session('message')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </div>

  @endif
  
  <div class="row">
  @foreach($articles as $article)
    <div class="col-md-4 marg-btm">
      <a href="/articles/{{$article->id}}">
      <div class="card shadow-sm">
        <img class="bd-placeholder-img card-img-top" width="100%" height="425" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" src="{{ asset('storage/'.$article->img) }}" alt="img/apa-yang-di-laravel-dan-ekosistem-nya-m19vjr.webp">
        

        <div class="card-body">
          <h3 class="text-dark">{{$article->Title}}</h3></a>
          <!--<p class="card-text text-dark" style="text-align: justify;">{{$article->Description}}</p>-->
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <!--<button type="button" class="btn btn-sm btn-outline-secondary">View</button>-->

            </div>
            <small class="text-muted">{{ $article->created_at->diffForHumans() }}</small>
          </div>
        </div>
      </div>
    </div>
  @endforeach
</div>


<div style="padding: 2em;">
  {{$articles->links()}}
</div>
@endsection