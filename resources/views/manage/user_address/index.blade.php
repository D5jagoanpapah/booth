@extends('manage.layout')

@section('content')
    <h4 class="fw-bold py-3 ">Alamat</h4>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5>Tambah Alamat</h5>

                    <form action="" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="col-form-label">Provinsi</label>
                            <select name="" id="" class="form-select _province">
                                @foreach($provinces as $province)
                                <option value="{{ $province->id }}">{{ $province->name }}</option>
                                @endforeach
                            </select>
                        </div>
    
                        <div class="mb-3">
                            <label for="" class="col-form-label">Kota/Kabupaten</label>
                            <select name="" id="" class="form-select _city" disabled>
                                
                            </select>
                        </div>
    
                        <div class="mb-3">
                            <label for="" class="col-form-label">Kecamatan</label>
                            <input type="text" class="form-control">
                        </div>
    
                        <div class="mb-3">
                            <label for="" class="col-form-label">Alamat Lengkap</label>
                            <textarea class="form-control" name="" id="" rows="4"></textarea>
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