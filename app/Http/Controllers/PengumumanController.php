<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumuman = Pengumuman::all();

        return view('pengumuman.index', compact('pengumuman'));
    }

    public function create()
    {
        return view('pengumuman.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'pengumuman' => 'required',
        ]);

        Pengumuman::create([
            'judul' => $request->judul,
            'pengumuman' => $request->pengumuman,
        ]);

        return redirect('admin/pengumuman')
            ->with('status','success')
            ->with('message','Data berhasil ditambah');
    }

    public function edit(Pengumuman $pengumuman)
    {
        return view('pengumuman.edit',compact('pengumuman'));
    }

    public function update(Request $request, Pengumuman $pengumuman)
    {
        $request->validate([
            'judul' => 'required',
            'pengumuman' => 'required',
        ]);

        $pengumuman->update([
            'judul' => $request->judul,
            'pengumuman' => $request->pengumuman,
        ]);

        return redirect('admin/pengumuman')
            ->with('status','success')
            ->with('message','Data berhasil diedit');
    }

    public function destroy(Pengumuman $pengumuman)
    {
        $pengumuman->delete();

        return redirect('admin/pengumuman')
            ->with('status','success')
            ->with('message','Pengumuman berhasil dihapus');
    }
}
