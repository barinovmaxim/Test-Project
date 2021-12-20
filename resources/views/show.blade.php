@extends('main')
@section('content')

    <div class="container mt-3" >
        <div class="col-md-9">

                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="card-title">{{$article->title}}</h5>
                    </div>
                    <div class="card-body">
                        <div  style="text-align: center">
                        <img src="{{ asset($default_im)}}" class="mr-3" width="600" height="auto">
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <p class="card-text">{{$article->content}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        {{$article->created_at}}
                    </div>
                </div>

        </div>
    </div>
@endsection
