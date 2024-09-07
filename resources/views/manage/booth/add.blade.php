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
            <select name="vendor_id" id="" class="form-select _vendor @error('vendor_id') is-invalid @enderror">
                <option value="" hidden>Pilih Vendor</option>
                @foreach($vendors as $vendor)
                <option value="{{ $vendor->id }}">{{ $vendor->company_name }}</option>
                @endforeach
            </select>
            @error('vendor_id')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
           </div>

          <div class="mb-3">
            <label for="" class="col-form-label">Kategori</label>
            <select name="category_id" id="" class="form-select  @error('category_id') is-invalid @enderror">
                <option value="" hidden>Pilih Kategori</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
           </div>
           
           <div class="mb-3">
             <label for="exampleFormControlInput1" class="form-label">Nama Booth</label>
             <input
             type="text"
             name="name"
             class="form-control @error('name') is-invalid @enderror"
             id="exampleFormControlInput1"
             />
             @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          
            </div>
            
            <div class="mb-3">
          <label for="exampleFormControlReadOnlyInput1" class="form-label">Deskripsi</label>
          <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="" rows="4"></textarea>
           @error('description')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
           </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Harga</label>
          <input
          type="text"
          name="price"
          class="form-control @error('price') is-invalid @enderror"
          id="exampleFormControlInput1"
          />
          @error('price')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
         
        </div>

        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Stok</label>
          <input
          type="text"
          name="stok"
          class="form-control @error('stok') is-invalid @enderror"
          id="exampleFormControlInput1"
          />
          @error('stok')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
         
        </div>
        
     
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Ukuran</label>
          <input
            type="text"
            name="size"
            class="form-control @error('size') is-invalid @enderror"
            id="exampleFormControlInput1"
          />
          @error('size')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        
        </div>

        <div class="mb-3">
          <label for="formFile" class="form-label">Gambar Booth</label>
          <input class="form-control @error('image_url') is-invalid @enderror" type="file" id="formFile" name="image_url[]" multiple />
          @error('image_url')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Buat</button>

        </form>
      </div>
    </div>
  </div>

  @stop