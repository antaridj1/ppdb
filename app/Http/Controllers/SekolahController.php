<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function landingPageSekolah()
    {
        $data = Sekolah::where('id', request('id'))->get();

        return view('student.pages.landing-sdn', $data);
    }

    public function index(){
        $sekolahs = Sekolah::all();

        return view('sekolah.index', compact('sekolahs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sekolah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_sekolah' => 'required',
            'tlp_sekolah' => 'required',
            'alamat_sekolah' => 'required',
            'email' => 'required|email|unique:sekolah',
            'gambar' => 'image|mimes:jpg,png,jpeg',
            'file_persyaratan' => 'mimes:pdf|max:5120',
            'password' => 'required|min:6'
        ]);

        $image_path = $request->file('gambar')->store('image', 'public');
        $file_path = $request->file('file_persyaratan')->store('file/persyaratan', 'public');

        Sekolah::create([
            'nama_sekolah' => $request->nama_sekolah,
            'tlp_sekolah' => $request->tlp_sekolah,
            'alamat_sekolah' => $request->alamat_sekolah,
            'email' => $request->email,
            'gambar' => $image_path,
            'file_persyaratan' => $file_path,
            'password' => $request->password
            
        ]);

        return redirect('admin/sekolah')
            ->with('status','success')
            ->with('message','Data berhasil ditambah');
    }

    public function show(Sekolah $sekolah)
    {
        return view('sekolah.show', compact('sekolah'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sekolah  $sekolah
     * @return \Illuminate\Http\Response
     */
    public function edit(Sekolah $sekolah)
    {
        return view('sekolah.edit',compact('sekolah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sekolah  $sekolah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sekolah $sekolah)
    {
        if($request->file('gambar')){
            $image_path = $request->file('gambar')->store('image', 'public');
        } else {
            $image_path = $sekolah->gambar;
        }

        if($request->file('file_persyaratan')){
            $file_path = $request->file('file_persyaratan')->store('file', 'public');
        } else {
            $file_path = $sekolah->file_persyaratan;
        }

        if($request->password){
            $request->validate([
                'nama_sekolah' => 'required',
                'tlp_sekolah' => 'required',
                'alamat_sekolah' => 'required',
                'email' => 'required|email',
                'password' => 'min:6'
            ]);
    
            $sekolah->update([
                'nama_sekolah' => $request->nama_sekolah,
                'tlp_sekolah' => $request->tlp_sekolah,
                'alamat_sekolah' => $request->alamat_sekolah,
                'email' => $request->email,
                'gambar' => $image_path,
                'file_persyaratan' => $file_path,
                'password' => $request->password
            ]);
        } else {
            $request->validate([
                'nama_sekolah' => 'required',
                'tlp_sekolah' => 'required',
                'alamat_sekolah' => 'required',
                'email' => 'required|email',
            ]);
    
            $sekolah->update([
                'nama_sekolah' => $request->nama_sekolah,
                'tlp_sekolah' => $request->tlp_sekolah,
                'alamat_sekolah' => $request->alamat_sekolah,
                'email' => $request->email,
                'gambar' => $image_path,
                'file_persyaratan' => $file_path,
            ]);
        }

        return redirect('admin/sekolah')
            ->with('status','success')
            ->with('message','Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sekolah  $sekolah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sekolah $sekolah)
    {
        $sekolah->delete();

        return redirect('admin/sekolah')
            ->with('status','success')
            ->with('message','Data berhasil dihapus');
    }
}
