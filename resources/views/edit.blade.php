<!-- menghubungakan master -->
@extends('master')

<!-- judul halaman -->
@section('judul_hal', 'Edit User')

{{-- isi konten --}}
@section('konten')

<div class="container">
    @foreach($nama as $u)
        <form class="form-horizontal" action="/perpus/update" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
            <label class="control-label col-sm-2" for="email"></label>
                    <div class="col-sm-8">
                    <input type="hidden" class="form-control" name="Id" value="{{ $u->id }}">
                    </div>
            </div>

            <div class="form-group">
            <label class="control-label col-sm-2" for="email">Nama</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="email" name="Nama" value="{{ $u->name }}">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control" id="email" name="Email" value="{{ $u->email }}">
                </div>
              </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Mobile</label>
                <div class="col-sm-8">
                     <input type="number" class="form-control" id="email" name="Mobile" value="{{ $u->mobile }}">
                </div>
            </div>

          <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" class="btn btn-default">
            </div>
          </div>

        </form>
    @endforeach

</div>
@endsection