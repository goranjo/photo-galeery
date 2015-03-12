

@section('form')

    {!! Form::open(['url'=>'create_album', 'name'=>'createnewalbum', 'enctype'=>'multipart/form-data']) !!}

                <fieldset>
                    <legend>Create an Album</legend>
                    <div class="form-group">
                        {!! Form::label('name', 'Album Name') !!}
                           {!! Form::text ('name', null, ['required', 'class'=>'form-control', 'placeholder'=>'Album Name']) !!}
                        {{--<input name="name" type="text" class="form-control" placeholder="Album Name" value="{{Input::old('name')}}">--}}
                    </div>
                    <div class="form-group">
                        {!! Form::label('description', 'Album Description') !!}
                        {!! Form::textarea('description', null, ['class'=>'form-control', 'placeholder'=>'Album description']) !!}
                        {{--<textarea name="description" type="text" class="form-control" placeholder="Album description">{{Input::old('descrption')}}</textarea>--}}
                    </div>
                    <div class="form-group">
                        {!! Form::label('cover_image', 'Select a Cover Image') !!}
                        {!! Form::file('cover_image') !!}
                    </div>

                    {!! Form::submit('Create', ['class'=>'btn btn-default']) !!}
                    {{--<button type="submit" class="btn btn-default">Create!</button>--}}
                </fieldset>

            {!! Form::close() !!}

@stop