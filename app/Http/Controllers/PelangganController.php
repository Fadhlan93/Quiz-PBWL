<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;  

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Pelanggan::all();
        return view('pelanggan.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelanggan.add'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [ 
               'pel_id' => 'bail|required|unique:tb_pelanggan', 
               'pel_nama' => 'required',
               'pel_ktp' => 'required',
               'pel_id_gol' => 'required',
               'pel_hp' => 'required',
               'pel_seri' => 'required',
               'pel_meteran' => 'required',
               'pel_aktif' => 'required',
               'pel_id_user' => 'required',
               'pel_alamat' => 'required',
               'pel_no' => 'required'
            ], 
            [ 
               'pel_id.required' => 'No wajib diisi', 
               'pel_id.unique' => 'No sudah ada', 
               'pel_nama.required' => 'Nama wajib diisi', 
               'pel_ktp.required' => 'NIK wajib diisi', 
               'pel_ktp.unique' => 'NIK sudah ada', 
               'pel_id_gol.required' => 'Golongan wajib diisi',
               'pel_hp.required' => 'No HP wajib diisi', 
               'pel_hp.unique' => 'No HP sudah ada', 
               'pel_seri.required' => 'No Seri wajib diisi', 
               'pel_meteran.required' => 'No Meteran wajib diisi',
               'pel_aktif.required' => 'Status wajib diisi',
               'pel_id_user.required' => 'Role wajib diisi',
               'pel_alamat.required' => 'Alamat wajib diisi',
               'pel_no.required' => 'No wajib diisi',  
            ]
        ); 
             
        Pelanggan::create([ 
                 'pel_id' => $request->pel_id, 
                 'pel_nama' => $request->pel_nama,
                 'pel_ktp' => $request->pel_ktp, 
                 'pel_id_gol' => $request->pel_id_gol,
                 'pel_hp' => $request->pel_hp,
                 'pel_seri' => $request->pel_seri,
                 'pel_meteran' => $request->pel_meteran,
                 'pel_aktif' => $request->pel_aktif,
                 'pel_id_user' => $request->pel_id_aktif,
                 'pel_alamat' => $request->pel_alamat,
                 'pel_no' => $request->pel_no,
            ]); 

            return redirect('pelanggan');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
             [
                'pel_id' => 'bail|required',
                'pel_nama' => 'required',
                'pel_ktp' => 'required',
                'pel_id_gol' => 'required',
                'pel_hp' => 'required',
                'pel_seri' => 'required',
                'pel_meteran' => 'required',
                'pel_aktif' => 'required',
                'pel_id_user' => 'required',
                'pel_alamat' => 'required',
                'pel_no' => 'required'
             ],
             [
                'pel_id.required' => 'No wajib diisi',
                'pel_nama.required' => 'Nama wajib diisi',
                'pel_ktp.required' => 'NIK wajib diisi',
                'pel_id_gol.required' => 'Golongan wajib diisi',
                'pel_hp.required' => 'No HP wajib diisi',
                'pel_seri.required' => 'No Seri wajib diisi',
                'pel_meteran.required' => 'No Meteran wajib diisi',
                'pel_aktif.required' => 'Status wajib diisi',
                'pel_id_user.required' => 'Role wajib diisi',
                'pel_alamat.required' => 'Alamat wajib diisi',
                'pel_no.required' => 'No wajib diisi'
             ]
             );
            
                $row = Pelanggan::findOrFail($id);
                $row->update([
                'pel_id' => $request->pel_id,
                'pel_nama' => $request->pel_nama,
                'pel_ktp' => $request->pel_ktp,
                'pel_id_gol' => $request->pel_id_gol,
                'pel_hp' => $request->pel_hp,
                'pel_seri' => $request->pel_seri,
                'pel_meteran' => $request->pel_meteran,
                'pel_aktif' => $request->pel_aktif,
                'pel_id_user' => $request->pel_id_user,
                'pel_alamat' => $request->pel_alamat,
                'pel_no' => $request->pel_no
             ]);
                
             return redirect('pelanggan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Pelanggan::findOrFail($id); 
        $row->delete();

        return redirect('pelanggan');
    }
}
