@extends('layouts.base')

<!-- Trien khai title -->
@section('title','Home Page')

@section('main')
<button class="btn btn-primary" type="submit">Add Article</button>
<div class="row mt-4">
    @foreach($articles as $article)
    <div class="col-md-3 mb-2">
        <div class="card" style="width: 18rem;">
            <img src="{{$article->hinhanh}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$article-> ten_bviet}}</h5>
                <p class="card-text">
                    <a href="{{route('articles.show',$article-> ma_bviet)}}" class="text-decoration-none">
                        {{$article-> tomtat}}
                    </a>
                </p>
            </div>
            <div class="card-footer">
                <!-- Edit Icon -->
                <a href="" class="text-decoration-none mr-2">
                    <i class="bi bi-pencil"></i>
                </a>
                <!-- Remove Icon -->
                <a href="" class="text-decoration-none">
                    <i class="bi bi-trash3"></i>
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection