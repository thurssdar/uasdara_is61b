@extends('layouts.master')
@section('title','Tambah Jadwal')
@section('judul','Tambah Jadwal')
@section('bc')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Data Jadwal</a></li>
        <li class="breadcrumb-item active">Tambah Jadwal</li>
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
            <form method="post" action="/penjadwalan/store/" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Kode</label>
                    <input type="text" class="form-control" name="kode">
                </div>
                <div class="mb-3">
                    <label class="form-label">Pilih Mahasiswa</label>
                    <select name="mahasiswa" class="form-control" id="">
                        <option value="">-Pilih Mahasiswa-</option>

                        @foreach ($mhs as $item)
                            <option value="{{$item->id}}">{{$item->nim}}-{{$item->nama}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Hari </label>
                    <input type="text" class="form-control" name="hari">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal </label>
                    <input type="date" class="form-control" name="tanggal">
                </div>
                <div class="mb-3">
                    <label class="form-label">Pilih Dosen</label>
                    <select name="dosen" class="form-control" id="">
                        <option value="">-Pilih Dosen-</option>

                        @foreach ($ds as $item)
                            <option value="{{$item->id}}">{{$item->nip}}-{{$item->nama}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Pilih Mata Kuliah</label>
                    <select name="matakuliah" class="form-control" id="">
                        <option value="">-Pilih Mata Kuliah-</option>

                        @foreach ($mk as $item)
                            <option value="{{$item->id}}">{{$item->matakuliah}}-{{$item->sks}}</option>
                        @endforeach

                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Pilih Semester</label>
                    <select name="semester" class="form-control" id="">
                        <option value="">-Pilih Semester-</option>

                        @foreach ($sm as $item)
                            <option value="{{$item->id}}">{{$item->semester}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Pilih Tahun Ajaran</label>
                    <select name="tahunajar" class="form-control" id="">
                        <option value="">-Pilih Tahun Ajaran-</option>

                        @foreach ($ta as $item)
                            <option value="{{$item->id}}">{{$item->tahunajar}}</option>
                        @endforeach

                    </select>
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

