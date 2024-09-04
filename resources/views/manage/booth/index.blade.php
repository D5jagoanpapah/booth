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
              <th>Nama</th>
              <th>Harga</th>
              <th>Ukuran</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach ($booths as $booth)
            <tr>
              <td>{{ $booth->vendor_id }}</td>
              <td>{{ $booth->name }}</td>
              <td>{{ $booth->price }}</td>
              <td>{{ $booth->size }}</td>
            <td>
              <div class="d-flex gap-2">
                <a class="btn btn-primary btn-sm" href="{{ route('booth.edit', $booth->id) }}"
                  ><i class="bx bx-edit-alt me-1"></i> Edit</a
                >
                <form action="{{ route('booth.delete', $booth->id) }}" method="post">
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger btn-sm"><i class="bx bx-trash me-1"></i> Delete</button>
                </form>
              </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
  
    <!--/ Basic Bootstrap Table -->
@stop