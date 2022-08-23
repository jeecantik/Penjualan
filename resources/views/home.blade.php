@extends('layout.app')

@section('title')
 Home
@endsection

@section('content')
<div class="container overflow-hidden text-center">
  <div class="row g-2">
    <div class="col-6 text-light">
      <div class="p-3 border bg-warning mt-3">15 Barang<i class="fa-solid fa-box-open"></i></div>
    </div>
    <div class="col-6 text-light">
      <div class="p-3 border bg-success mt-3">20 Kategori<i class="fa-solid fa-tags"></i></div>
    </div>
    <div class="col-6 text-light">
      <div class="p-3 border bg-primary mt-3">10 suplier<i class="fa-solid fa-truck-fast"></i></div>
    </div>
    <div class="col-6 text-light">
      <div class="p-3 border bg-danger mt-3">100 Member<i class="fa-solid fa-users"></i></div>
    </div>
  </div>
</div>
@endsection