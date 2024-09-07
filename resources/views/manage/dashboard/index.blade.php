@extends('manage.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-4 order-0">
      @if (auth()->user()->user_detail->ktp_is_verified == '0')
      <div class="card">
        <div class="d-flex align-items-end row">
          <div class="col-sm-7">
            <div class="card-body">
              <h5 class="card-title text-primary">KTP Belum Diverifikasi</h5>
              <p class="mb-4">
                Silahkan Upload KTP anda, dan menunggu verifikasi dari admin!
              </p>

              <a href="{{ route('app.dashboard.upload-ktp') }}" class="btn btn-sm btn-outline-primary">Upload KTP</a>
            </div>
          </div>
          <div class="col-sm-5 text-center text-sm-left">
            <div class="card-body pb-0 px-0 px-md-4">
              <img
                src="{{ asset('assets/manage/assets/img/illustrations/man-with-laptop-light.png') }}"
                height="140"
                alt="View Badge User"
                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                data-app-light-img="illustrations/man-with-laptop-light.png"
              />
            </div>
          </div>
        </div>
      </div>
      @endif
    </div>
@stop