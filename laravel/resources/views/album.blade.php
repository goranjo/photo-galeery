@extends('master')

@section('content')
  <div class="container">

    <div class="starter-template">
      <div class="media">  
        <img class="media-object pull-left" alt="{{$album->name}}" src="/albums/{{$album->cover_image}}" width="350px">
        <div class="media-body">
          <h2 class="media-heading" style="font-size: 26px;">Album Name :</h2>
          <p>{{$album->name}}</p>
          <div class="media">
           <h2 class="media-heading" style="font-size: 26px;">Album Description :</h2>
           <p>{{$album->description}}<p>
            {{--<a href="{{URL::route('add_image',array('id'=>$album->id))}}"><button type="button" class="btn btn-primary btn-large">Add New Image to Album</button></a>--}}
            {{--<a href="{{URL::route('delete_album',array('id'=>$album->id))}}" onclick="return confirm('Are you sure?')"><button type="button" class="btn btn-danger btn-large">Delete Album</button></a>--}}
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach($album->Photos as $photo) 
      <div class="col-lg-3">
        <div class="thumbnail" style="max-height: 350px;min-height: 350px;">
          <img alt="{{$album->name}}" src="/albums/{{$photo->image}}">
          <div class="caption">
            <p>{{$photo->description}}</p>
            <p>Created date:  {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $album->created_at)->format('d/m/Y') }} at {{ date("g:ha",strtotime($album->created_at)) }}</p>
{{--            <a href="{{URL::route('delete_image',array('id'=>$photo->id))}}" onclick="return confirm('Are you sure?')"><button type="button" class="btn btn-danger btn-small">Delete Image</button></a>--}}
            <p>Move image to another Album :</p>
            {{--<form name="movephoto" method="POST" action="{{URL::route('move_image')}}">--}}
              <select name="new_album">
              @foreach($albums as $others)
                <option value="{{$others->id}}">{{$others->name}}</option>
              @endforeach
            </select>
            <input type="hidden" name="photo" value="{{$photo->id}}" />
            <button type="submit" class="btn btn-small btn-info" onclick="return confirm('Are you sure?')">Move Image</button>
            </form>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>  

@stop
