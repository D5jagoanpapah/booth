@extends('manage.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-4 order-0">
        
        <form action="{{ route('app.myprofile.update') }}" id="formAccountSettings" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="card ">
            <h5 class="card-header">Tambah foto KTP</h5>
            <!-- Account -->
            <div class="card-body">
                  @if(auth()->user()->user_detail->ktp_image_url == null)
                    <div class="mb-3 col-md-6">
                        <label for="formFile" class="form-label">Masukan Foto KTP</label>
                        <input class="form-control @error('ktp_image_url') is-invalid @enderror" type="file" id="formFile" name="ktp_image_url" />
                        @error('ktp_image_url')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    @else
                   <div class="d-flex gap-3 align-items-center">
                      <div>
                            <img
                            src="{{ Storage::url(auth()->user()->user_detail->ktp_image_url) }}"
                            alt="user-ktp"
                            class="d-block rounded"
                            width="200"
                            id="uploadedAvatar"
                        />
                      </div>
                      <div>
                        @if (auth()->user()->user_detail->ktp_is_verified == '0')
                        <h6 class="text-warning"><i class="bx bx-time"></i> KTP sedang dalam proses verifikasi, mohon menunggu!</h6>
                        @else
                        <h6 class="text-success"><i class="bx bx-check-circle"></i> KTP telah diverifikasi</h6>
                        @endif
                      </div>
                   </div>
                    @endif
            </div>
            <hr class="my-0" />
            <div class="card-body">
                <div class="row">
                  <div class="mb-3 col-md-6">
                    <label for="name" class="form-label">nama</label>
                    <input
                      class="form-control"
                      type="text"
                      value="{{ auth()->user()->name }}"
                      id="name"
                      name="name"
                    />
                  </div>
                 
                  <div class="mb-3 col-md-6">
                    <label for="email" class="form-label">email</label>
                    <input
                      class="form-control"
                      type="email"
                      value="{{ auth()->user()->email }}"
                      id="email"
                      name="email"
                    />
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="password" class="form-label">password</label>
                    <input
                      type="password"
                      class="form-control"
                      id="password"
                      name="password"
                      
                    />
                  </div>
                  
                  <div class="mb-3 col-md-6">
                    <label for="repeat_password" class="form-label">ulangi password </label>
                    <input
                      type="password"
                      class="form-control"
                      id="repeat_password"
                      name="repeat_password"
                  
                    />
                  </div>
                </div>
                <div class="mt-2">
                  <button type="submit" class="btn btn-primary me-2">Simpan</button>
                </div>
            </div>
            <!-- /Account -->
        </div>
    </form>
    
</div>
</div>

<div class="row ">
    <div class="col-lg-6 mb-4 order-0">
        <div class="card">
              <h5 class="card-header"> Tambah Alamat </h5>
              
              <div class="card-body">
                <div class="row">
                    <form action="{{ route('app.myprofile.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="" class="col-form-label">Provinsi</label>
                            <select name="province_id" id="" class="form-select _province">
                              <option value="" hidden>Pilih Provinsi</option>
                                @foreach($provinces as $province)
                                <option value="{{ $province->id }}">{{ $province->name }}</option>
                                @endforeach
                            </select>
                            @error('province_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
      

                        <div class="mb-3">
                            <label for="" class="col-form-label">Kota/Kabupaten</label>
                            <select name="city_id" id="" class="form-select _city" disabled>
                              <option value="{{ old('city_id') }}" hidden>Pilih Kota/Kabupaten</option>
                            </select>
                            @error('city_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="" class="col-form-label">Kecamatan</label>
                            <input type="text" class="form-control" name="district" value="{{ old('district') }}" placeholder="Masukkan Kecamatan">
                            @error('district')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="" class="col-form-label">Alamat Lengkap</label>
                            <textarea class="form-control" name="address" id="" rows="4"   placeholder="Masukkan alamat lengkap">{{ old('address') }}</textarea>
                            @error('address')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="" class="col-form-label">Kode Pos</label>
                            <input type="text" class="form-control" name="postal_code" value="{{ old('postal_code') }}" placeholder="Masukkan kode pos">
                            @error('postal_code')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="contact_number" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" id="contact_number" name="contact_number" value="{{ old('contact_number') }}" placeholder="Masukan nomer telepon aktif" autofocus />
                            @if ($errors->has('contact_number'))
                            <small class="text-danger">{{ $errors->first('contact_number') }}</small>
                            @endif
                          </div>
                    
                          <div class="mb-3">
                            <label for="" class="col-form-label">Link Google Maps</label>
                            <input type="text" class="form-control" name="gmaps" value="{{ old('gmaps') }}">
                            @error('gmaps')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            <a href="#!" data-bs-toggle="modal" data-bs-target="#tutorialGmapsModal">Cara Menambahkan Link Google Maps</a>
                        </div>
                    
                   

                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Simpan</button>
                        </div>

                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
               <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Alamat</th>
                        <th>Opsi</th>
                    </tr>
                    @forelse(auth()->user()->addresses as $address)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $address->address . ', ' . $address->district . ', ' . $address->city->type . '. ' .  $address->city->name . ', ' . $address->province->name }}</td>
                        <td>
                            <a href="{{ route('app.myprofile.delete_address', $address->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus alamat ini?')"><i class="bx bx-trash"></i></a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td class="text-center text-danger" colspan="2">Tidak ada alamat!</td>
                    </tr>
                    @endforelse
               </table>
            </div>
        </div>
    </div>
</div>

 <!-- Modal -->
 <div class="modal fade" id="tutorialGmapsModal" tabindex="-1" aria-labelledby="tutorialGmapsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="tutorialGmapsModalLabel">Cara Menambahkan Link Google Maps</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ol>
            <li>Masuk ke Google Maps</li>
            <li>Cari Alamat Usaha</li>
            <li>Klik tombol "bagikan"</li>
            <li>Klik tab "Sematkan Peta"</li>
            <li>klik tombol "Salin HTML"</li>
            <li>Paste ke inputan "Link Google Maps"</li>
          </ol>
          <h5>Contoh:</h5>
          <img src="/assets/manage/images/gmaps_tutorial.png" class="w-100 rounded" alt="">
        </div>
      </div>
    </div>
  </div>
@stop

@push('script')
<script>
    $('._province').change(function() {
        let province_id = $(this).val()
        
        $.ajax({    
            url: "{{ route('user.address.get_cities') }}",
            type: 'POST',
            data: {
                _token: "{{ csrf_token() }}",
                province_id: province_id
            },
            success: (response) => {
                if (response.success == true) {
                    $('._city').html(response.data).removeAttr('disabled')
                }
            }
        })
    })
</script>
@endpush