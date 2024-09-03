@extends('manage.layout')
   
   
@section('content')

   <!-- Basic Layout -->

 <h4 class="fw-bold py-3 ">Tambah Category</h4>
 <a href="/booth_category" class="btn btn-primary mb-4">Kembali</a>

   <div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Tambah Category</h5>

        </div>
        <div class="card-body">
          <form action="{{ route('booth_category.insert') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">Nama Kategori</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="" />
            </div>

            <div class="mb-3">
                <label for="" class="col-form-label">Deskripsi</label>
                <textarea class="form-control" name="description" id="" rows="4"></textarea>
            </div>
              
            <button type="submit" class="btn btn-primary">Buat</button>
            </div>


          </form>
        </div>
      </div>
    </div>

    @stop