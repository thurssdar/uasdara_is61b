@extends('layouts.master')
@section('title','Tambah Tahun Ajaran')
@section('judul','Tambah Tahun Ajaran')
@section('bc')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Tahun Ajaran</a></li>
        <li class="breadcrumb-item active">Tahun Ajaran</li>
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
            <form method="post" action="/tahunajar/store/">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Kode</label>
                    <input type="text" class="form-control" name="kode">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tahun Ajaran</label>
                    <input type="text" class="form-control" name="tahunajar">
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

