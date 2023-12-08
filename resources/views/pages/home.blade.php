@extends('layouts.app')

@section('content')
<div class="container my-3">
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner " style="height: 300px;">
            <div class="carousel-item active">
                <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/breaking-news-banner-design-template-43d6dcbf37ca0a7d1450cb20f76b96fb_screen.jpg?ts=1677499703" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://d2gg9evh47fn9z.cloudfront.net/800px_COLOURBOX26402161.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQe6n609FebolZuwjq5p_1EYgmpwxsb5497T_sB4ZmdZYatx8BqjQxyQh-4TUow6Ok2OlI&usqp=CAU" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div class="container mt-3">
    <div class="row">
        @foreach ($allBerita as $item)
        <div class="col-lg-4 col-md-6 my-2">
            <div class="card">
                <img src="{{ asset('img/gambar/' . $item->gambar) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4 class="card-title">{{ Str::limit($item->judul, 24, '...') }}</h5>
                        <p class="card-text">{!! Str::words($item->isi, 30, '...') !!}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('detail', $item->id) }}" class="btn btn-primary">View</a>
                            <small class="text-body-secondary">{{ $item->user->name }} |
                                <span class="fw-bold">{{ $item->kategori->nama_kategori }}</span></small>
                        </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection