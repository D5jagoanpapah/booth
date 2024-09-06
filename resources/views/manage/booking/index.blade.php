@extends('manage.layout')

@section('content')

    <h4 class="fw-bold py-3 ">Booking</h4>
    {{-- <a href="booth/add" class="btn btn-primary mb-4">Data Booth</a> --}}

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <h5 class="card-header">Booking Tabel</h5>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th>Nama Pembeli</th>
              <th>Nama Booth</th>
              <th>Alamat</th>
              <th>Tanggal Boking</th>
              <th>Durasi</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            {{-- @foreach ($booths as $booth) --}}
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            <td>
              <div class="d-flex gap-2">
                <a class="btn btn-success btn-sm" href=""
                  ><i class='bx bx-shopping-bag'></i> Manage</a
                >
                <form action="" method="post">
                  {{-- @csrf --}}
                  {{-- @method('delete') --}}
                  <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="bx bx-trash me-1"></i> Batal</button>
                </form>
              </div>
              </td>
            </tr>
            {{-- @endforeach --}}
          </tbody>
        </table>
      </div>
  
    <!--/ Basic Bootstrap Table -->

    {{-- @foreach ($booths as $booth)
    <div class="modal fade" id="deleteModal{{ $booth->id }}" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Konfirmasi Hapus</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Apakah Anda yakin ingin menghapus data {{ $booth->name }}?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <form action="{{ route('booth.delete', $booth->id) }}" method="post">
              @csrf
              @method('delete')
              <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    @endforeach --}}

@stop