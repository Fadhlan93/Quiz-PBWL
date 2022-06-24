@extends('layouts.app')

@section('content') 
   <div class="container"> 
 
       <h3>
          Daftar Golongan
          <a href="{{ url('golongan/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>       
       </h3> 
 
       <table class="table table-bordered"> 
           <tr> 
              <th>NO</th> 
              <th>KODE GOLONGAN</th> 
              <th>NAMA GOLONGAN</th> 
              <th>EDIT</th>
              <th>DELETE</th> 
           </tr> 
           @foreach ($rows as $row) 
               <tr> 
                  <td>{{ $row->gol_id }}</td> 
                  <td>{{ $row->gol_kode }}</td> 
                  <td>{{ $row->gol_nama }}</td> 
                  <td><a href="{{ url('golongan/' . $row->gol_id . '/edit') }}" class="btn btn-primary btn-sm">Edit</a></td>
                  <td>
                     <form action="{{ url('golongan/' . $row->gol_id) }}"
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