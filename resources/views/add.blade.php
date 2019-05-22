<!-- menghubungakan master -->
@extends('master')

<!-- judul halaman -->
@section('judul_hal', 'Add User')

{{-- isi konten --}}
@section('konten')

<div class="container">

        <form class="form-horizontal" action="/perpus/store" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
            <label class="control-label col-sm-2" for="email">Nama</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="email" placeholder="Enter Nama" name="Nama">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control" id="email" placeholder="Enter Email" name="Email">
                </div>
              </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Mobile</label>
                <div class="col-sm-8">
                     <input type="number" class="form-control" id="email" placeholder="Enter Mobile" name="Mobile">
                </div>
            </div>

          <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" class="btn btn-default">
            </div>
          </div>
        </form>
</div>
      





 {{-- <form class="form-horizontal" action="/perpus/store" method="POST">
    {{ csrf_field() }}
    <div class="form-group"> 
        Name <input type="text" name="name!" required="required"> <br>
        Email <input type="text" name="jabatan!" required="required"> <br>
        Mobile <input type="number" name="mobiel!" required="required"> <br>
         <input type="submit" value="Add">
    </div> 
 </form> --}}

@endsection