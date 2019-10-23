@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Submit a moto</h1>
            <form action="/submit_moto" method="post">
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Please fix the following errors
                    </div>
                @endif

                {!! csrf_field() !!}
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ old('title') }}">
                    @if($errors->has('title'))
                        <span class="help-block">{{ $errors->first('title') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                    <label for="url">Url</label>
                    <input type="text" class="form-control" id="url" name="url" placeholder="URL" value="{{ old('url') }}">
                    @if($errors->has('url'))
                        <span class="help-block">{{ $errors->first('url') }}</span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="description">{{ old('description') }}</textarea>
                    @if($errors->has('description'))
                        <span class="help-block">{{ $errors->first('description') }}</span>
                    @endif
                </div>


            <!--     $table->string('name')->unique();
            $table->string('cylindrical');
            $table->text('description');
            $table->integer('passengers');
            $table->string('plate_number');
            $table->string('color');
            $table->string('model');
            $table->string('type');
            $table->integer('year');
            $table->double('maximun_weight');
            $table->string('address');
            $table->string('address_location');
            $table->double('value');
            $table->integer('id_location_origin');
            $table->integer('id_owner');
             -->

                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
@endsection