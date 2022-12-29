@extends('layouts.backsite.app')

@section('title', 'Blog Saya')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Blog Saya</h1>
</div>

<div class="py-2">
    <a href="{{ route('blog.create') }}" class="btn btn-success"><i class="fa fa-plus-square mr-2"></i> Tambah Blog Baru</a>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Blog Saya</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Judul</th>
                        <th>Gambar</th>
                        <th>isi</th>
                        <th>kategori</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ini Blog Saya</td>
                        <td>gambar.jpg</td>
                        <td>Ini adalah isi Blog</td>
                        <td>Hobi</td>
                        <td>
                            <div class="row ml-2">
                                <a href="#" class="btn btn-warning mr-2"><i
                                        class="fas fa-pencil-alt"></i> Edit</a>
                                <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i>
                                    Hapus</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
 @endsection
