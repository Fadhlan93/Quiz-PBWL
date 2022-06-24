@extends('layouts.app')

@section('content') 
   <div class="container"> 
 
       <h3>
          Daftar Pelanggan
          <a href="{{ url('pelanggan/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>       
       </h3> 
 
       <table class="table table-bordered"> 
           <tr> 
              <th>NO</th> 
              <th>NAMA PELANGGAN</th> 
              <th>NIK</th> 
              <th>GOLONGAN</th>
              <th>NO. HP</th>
              <th>NO. SERI</th>
              <th>NO. METERAN</th> 
              <th>STATUS</th>
              <th>ROLE</th> 
              <th>ALAMAT</th> 
              <th>EDIT</th>
              <th>DELETE</th>  
           </tr> 
           @foreach ($rows as $row) 
               <tr> 
                  <td>{{ $row->pel_id }}</td> 
                  <td>{{ $row->pel_nama }}</td> 
                  <td>{{ $row->pel_ktp }}</td>
                  <td>{{ $row->pel_id_gol }}</td> 
                  <td>{{ $row->pel_hp }}</td>
                  <td>{{ $row->pel_seri }}</td>
                  <td>{{ $row->pel_meteran }}</td>
                  <td>{{ $row->pel_aktif }}</td>
                  <td>{{ $row->pel_id_user }}</td>
                  <td>{{ $row->pel_alamat }}</td>
                  <td><a href="{{ url('pelanggan/' . $row->pel_id . '/edit') }}" class="btn btn-primary btn-sm">Edit</a></td>
                  <td>
                     <form action="{{ url('pelanggan/' . $row->pel_id) }}"
                     method="POST">
                     @method('DELETE')
                     @csrf
                    <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                  </td> 
               </tr> 
           @endforeach 
       </table> 
   </div>

@endsection