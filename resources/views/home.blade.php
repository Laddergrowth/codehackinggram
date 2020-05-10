@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-3 p-5">
                    <img src="https://scontent-lhr8-1.cdninstagram.com/v/t51.2885-19/s150x150/87604514_848249612269338_6257783984680337408_n.jpg?_nc_ht=scontent-lhr8-1.cdninstagram.com&_nc_ohc=qdHzj1kOrF0AX_C-G8g&oh=922bbdce3e7c462ac0f0c82ddc91947b&oe=5EDFC47A" class="rounded-circle">
        </div>
    <div class="col-9 pt-5">

        <div><h1>{{ $user->username }}</h1></div>

        <div class="d-flex">
            <div class="pr-4"><strong>2</strong> posts</div>
            <div class="pr-4"><strong>2</strong> followers</div>
            <div class="pr-4"><strong>16</strong> following</div>
        </div>

        <div class="pt-4 font-weight-bold"> {{ $user->profile->title }}</div>
        <div class="pt-4">{{ $user->profile->description }}</div>
        <div> <a href="#">{{ $user->profile->url }}</a></div>

        <div class="row pt-5">
            <div class="col-4">
              <img src="https://images.unsplash.com/photo-1589107736323-462d51b898e5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="w-100">
            </div>
             <div class="col-4">
              <img src="https://images.unsplash.com/photo-1589107736323-462d51b898e5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="w-100">
            </div>
              <div class="col-4">
              <img src="https://images.unsplash.com/photo-1589107736323-462d51b898e5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="w-100">
            </div>

    </div>
</div>
@endsection
