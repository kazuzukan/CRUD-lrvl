<!-- menghubungakan master -->
@extends('master')

<!-- judul halaman -->
@section('judul_hal', 'User List')

{{-- isi konten --}}
@section('konten')

<table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Option </th>
          </tr>
        </thead>

        {{-- isian --}}
        <tbody>
          @foreach($user as $u)
          <tr>
          <td>{{ $u->name }}</td>
          <td>{{ $u->email }}</td>
          <td>{{ $u->mobile }}</td>
          <td>
              <a href="/perpus/edit/{{ $u->id }}"> Edit </a>
              |
              <a href="/perpus/delete/{{ $u->id }}"> Delete </a>
          </td>
          </tr>
         @endforeach
        </tbody>
</table>

@endsection
