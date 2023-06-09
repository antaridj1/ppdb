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
            'kuota' => 'required|numeric|min:0',
            'email' => 'required|email|unique:sekolah',
            'gambar' => 'required|image|mimes:jpg,png,jpeg',
            'password' => 'required|min:6'
        ]);

        $image_path = $request->file('gambar')->store('image', 'public');

        Sekolah::create([
            'nama_sekolah' => $request->nama_sekolah,
            'tlp_sekolah' => $request->tlp_sekolah,
            'alamat_sekolah' => $request->alamat_sekolah,
            'email' => $request->email,
            'kuota' => $request->kuota,
            'gambar' => $image_path,
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

        if($request->password){
            $request->validate([
                'nama_sekolah' => 'required',
                'tlp_sekolah' => 'required',
                'kuota' => 'required|numeric|min:0',
                'alamat_sekolah' => 'required',
                'email' => 'required|email',
                'password' => 'min:6'
            ]);
    
            $sekolah->update([
                'nama_sekolah' => $request->nama_sekolah,
                'tlp_sekolah' => $request->tlp_sekolah,
                'alamat_sekolah' => $request->alamat_sekolah,
                'email' => $request->email,
                'kuota' => $request->kuota,
                'gambar' => $image_path,
                'password' => $request->password
            ]);
        } else {
            $request->validate([
                'nama_sekolah' => 'required',
                'tlp_sekolah' => 'required',
                'alamat_sekolah' => 'required',
                'email' => 'required|email',
                'kuota' => 'required|numeric|min:0',
            ]);
    
            $sekolah->update([
                'nama_sekolah' => $request->nama_sekolah,
                'tlp_sekolah' => $request->tlp_sekolah,
                'alamat_sekolah' => $request->alamat_sekolah,
                'email' => $request->email,
                'kuota' => $request->kuota,
                'gambar' => $image_path,
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
