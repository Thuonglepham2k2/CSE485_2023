@extends('layouts.base')

@section('main')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>{{ $article->tieude }}</h1>
            <p><strong>Song Title:</strong> {{ $article->ten_bhat}}</p>
            <p><strong>Author:</strong> {{ $article->author->ten_tgia }}</p>
            <p><strong>Category:</strong> {{ $article->category->ten_tloai }}</p>
            <p><strong>Date of Publication:</strong> {{ $article->ngayviet }}</p>
            <div class="framed-content">
                <p>{{ $article->noidung }}</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="image-container">
                <img src="{{ $article->hinhanh }}" class="img-fluid" alt="...">
            </div>
        </div>

        <style>
            .framed-content {
                border: 1px solid #ccc;
                padding: 10px;
                margin-bottom: 20px;
            }

            .image-container {
                max-width: 100%;
                height: auto;
            }
        </style>
        @endsection