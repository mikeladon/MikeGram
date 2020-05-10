@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row align-items-start">
            <div class="col-8">
                <img src="/storage/{{$post->image}}" class="w-100">
            </div>
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle w-100" style="max-width: 40px">
                    </div>
                    <p class="font-weight-bold m-0">
                        <a href="/profile/{{$post->user->id}}" style="color:black">{{$post->user->username}}</a>
                    </p>
                    <a href="#" class="pl-3">Follow</a>
                </div>
                <hr>
                <p>
                    <a class="font-weight-bold m-0 pr-3" href="/profile/{{$post->user->id}}" style="color:black">{{$post->user->username}}</a>
                    {{ $post->caption }}
                </p>
            </div>
        </div>
    </div>
@endsection
