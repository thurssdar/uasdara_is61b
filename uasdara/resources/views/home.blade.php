@extends('layouts.master')

@yield('')
@section('content')
    <div class="card">
        <ol class="breadcrumb float-sm-left">
        <li class="breadcrumb-item"><a href="#"><h3 class="card-title">Dashboard</h3></a></li>
        </ol>
    <div class="card-header">
        {{-- <div class="card-tools">
            <section class="content">
                <div class="container-fluid">
                  <!-- Info boxes -->
                  <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                      <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">CPU Traffic</span>
                          <span class="info-box-number">
                            10
                            <small>%</small>
                          </span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                      <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">Likes</span>
                          <span class="info-box-number">41,410</span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class="clearfix hidden-md-up"></div>

                    <div class="col-12 col-sm-6 col-md-3">
                      <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">Sales</span>
                          <span class="info-box-number">760</span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                      <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">New Members</span>
                          <span class="info-box-number">2,000</span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                  </div>

                </div><!--/. container-fluid -->
              </section>
        </div> --}}
        <div class="container-fluid ">
            <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-white">
                  <div class="inner">
                    <p>Penjadwalan</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="/penjadwalan/" class="small-box-footer bg-lightblue">Click Here <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-white">
                  <div class="inner">
                    <p>Mahasiswa</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="/mahasiswa/" class="small-box-footer bg-lightblue">Click Here <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-white">
                  <div class="inner">
                    <p>Dosen</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="/dosen/" class="small-box-footer bg-lightblue">Click Here <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            </div>
        </div>
        <div class="container-fluid py-4">
            <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-white">
                  <div class="inner">
                    <p>Mata Kuliah</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="/matakuliah/" class="small-box-footer bg-lightblue">Click Here <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-white">
                  <div class="inner">
                    <p>Semester</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="/semester/" class="small-box-footer bg-lightblue">Click Here <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-white">
                  <div class="inner">
                    <p>Tahun Ajaran</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="/tahunajaran/" class="small-box-footer bg-lightblue">Click Here <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection



{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
