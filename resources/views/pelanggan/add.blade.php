@extends('layouts.app')

@section('content')
  <div class="container">
 
    <h3>Tambah Data Pelanggan</h3>
       <form action="{{ url('/pelanggan') }}" method="POST">
       @csrf 
       <div class="mb-3">
          <label>NO</label>
          <input type="text" class="form-control"
name="pel_id">
       </div>
       <div class="mb-3">
          <label>NAMA PELANGGAN</label>
          <input type="text" class="form-control"
name="pel_nama">
       </div>
       <div class="mb-3">
         <label>NIK</label>
         <input type="text" class="form-control"
name="pel_ktp">
       </div>
       <div class="mb-3">
         <label>GOLONGAN</label>
         <input type="text" class="form-control"
name="pel_id_gol">
       </div>
       <div class="mb-3">
         <label>NO. HP</label>
         <input type="text" class="form-control"
name="pel_hp">
       </div>
       <div class="mb-3">
         <label>NO. SERI</label>
         <input type="text" class="form-control"
name="pel_seri">
       </div>
       <div class="mb-3">
         <label>NO. METERAN</label>
         <input type="text" class="form-control"
name="pel_meteran">
       </div>
       <div class="mb-3">
         <label>STATUS</label>
         <input type="text" class="form-control"
name="pel_aktif">
       </div>
       <div class="mb-3">
         <label>ROLE</label>
         <input type="text" class="form-control"
name="pel_id_user">
       </div>
       <div class="mb-3">
         <label>ALAMAT</label>
         <input type="text" class="form-control"
name="pel_alamat">
       </div>
       <div class="mb-3">
         <input type="submit" value="SIMPAN">
       </div>
     </form>
  </div>

  @endsection
