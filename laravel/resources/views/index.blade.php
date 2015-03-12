
@extends('master')

@section('content')
  <div class="container">

    <div class="starter-template">

      <div class="row">
        @foreach($albums as $album)
        <div class="col-lg-3">
          <div class="thumbnail" style="min-height: 514px;">
            <img alt="{{$album->name}}" src="/albums/{{$album->cover_image}}">
            <div class="caption">
              <h3><a href="{{URL::route('show_album', ['id'=>$album->id])}}">{{$album->name}}</a></h3>
              <p>{{$album->description}}</p>
              <p>{{count($album->Photos)}} image(s).</p>
              <p>Created date:  {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $album->created_at)->format('d/m/Y') }} at {{ date("g:ha",strtotime($album->created_at)) }}</p>
              <p><a href="{{URL::route('show_album', array('id'=>$album->id))}}" class="btn btn-big btn-default">Show Gallery</a></p>

            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </div><!-- /.container -->

  @stop


