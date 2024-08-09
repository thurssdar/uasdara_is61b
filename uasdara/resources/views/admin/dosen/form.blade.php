@extends('layouts.master')
@section('title','Tambah Dosen')
@section('judul','Tambah Dosen')
@section('bc')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Data Dosen</a></li>
        <li class="breadcrumb-item active">Tambah Dosen</li>
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
                    <label class="form-label">NIP</label>
                    <input type="text" class="form-control" name="nip">
                </div>
                <div class="mb-3">
                    <label class="form-label">Dosen</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="mb-3">
                    <label class="form-label">Mata Ajar</label>
                    <select name="matakuliah" class="form-control" id="">
                        <option value="">-Pilih Mata Ajar-</option>

                        @foreach ($mk as $item)
                            <option value="{{$item->id}}">{{$item->matakuliah}}</option>
                        @endforeach

                    </select>

                    {{-- <label for="access_level">Mata Ajar</label>
                    <select name="matakuliah" id="matakuliah">
                        @foreach ($mk as $item)
                        <option value="1" <?php echo ($access == 1) ? 'selected' : ''; ?>>1</option>
                        @endforeach
                    </select> --}}
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

