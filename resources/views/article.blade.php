@extends('layouts.layout')
@section('content')
  <h3 class="display-4 mobile-only">{{$article->Title}}</h3>
  <div class="row">
      <div class="col-md-8 bg-light p-5 rounded mt-3">
        <img src="{{ asset('storage/'.$article->img) }}" width="100%" height="455" ><br><br>
        <h3>{{$article->Title}}</h3><br>
        <p class="lead">{{$article->Description}}</p>



       @auth
          @if(Auth::user()->id == $article->user_id) 
         <div class="row">
              <div class="col-md-10">
                  <a type="button" class="btn btn-warning btn-sm btn-outline-secondary" href="/articles/{{$article->id}}/edit">Edit</a>
              </div>

              <div class="col-md-2">
                  <form method="post" action="{{$article->id}}/delete">
                      @csrf
                      @method('delete')
                      <input type="submit" class="btn btn-warning btn-sm btn-outline-secondary" value="Delete">
                  </form>
              </div>
          </div>
          @endif 
        @endauth
      </div>

      <div class="col-md-4 mobile-none">
        
        <div class="b-example-divider"></div>

        <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white" style="width: 380px;">
          <a href="/" class="mylnk d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none">
            <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
            <span class="mobile-none display-4 d-flex align-items-center flex-shrink-0 bg-white" style="color: #5e2584;">More Articles</span>
          </a>



          <div class="list-group mobile-none list-group-flush border-bottom scrollarea">
              <a href="#" class="list-group-item list-group-item-action active py-3 lh-tight" aria-current="true">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <strong class="mb-1">{{$article->Title}}</strong>
                  <small>Wed</small>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <img src="{{ asset('storage/'.$article->img) }}" width="100%" >
                  </div>
                  <div class="col-md-8 mb-1 small">{{$article->Description}}</div>
                </div>
              </a>
            @foreach($articles as $articleThis)
              @if($articleThis->id != $article->id)
                <a href="/articles/{{$articleThis->id}}" class="list-group-item list-group-item-action active py-3 lh-tight" aria-current="true">
                  <div class="d-flex w-100 align-items-center justify-content-between">
                    <strong class="mb-1">{{$articleThis->Title}}</strong>
                    <small>Wed</small>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <img src="{{ asset('storage/'.$articleThis->img) }}" width="100%" >
                    </div>
                    <div class="col-md-8 mb-1 small">
                        {{$articleThis->Description}}
                    </div>
                  </div>
                </a>
              @endif
            @endforeach

          </div>
        </div>

        <div class="b-example-divider"></div>

      </div>
  </div>
@endsection
