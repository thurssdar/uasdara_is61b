@extends('layouts.master')
@section('title','Penjadwalan')
@section('judul','Penjadwalan')
@section('bc')
    <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Penjadwalan</li>
    </ol>
@endsection

@section('css')
<!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

@section('js')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('/plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{ asset('/plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{ asset('/plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{ asset('/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{ asset('/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

    <!-- Page specific script -->
    <script>
        $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        });
    </script>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
        <a href="/penjadwalan/form/" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>

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
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Kode</th>
                        <th>Nama Mahasiswa </th>
                        <th>Hari</th>
                        <th>Tanggal</th>
                        <th>Mata Kuliah</th>
                        <th>Dosen</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pj as $item)
                        <tr>
                            <td>{{$nomor++}}</td>
                            <td>{{$item->kode}}</td>
                            <td>{{$item->mahasiswas->kode}} - {{$item->mahasiswas->nim}}</td>
                            <td>{{$item->mahasiswas->kode}} - {{$item->mahasiswas->nama}}</td>
                            <td>{{$item->hari}}</td>
                            <td>{{$item->tanggal}}</td>
                            <td>{{$item->matakuliahs->kode}} - {{$item->matakuliahs->matakuliah}}</td>
                            <td>{{$item->dosens->kode}} - {{$item->dosens->nama}}</td>
                            <td>
                                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#detail{{$item->id}}">
                                    <i class="fa fa-eye"></i>
                                </button>

                                <!-- Modal Detail-->
                                <div class="modal fade" id="detail{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail {{$item->nama}}</h1>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table">

                                                <tbody>
                                                        <tr>
                                                            <td>Kode</td>
                                                            <th scope="row">{{$item->kode}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>NIM</td>
                                                            <th scope="row"> {{$item->mahasiswas->nim}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Nama Mahasiswa</td>
                                                            <th scope="row">{{$item->mahasiswas->nama}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Hari</td>
                                                            <th scope="row">{{$item->hari}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Tanggal</td>
                                                            <th scope="row">{{$item->tanggal}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Mata Kuliah</td>
                                                            <th scope="row">{{$item->matakuliahs->matakuliah}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>SKS</td>
                                                            <th scope="row">{{$item->matakuliahs->sks}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>NIP</td>
                                                            <th scope="row">{{$item->dosens->nip}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Dosen</td>
                                                            <th scope="row">{{$item->dosens->nama}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Semester</td>
                                                            <th scope="row"> {{$item->semesters->semester}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Tahun Ajaram</td>
                                                            <th scope="row"> {{$item->tahunajars->tahunajar}}</th>
                                                        </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>

                                        </div>
                                    </div>
                                    </div>
                                </div>

                                <a href="/penjadwalan/edit/{{$item->id}}" class="btn btn-info btn-xs"><i class="fa fa-pencil-alt"></i></a>

                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#hapus{{$item->id}}">
                                    <i class="fa fa-trash"></i>
                                </button>

                                <!-- Modal Hapus-->
                                <div class="modal fade" id="hapus{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        Yakin ingin menghapus data penjadwalan <b>{{$item->mahasiswas->nama}}</b>?
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <form action="/penjadwalan/{{$item->id}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-primary">Hapus</button>
                                        </form>

                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Tidak Ada Data</td>
                        </tr>
                    @endforelse

                </tfbosy>
            </table>
        </div>
        <!-- /.card-body -->
        {{-- <div class="card-footer">
        Footer
        </div> --}}
        <!-- /.card-footer-->
    </div>
@endsection
