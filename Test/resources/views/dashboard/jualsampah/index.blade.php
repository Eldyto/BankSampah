@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Jual Sampah</h1>
</div>

<div class="mt-3">
    <h5>Jenis Sampah</h5>
    <select class="form-select" aria-label="Default select example">
        <option selected>Jenis Sampah</option>
        <option value="1">Organik</option>
        <option value="2">Kertas</option>
        <option value="3">Plastik</option>
        <option value="4">Kaca</option>
        <option value="5">Logam</option>
      </select>
</div>

<div class="mt-3">
    <h5>Berat Sampah</h5>
    <div>
      <label for="berat" class="form-label"></label>
      <input type="number" class="form-control" id="berat" placeholder="5 Kg">
    </div>
</div>

<h5>Harga Sampah</h5>

@endsection
