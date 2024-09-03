@extends('manage.layout')
   
   
@section('content')

   <!-- Basic Layout -->

 <h4 class="fw-bold py-3 ">Tambah Vendor</h4>
 <a href="/vendor" class="btn btn-primary mb-4">Kembali</a>

   <div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Tambah Vendor</h5>

        </div>
        <div class="card-body">
          <form action="{{ route('vendor.insert') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="" class="col-form-label">Nama</label>
                <select name="user_id" id="" class="form-select _user">
                    <option value="" hidden>Pilih User</option>
                    @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
            <div class="_address">

            </div>
                
            </div>

            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">Nama Perusahaan</label>
              <input type="text" class="form-control" id="company_name" name="company_name" placeholder="" />
            </div>


            <div class="mb-3">
              <label class="form-label" for="basic-default-email">Kontak</label>
              <div class="input-group input-group-merge">
                <input
                  type="text"
                  id="email"
                  name="contact_number"
                  class="form-control"
                  placeholder=""
                  aria-label="john.doe"
                  aria-describedby="basic-default-email2"
                />
              </div>
        
            </div>         
            <button type="submit" class="btn btn-primary">Buat</button>
          </form>
        </div>
      </div>
    </div>
    @stop

 @push('script')
<script>
    $('._user').change(function() {
        let user_id = $(this).val()
        
        $.ajax({    
            url: "{{ route('vendor.get_address') }}",
            type: 'POST',
            data: {
                _token: "{{ csrf_token() }}",
                user_id: user_id
            },
            success: (response) => {
                if (response.success == true) {
                    $('._address').html(response.data).removeAttr('disabled')
                }
            }
        })
    })
</script>
@endpush