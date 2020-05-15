@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-3 p-5">
                    <img src="https://scontent-lhr8-1.cdninstagram.com/v/t51.2885-19/s150x150/87604514_848249612269338_6257783984680337408_n.jpg?_nc_ht=scontent-lhr8-1.cdninstagram.com&_nc_ohc=qdHzj1kOrF0AX_C-G8g&oh=922bbdce3e7c462ac0f0c82ddc91947b&oe=5EDFC47A" class="rounded-circle">
        </div>
    <div class="col-9 pt-5">

        <div class="d-flex justify-content-between align-items-baseline">
        <h1>{{ $user->username }}</h1>
                <a href="/p/create">Add new post</a>
        </div>

        <div class="d-flex">
            <div class="pr-4"><strong>{{ $user->posts->count() }}</strong> posts</div>
            <div class="pr-4"><strong>2</strong> followers</div>
            <div class="pr-4"><strong>16</strong> following</div>
        </div>
        <div class="pt-4" font-weight-bold-> {{ $user->profile->title }}  </div>
        <div class="pt-4"> {{ $user->profile->description }} </div>

        <div> <a href="#">{{ $user->profile->url ?? 'N/A' }}</a></div>

        <div class="row pt-5">

            @foreach($user->posts as $post)

            <div class="col-4 pb-4">
              <img src="/storage/{{ $post->image }}" class="w-100">
            </div>

            @endforeach


    </div>
</div>
@endsection
