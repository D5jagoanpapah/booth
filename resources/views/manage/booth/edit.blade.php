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

        <button type="submit" class="btn btn-primary">Buat</button>

        </form>
      </div>
    </div>
  </div>

  @stop