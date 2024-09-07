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
              <th>KTP</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach ($users as $user)
            <tr>
              <td><i class="fab fa-angular fa-lg text-danger me-3"></i>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>
                @if($user->user_detail?->ktp_image_url)
               <div class="d-flex flex-column">
                <a href="{{ Storage::url($user->user_detail->ktp_image_url) }}" target="_blank">
                  <img src="{{ Storage::url($user->user_detail->ktp_image_url) }}" width="100" alt="">
                </a>
               <div class="d-flex align-items-center gap-2 mt-2">
                @if ($user->user_detail->ktp_is_verified == '0')
                <a href="{{ route('user.verify_ktp', [$user->id, 'acc']) }}" class="btn btn-success btn-sm" onclick="return confirm('Apakah anda yakin untuk Acc KTP ini?')">Acc</a>
                @else
                <span class="text-success"><i class="bx bx-check-circle"></i> Acc</span>
                @endif
                <a href="{{ route('user.verify_ktp', [$user->id, 'reject']) }}" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin untuk Reject KTP ini?')">Reject</a>
               </div>
               </div>
                @else
                <span class="text-danger"><i class="bx bx-close"></i> Belum upload</span>
                @endif
              </td>
              <td>
                <div class="d-flex gap-2">
                  <a class="btn btn-info btn-sm" href="{{ route('user.address.index', $user->id) }}"
                    ><i class="bx bx-home-alt me-1"></i> Alamat</a
                  >
                  <a class="btn btn-primary btn-sm" href="{{ route('user.edit', $user->id) }}"
                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                  >
                  <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $user->id }}">
                    <i class="bx bx-trash me-1"></i> Hapus
                  </button>
              
                  <!-- Modal -->
                  <div class="modal fade" id="deleteModal-{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Hapus User</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Are you sure you want to delete this user?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                          <form action="{{ route('user.delete', $user->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                          </form>
                        </div>
                      </div>
                    </div>
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