@extends('manage.layout')

@section('content')

    <h4 class="fw-bold py-3 ">Vendors</h4>
    <a href="{{ route('vendor.add') }}" class="btn btn-primary mb-4">Tambah Vendor</a>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <h5 class="card-header">Vendor Tabel</h5>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th>Nama Pemilik</th>
              <th>Nama Perusahaan</th>
              <th>Alamat</th>
              <th>Kontak</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach ($vendors as $vendor)
            <tr>
              <td>{{ $vendor->user->name }}</td>
              <td>{{ $vendor->company_name }}</td>
              <td>{{ $vendor->address->address . ', ' . $vendor->address->district . ', '. $vendor->address->city->type . '. '.  $vendor->address->city->name .', '. $vendor->address->province->name }}</td>
              <td>{{ $vendor->contact_number }}</td>
              <td>
                <div class="d-flex gap-2">
                  <a class="btn btn-primary btn-sm" href="{{ route('vendor.edit', $vendor->id) }}"
                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                  >
                  <form action="{{ route('vendor.delete', $vendor->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger btn-sm"><i class="bx bx-trash me-1"></i> Delete</button>
                  </form>
                </div>
                  </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
  
    <!--/ Basic Bootstrap Table -->
@stop