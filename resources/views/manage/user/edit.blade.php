@extends('manage.layout')
   
   
@section('content')

   <!-- Basic Layout -->

 <h4 class="fw-bold py-3 ">Ubah Users</h4>
 <a href="/user" class="btn btn-primary mb-4">Kembali</a>

   <div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Ubah User</h5>
        </div>
        <div class="card-body">
          <form action="{{ route('user.update', ['id' => $user->id]) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">Nama Lengkap</label>
              <input type="text" class="form-control" value="{{ $user->name }}" id="name" name="name" placeholder="" />
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-email">Email</label>
              <div class="input-group input-group-merge">
                <input
                  type="email"
                  id="email"
                  name="email"
                  class="form-control"
                  value="{{ $user->email }}"
                  placeholder=""
                  aria-describedby="basic-default-email2"
                />
              </div>
              
            </div>

            <div class="mb-3">
              <label class="form-label" for="basic-default-company">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="" /> 
            </div>

            <div class="mb-3">
              <div class="row">
                <div class="col-lg-2">
                  @if( $user->user_detail)
                  <img src="{{ Storage::url($user->user_detail->ktp_image_url) }}" alt="" class="shadow rounded mt-3 w-100">
                  @endif  
                </div>
                <div class="col-lg-10">
                  <label for="formFile" class="form-label">Masukan Foto KTP Baru</label>
                  <input class="form-control" type="file" id="formFile" name="ktp_image_url" />
                </div>
              </div>
            </div>
          
            <button type="submit" class="btn btn-primary">update</button>
          </form>
        </div>
      </div>
    </div>

    @stop