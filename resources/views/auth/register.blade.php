@extends('auth.layout')

@section('content')
          <!-- Register Card -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="/" class="app-brand-link gap-2">
                 
                  <span class="app-brand-text demo text-body fw-bolder"><span style="color: black">Bro</span><span style="color: #004d4d ">booth.</span></span>
                </a>
              </div>
              <!-- /Logo -->
              <h5 class="mb-2 text-center">Gabung bersama Brobooth 🚀</h5>

              <form id="formAuthentication" class="mb-3" action="{{ route('register.post') }}" method="POST">
                @csrf

                <div class="mb-3">
                  <label for="name" class="form-label">Nama </label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Masukan Nama" value="{{ old('name') }}" />
                  @if ($errors->has('name'))
                  <small class="text-danger">{{ $errors->first('name') }}</small>
                  @endif
                </div>

                <div class="mb-3">
                  <label for="email_address" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email_address" name="email"  value="{{ old('email') }}" placeholder="Masukan Email" />
                  @if ($errors->has('email'))
                  <small class="text-danger">{{ $errors->first('email') }}</small>
                  @endif
                </div>

                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                  @if ($errors->has('password'))
                  <small class="text-danger">{{ $errors->first('password') }}</small>
                  @endif
                </div>

                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="repeat_password">Ulangi Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="repeat_password"
                      class="form-control"
                      name="repeat_password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="repeat_password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                  @if ($errors->has('repeat_password'))
                  <small class="text-danger">{{ $errors->first('repeat_password') }}</small>
                  @endif
                </div>

                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="register_vendor" id="registerVendorCheckbox" {{ old('register_vendor') ? 'checked' : '' }}>
                    <label class="form-check-label" for="registerVendorCheckbox">
                      Daftar sebagai vendor
                    </label>
                  </div>
                </div>

                <div class="vendor-register d-none">
                  <div class="mb-3">
                    <label for="company_name" class="form-label">Nama Perusahaan</label>
                    <input type="text" class="form-control" id="company_name" name="company_name" value="{{ old('company_name') }}" placeholder="Masukan nama perusahaan"  autofocus />
                    @if ($errors->has('company_name'))
                    <small class="text-danger">{{ $errors->first('company_name') }}</small>
                    @endif
                  </div>
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

                  <div class="mb-5">
                      <label for="" class="col-form-label">Link Google Maps</label>
                      <input type="text" class="form-control" name="gmaps" value="{{ old('gmaps') }}">
                      @error('gmaps')
                          <small class="text-danger">{{ $message }}</small>
                      @enderror

                      <a href="#!" data-bs-toggle="modal" data-bs-target="#tutorialGmapsModal">Cara Menambahkan Link Google Maps</a>
                  </div>
                
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary d-grid w-100">Daftar</button>
                </div>
                </form>
                
                <div class="line"></div>

                <div class="media-btn text-center mb-4">
                    <a href="{{ route('auth.google') }}" class="field google">
                        <img src="{{ asset('assets/manage/images/img-google.png') }}" alt="" class="google-img">
                        <span>Daftar dengan Google</span>
                    </a>
                </div>

                <p class="text-center">
                    <span>Sudah memiliki akun?</span>
                    <a href="/login">
                        <span>Masuk!</span>
                    </a>
                </p>
            </div>
          </div>
          <!-- Register Card -->

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

@if (old('register_vendor'))
  <script>
    $('.vendor-register').removeClass('d-none');
  </script>
@endif
<script>
    $('#registerVendorCheckbox').change(function () {
        $('.vendor-register').toggleClass('d-none', !this.checked);
    });

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