<table id="productsTable" class="table table-hover table-product" style="width:100%">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Sekolah</th>
        <th>Tanggal Daftar</th>
        <th>Wali</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($peserta_didiks as $peserta_didik)
        <tr>
            <td>{{$peserta_didik->nama_lengkap}}</td>
            <td>{{$peserta_didik->sekolah->nama_sekolah}}</td>
            <td>{{date('d-m-Y', strtotime($peserta_didik->created_at))}}</td>
            <td>{{$peserta_didik->dataAyah->nama_ayah}}</td>
            <td>{{$peserta_didik->siswa->email}}</td>
            <td></td>
        </tr>
      @empty

      @endforelse

    </tbody>
  </table>
