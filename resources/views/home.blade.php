@extends('layouts.home')
@section('title', 'Home | Perpustakaan')

@section('content')
    <div class="container">
        <h2 class="text-center mb-3">Daftar Buku Terupdate</h2>
        <div class="row mb-2">
            <div class="col-md-6 text-center">
                <form action="{{ route('search-book') }}" method="GET">
                    @csrf
                    <input type="search" name="search" class="form-control mb-3" placeholder="Cari judul atau pengarang buku">
                </form>
            </div>
        </div>
        <div class="row">
            @forelse ($books as $b)
                <div class="col-md-3">
                    <div class="card mb-4">
                        <img src="{{ url('storage/cover-books/' . $b->image) }}" class="card-img-top" alt="Image 1">
                        <div class="card-body">
                            <h5 class="card-title">{{ $b->judul }}</h5>
                            <p class="card-text">{{ Str::limit($b->keterangan, 30, '...') }}</p>
                            <p class="fw-bold">Stok : {{ $b->stok }}</p>
                            <a href="{{ route('detail-book', $b->slug) }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @empty
                <h3>Data buku kosong</h3>
            @endforelse
        </div>
    </div>
@endsection
