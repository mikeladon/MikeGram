@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/profile/{{$user -> id}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
            <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Title</label>

                    <div class="col-md-6">
                        <input name="title" id="title" type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') ?? $user->profile->title }}" required autocomplete="title" autofocus>

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            <div class="form-group row">
                <label for="description" class="col-md-4 col-form-label">Post Description</label>

                <div class="col-md-6">
                    <input name="description" id="description" type="text" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') ?? $user->profile->description }}" required autocomplete="description" autofocus>

                    @error('description')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="url" class="col-md-4 col-form-label">Url</label>

                <div class="col-md-6">
                    <input name="url" id="url" type="text" class="form-control @error('url') is-invalid @enderror" value="{{ old('url') ?? $user->profile->url }}" required autocomplete="url" autofocus>

                    @error('url')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-8 offset-2">
                    <div class="form-group row">
                        <label for="image" class="col-md-4 col-form-label">Profile Image</label>
                        <div class="col-md-6">
                            <input type="file" class="form-control-file" id="image" name="image">

                            @error('image')
                            <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-5 col-8 offset-2">
                <button class="btn btn-primary">Save Profile</button>
            </div>
        </form>
    </div>
@endsection

