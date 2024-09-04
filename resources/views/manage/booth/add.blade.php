@extends('manage.layout')


@section('content')
 <!-- Form controls -->

 <h4 class="fw-bold py-3 ">Tambah Booth</h4>
 <a href="/booth" class="btn btn-primary mb-4">Kembali</a>

 <div class="col-md-12">
    <div class="card mb-4">
      <h5 class="card-header">Tambah Booth</h5>
      <div class="card-body">
        <form action="{{ route('booth.insert') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="mb-3">
            <label for="" class="col-form-label">Vendor</label>
            <select name="vendor_id" id="" class="form-select ">
                <option value="" hidden>Pilih Vendor</option>
                @foreach($vendors as $vendor)
                <option value="{{ $vendor->id }}">{{ $vendor->company_name }}</option>
                @endforeach
            </select>
           </div>
           
           <div class="mb-3">
             <label for="exampleFormControlInput1" class="form-label">Nama Booth</label>
             <input
             type="text"
             name="name"
             class="form-control"
             id="exampleFormControlInput1"
             />
            </div>
            
            <div class="mb-3">
          <label for="exampleFormControlReadOnlyInput1" class="form-label">Deskripsi</label>
          <textarea class="form-control" name="description" id="" rows="4"></textarea>
           </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Harga</label>
          <input
          type="text"
          name="price"
          class="form-control"
          id="exampleFormControlInput1"
          />
        </div>
        
     
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Ukuran</label>
          <input
            type="text"
            name="size"
            class="form-control"
            id="exampleFormControlInput1"
          />
        </div>

        <button type="submit" class="btn btn-primary">Buat</button>

        </form>
      </div>
    </div>
  </div>

  @stop

 
