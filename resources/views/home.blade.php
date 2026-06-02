@extends('layouts.main')

@section('content')

<div class="text-center">

    <h1 class="mb-4">
        Sistem Inventaris Produk (SIPRO)
    </h1>

    <p class="mb-5">
        Selamat datang di aplikasi pengelolaan produk dan kategori.
    </p>

    <div class="d-flex justify-content-center gap-3">

        <a href="/products"
           class="btn btn-primary btn-lg">

            Kelola Produk

        </a>

        <a href="/categories"
           class="btn btn-success btn-lg">

            Kelola Kategori

        </a>

    </div>

</div>

@endsection