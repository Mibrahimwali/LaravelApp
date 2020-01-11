@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3 p-5">
       <img src="https://instagram.fkhi6-1.fna.fbcdn.net/v/t51.2885-19/s150x150/70985486_577637296311063_2240788552625422336_n.jpg?_nc_ht=instagram.fkhi6-1.fna.fbcdn.net&_nc_ohc=Tj6v7qiBykUAX8Ieexl&oh=d5452ace6eeaaefb7e36c023f5f95df8&oe=5EAA2DD7" class="rounded-circle">
       </div>
       <div class="col-9 p-5">
       <div class="d-flex justify-content-between align-items-baseline">
       <h1>{{$user->username}}</h1>
       <a href="/p/create">Add New Post</a>
       </div>
       <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
        <div class="d-flex">
        <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
        <div class="pr-5"><strong>23K</strong> followers</div>
        <div class="pr-5"><strong>212</strong> following</div>
        </div>

        <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
        <div>{{$user->profile->description}}</div>
        <div><a href="www.freeCodeCamp.org">{{$user->profile->url ?? "Not Available"}}</a></div>
       </div>
   </div>

   <div class="row pt-4">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{$post->id}}">
                    <img src="/storage/{{$post->image}}" class="w-100" alt=""> 
                </a>
            </div>
        @endforeach
       
       
   </div>
</div>
@endsection
