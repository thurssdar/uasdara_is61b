@extends('layouts.master')
@section('title','Tambah Mata Kuliah')
@section('judul','Tambah Mata Kuliah')
@section('bc')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Data Mata Kuliah</a></li>
        <li class="breadcrumb-item active">Tambah Mata Kuliah</li>
    </ol>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">


        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
            </button>
        </div>
        </div>
        <div class="card-body">
            <form method="post" action="/dosen/store/">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Kode</label>
                    <input type="text" class="form-control" name="kode">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mata Kuliah</label>
                    <input type="text" class="form-control" name="matakuliah">
                </div>
                <div class="mb-3">
                    <label class="form-label">SKS</label>
                    <input type="text" class="form-control" name="sks">
                </div>

                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        <!-- /.card-body -->
        {{-- <div class="card-footer">
        Footer
        </div> --}}
        <!-- /.card-footer-->
    </div>
@endsection

