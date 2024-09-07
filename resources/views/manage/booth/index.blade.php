@extends('manage.layout')

@section('content')

    <h4 class="fw-bold py-3 ">Booth</h4>
    <a href="booth/add" class="btn btn-primary mb-4">Tambah Booth</a>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <h5 class="card-header">Booth Tabel</h5>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th>Vendor</th>
              <th>Kategori</th>
              <th>Nama</th>
              <th>Harga</th>
              <th>Stok</th>
              <th>Ukuran</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach ($booths as $booth)
            <tr>
              <td>{{ $booth->vendor->company_name }}</td>
              <td>{{ $booth->category->name }}</td>
              <td>{{ $booth->name }}</td>
              <td>{{ $booth->price }}</td>
              <td>{{ $booth->stok }}</td>
              <td>{{ $booth->size }}</td>
            <td>
              <div class="d-flex gap-2">
                <a class="btn btn-primary btn-sm" href="{{ route('booth.edit', $booth->id) }}"
                  ><i class="bx bx-edit-alt me-1"></i> Edit</a
                >
                <form action="{{ route('booth.delete', $booth->id) }}" method="post">
                  @csrf
                  @method('delete')
                  <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $booth->id }}"><i class="bx bx-trash me-1"></i> Hapus</button>
                </form>
              </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
  
    <!--/ Basic Bootstrap Table -->

    @foreach ($booths as $booth)
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
    @endforeach

@stop