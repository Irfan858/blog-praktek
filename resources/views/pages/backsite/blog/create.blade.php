@extends('layouts.backsite.app')

@section('title', 'Tambah Blog Baru')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Blog Baru</h1>
</div>

<!-- Form -->
<form action="" method="post">
    <div class="form-group">
        <label for="blog-judul">Judul Blog</label>
        <input type="text" class="form-control" name="blog-judul" id="blog-judul"
            placeholder="Masukkan Judul Blog">
    </div>
    <div class="form-group">
        <label for="blog-kategori">Kategori</label>
        <select class="custom-select" name="blog-kategori" id="blog-kategori">
            <option selected>Pilih Kategori</option>
            <option value="1">Hobi</option>
            <option value="2">Olahraga</option>
        </select>
    </div>
    <div class="form-group">
        <label for="blog-gambar">Gambar</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="blog-gambar" id="blog-gambar">
            <label class="custom-file-label" for="blog-gambar">Pilih File Gambar</label>
        </div>
    </div>
    <div class="form-group">
        <label for="blog-isi">Isi</label>
        <textarea name="blog-isi" id="blog-isi" class="form-control" rows="10" cols="80">
        </textarea>
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

@push('after-script')
     <!-- CKEditor -->
     <script src="{{ asset('assets/backsite/vendor/ckeditor/ckeditor.js') }}"></script>
     <script>
         CKEDITOR.replace('blog-isi');
     </script>
@endpush
