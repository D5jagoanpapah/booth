@extends('manage.layout')

@section('content')

    <h4 class="fw-bold py-3 ">Vendors</h4>
    <a href="{{ route('user.add') }}" class="btn btn-primary mb-4">Tambah Vendor</a>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <h5 class="card-header">Vendor Tabel</h5>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Email</th>

              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            {{-- @foreach ($users as $user) --}}
            <tr>
              <td><i class="fab fa-angular fa-lg text-danger me-3"></i></td>
              <td></td>
              <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href=""
                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                      >
                      <a class="dropdown-item" href="javascript:void(0);"
                        ><i class="bx bx-trash me-1"></i> Delete</a
                      >
                    </div>
                  </div>
              </td>
            </tr>
            {{-- @endforeach --}}
          </tbody>
        </table>
      </div>
  
    <!--/ Basic Bootstrap Table -->
@stop