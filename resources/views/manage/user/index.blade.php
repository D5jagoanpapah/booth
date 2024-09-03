@extends('manage.layout')

@section('content')

    <h4 class="fw-bold py-3 ">Users</h4>
    <a href="{{ route('user.add') }}" class="btn btn-primary mb-4">Tambah Users</a>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <h5 class="card-header">User Tabel</h5>
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
            @foreach ($users as $user)
            <tr>
              <td><i class="fab fa-angular fa-lg text-danger me-3"></i>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              {{-- <td>
                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="Lilian Fuller">
                    <img src="{{ Storage::url($user->user_detail->ktp_image_url) }}"  class="rounded-circle" />
                  </li>
                </ul>
              </td>       --}}
              <td>
                <div class="d-flex gap-2">
                  <a class="btn btn-info btn-sm" href="{{ route('user.address.index', $user->id) }}"
                    ><i class="bx bx-home-alt me-1"></i> Alamat</a
                  >
                  <a class="btn btn-primary btn-sm" href="{{ route('user.edit', $user->id) }}"
                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                  >
                  <form action="{{ route('user.delete', $user->id) }}" method="post">
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