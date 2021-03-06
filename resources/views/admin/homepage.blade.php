@extends('template.main')
@section('content')
    <div class="row g-2">
        <div class="col-sm-6 col-xl-6">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4" style="height:200px">
                <i class="fa fa-users fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Jumlah Siswa</p>
                    <h2 class="mb-0 text-center">{{$tsiswa}}</h2>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-6">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4" style="height:200px">
                <i class="fa fa-users-cog fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Jumlah Guru</p>
                    <h2 class="mb-0 text-center">{{$tguru}}</h2>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-6">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4" style="height:200px">
                <i class="fa fa-home fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Jumlah Kelas</p>
                    <h2 class="mb-0 text-center">{{$tkelas}}</h2>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-6">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4" style="height:200px">
                <i class="fa fa-chart-pie fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Jumlah Jurusan</p>
                    <h2 class="mb-0 text-center">{{$tjurusan}}</h2>
                </div>
            </div>
        </div>
    </div>
@endsection