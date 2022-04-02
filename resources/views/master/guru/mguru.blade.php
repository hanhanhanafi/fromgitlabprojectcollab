@extends('template.main')
@section('content')
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <div class="row">
                    <div class="col">
                        <h4 class="mb-4 mt-2 font-weight-bold">Data Guru</h4>
                    </div>
                    <div class="col">
                        <div class="mb-4 d-flex justify-content-end">
                            <button type="button" class="btn btn-outline-primary m-2" data-toggle="modal" data-target="#tguruModal"><i class="fa fa-plus"> Data Guru</i></button>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NIP</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Tempat Lahir</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Golongan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($guru as $dguru)
                            <tr>
                                <th scope="row">{{$num++}}</th>
                                <td class="pt-10">{{$dguru->nama_guru}}</td>
                                <td class="pt-10">{{$dguru->NIP}}</td>
                                <td class="pt-10">{{$dguru->jenis_kelamin}}</td>
                                <td class="pt-10">{{$dguru->tempat_lahir}}</td>
                                <td class="pt-10">{{$dguru->tanggal_lahir}}</td>
                                <td class="pt-10">{{$dguru->gol}}</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-sm-square btn-outline-warning m-2"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-sm btn-sm-square btn-outline-danger m-2"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Tambah Data Guru -->
    <div class="modal fade" id="tguruModal" tabindex="-1" role="dialog" aria-labelledby="tguruModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Guru</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="/admin/mguru" method="post">
                    @csrf
                    <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama_guru" id="nama" placeholder="Masukan Nama" required>
                    </div>
                    <div class="form-group">
                        <label>No Induk Pegawai</label>
                        <input type="text" class="form-control" name="nip" id="nip" placeholder="Masukan no NIP" required>
                    </div>
                    <div class="form-group">
                     <label>Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                            <option selected>Pilih Jenis Kelamin</option>
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Masukan Tempat Lahir" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Masukan Tanggal Lahir">
                            </div>
                        </div>
                    </div>    
                    <div class="form-group">
                        <label>Golongan</label>
                        <input type="text" class="form-control" name="gol" id="gol" placeholder="Tipe Golongan" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
        </div>
    </div>
@endsection