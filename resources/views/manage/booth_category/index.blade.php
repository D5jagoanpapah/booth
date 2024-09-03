@extends('manage.layout')

@section('content')

    <h4 class="fw-bold py-3 ">Categories</h4>
    <a href="{{ route('booth_category.add') }}" class="btn btn-primary mb-4">Tambah Category</a>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <h5 class="card-header">Category Booth Tabel</h5>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th>Nama Category</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach ($categories as $category)
            <tr>
              <td>{{ $category->name }}</td>
              <td>
                <div class="d-flex gap-2">
                  <a class="btn btn-primary btn-sm" href="{{ route('booth_category.edit', $category->id) }}"
                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                  >
                  <form action="{{ route('booth_category.delete', $category->id) }}" method="post">
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