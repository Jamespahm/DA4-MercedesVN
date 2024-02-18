<link rel="stylesheet" type="text/css" href="{{ asset('css/news.css') }}">

@extends('Share.layout')

@section('title', 'Danh sách xe')

@section('content')
    <div id="bannerr">
        <div class="banner--mask"></div>
        <div class="banner--content">
            <h2>MERCEDES-BENZ</h2>

        </div>
    </div>
    <div id="content">
        @php
            $i = 0;
        @endphp
        @foreach ($TinTuc as $item)
            @if ($i % 2 == 0)
                <div class="news">
                    <h2 class="news-title">{{ $item->TieuDe }}</h2>
                    <hr class="news-title--top-line">
                    <img class="news--img" src="/img/news/{{ $item->HinhAnh }}" alt="">
                    <p class="news-content" style="padding-left: 70px;">{{ $item->NoiDung }}</p>
                </div>
            @else
                <div class="news">
                    <h2 class="news-title">{{ $item->TieuDe }}</h2>
                    <hr class="news-title--top-line">
                    <p class="news-content">{{ $item->NoiDung }}</p>
                    <img class="news--img" style="padding-left: 70px;" src="/img/news/{{ $item->HinhAnh }}" alt="">
                </div>
            @endif
            @php
                $i++;
            @endphp
        @endforeach

    </div>
@endsection
