@extends('manage.layout')


@section('content')
 <!-- Form controls -->

 <h4 class="fw-bold py-3 ">Edit Booth</h4>
 <a href="/booth" class="btn btn-primary mb-4">Kembali</a>

 <div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-header">Edit Booth</h5>
      <div class="card-body">
        <form action="{{ route('booth.update', $booth->id) }}" method="POST" enctype="multipart/form-data">
          @method('PUT')
          @csrf

          <div class="mb-3">
            <label for="" class="col-form-label">Vendor</label>
            <p>{{ $booth->vendor->company_name }}</p>
           </div>  
           
           <div class="mb-3">
             <label for="exampleFormControlInput1" class="form-label">Nama Booth</label>
             <input
             type="text"
             name="name"
             class="form-control"
             id="exampleFormControlInput1"
             value="{{ $booth->name }}"
             />
            </div>
            
          <div class="mb-3">
          <label for="exampleFormControlReadOnlyInput1" class="form-label">Deskripsi</label>
          <textarea class="form-control" name="description" id="" rows="4">{{ $booth->description }}</textarea>
          </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Harga</label>
          <input
          type="text"
          name="price"
          class="form-control"
          id="exampleFormControlInput1"
          value="{{ $booth->price }}"
          />
        </div>
        
     
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Ukuran</label>
          <input
            type="text"
            name="size"
            class="form-control"
            id="exampleFormControlInput1"
            value="{{ $booth->size }}"
          />
        </div>

        <div class="mb-3">
          <div class="row">
            <div class="col-lg-12">
              <label for="formFile" class="form-label">Gambar Booth</label>
              <input class="form-control" type="file" id="formFile" name="image_url[]" multiple />
            </div>
          </div>
          <div class="row">
            @foreach($booth->images as $image)
            <div class="col-lg-2">
              <img src="{{ Storage::url($image->image_url) }}" alt="" class="shadow rounded mt-3 w-100" style="width: 300px; height: 150px; object-fit: cover;">
              @if ($booth->images->count() > 1)
              <a href="{{ route('booth.images.delete', $image->id) }}" class="btn btn-danger btn-sm w-100 mt-3">Hapus</a>
              @endif
            </div>
            @endforeach
          </div>
        </div>

        <button type="submit" class="btn btn-primary">Buat</button>

        </form>
      </div>
    </div>
  </div>

  @stop