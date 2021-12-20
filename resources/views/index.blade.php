@extends('main')
@section('content')

    <div class="container mt-3" >
        <div class="col-md-6">

            @foreach ($articles as $article)
                <div class="card mb-3">
                    <div class="card-header">
                        <a href="{{route('article', ['slug'=>$article->slug])}}"><h5 class="card-title">{{$article->title}}</h5></a>
                    </div>
                    <div class="card-body">

                        <div class="media">

                            <img src="{{ asset($default_im)}}" width="200" height="150" class="mr-3">

                            <div class="media-body">

                                <p class="card-text">{{substr($article->content, 0, 100)}}...</p>
                                <a href="{{route('article', ['slug'=>$article->slug])}}" class="btn btn-primary">Read</a>
                            </div>

                        </div>

                    </div>
                    <div class="card-footer text-muted">
                        {{$article->created_at}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{$articles->links()}}
@endsection
