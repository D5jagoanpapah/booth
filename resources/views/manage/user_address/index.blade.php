@extends('manage.layout')

@section('content')
    <h4 class="fw-bold py-3 ">Alamat</h4>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5>Tambah Alamat</h5>

                    <form action="{{ route('user.address.store', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="col-form-label">Provinsi</label>
                            <select name="province_id" id="" class="form-select _province">
                                @foreach($provinces as $province)
                                <option value="{{ $province->id }}">{{ $province->name }}</option>
                                @endforeach
                            </select>
                        </div>
    
                        <div class="mb-3">
                            <label for="" class="col-form-label">Kota/Kabupaten</label>
                            <select name="city_id" id="" class="form-select _city" disabled>
                                
                            </select>
                        </div>
    
                        <div class="mb-3">
                            <label for="" class="col-form-label">Kecamatan</label>
                            <input type="text" class="form-control" name="district">
                        </div>
                        
                        <div class="mb-3">
                            <label for="" class="col-form-label">Alamat Lengkap</label>
                            <textarea class="form-control" name="address" id="" rows="4"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="" class="col-form-label">Kode Pos</label>
                            <input type="text" class="form-control" name="postal_code">
                        </div>

                        <div class="mb-3">
                            <label for="" class="col-form-label">No Telepon</label>
                            <input type="text" class="form-control" name="phone_number">
                        </div>

                        <div class="mb-3">
                            <input type="checkbox" name="is_primary" id="isPrimary">
                            <label for="isPrimary" class="col-form-label">Tandai Sebagai Alamat Utama</label>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </form>
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