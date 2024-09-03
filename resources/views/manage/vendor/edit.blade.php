@extends('manage.layout')
   
   
@section('content')

   <!-- Basic Layout -->

 <h4 class="fw-bold py-3 ">Ubah Vendor</h4>
 <a href="/vendor" class="btn btn-primary mb-4">Kembali</a>

   <div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Ubah Vendor</h5>
        </div>
        <div class="card-body">
          <form action="{{ route('vendor.update', $vendor->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="" class="col-form-label">Nama</label>
                <p>{{ $vendor->user->name }}</p>
            </div>
            
            <div class="mb-3">
                <label for="" class="col-form-label">Pilih Alamat</label>
                <div class="row">
                    <div class="col-lg-4">
                        @foreach ($addresses as $address)
                        <div class="_address">
                            <input type="radio" class="btn-check" name="address_id" id="option{{ $address->id }}" autocomplete="off" value="{{$address->id }}" {{ $address->id == $vendor->address_id ? 'checked' : '' }}>
                            <label class="btn btn-outline-primary w-100 mb-1" for="option{{ $address->id }}">{{ $address->address . ', ' . $address->district . ', '. $address->city->type . '. '.  $address->city->name .', '. $address->province->name }}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
                
            </div>

            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">Nama Perusahaan</label>
              <input type="text" class="form-control" id="company_name"   value="{{ $vendor->company_name }}" name="company_name" placeholder="" />
            </div>


            <div class="mb-3">
              <label class="form-label" for="basic-default-email">Kontak</label>
              <div class="input-group input-group-merge">
                <input
                  type="text"
                 value="{{ $vendor->contact_number }}"
                  id=""
                  name="contact_number"
                  class="form-control"
                  placeholder=""
                  aria-label="john.doe"
                  aria-describedby="basic-default-email2"
                />
              </div>
        
            </div>   
          
            <button type="submit" class="btn btn-primary">update</button>
          </form>
        </div>
      </div>
    </div>

    @stop