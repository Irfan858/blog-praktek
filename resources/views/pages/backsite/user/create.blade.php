@extends('layouts.backsite.app')

@section('title', 'User')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah User Baru</h1>
</div>

<!-- Form -->
<form action="" method="post">
    <div class="form-group">
        <label for="user-nama">Nama User</label>
        <input type="text" class="form-control" name="user-nama" id="user-nama" placeholder="Masukkan Nama User">
    </div>
    <div class="form-group">
        <label for="user-email">Email</label>
        <input type="email" class="form-control" name="user-email" id="user-email" placeholder="Masukkan Email">
    </div>
    <div class="form-group">
        <label for="user-password">Password</label>
        <input type="password" class="form-control" name="user-password" id="user-password" placeholder="Masukkan Password">
    </div>
    <div class="form-group">
        <label for="user-password-confirm">Konfirmasi Password</label>
        <input type="password" class="form-control" name="user-password-confirm" id="user-password-confirm" placeholder="Masukkan Password Anda Kembali">
    </div>

    <div class="row my-3 mx-1">
        <button type="submit" class="btn btn-success p-2 mr-3">
            <i class="fa fa-save"></i>
            <span> Simpan</span>
        </button>
        <button type="reset" class="btn btn-danger p-2 mr-3">
            <i class="fa fa-save"></i>
            <span>Batalkan</span>
        </button>
    </div>
</form>
@endsection
