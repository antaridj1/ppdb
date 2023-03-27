<table id="productsTable" class="table table-hover table-product" style="width:100%">
    <thead>
      <tr>
        <th>Foto</th>
        <th>Nama</th>
        <th>Sekolah</th>
        <th>Tanggal Daftar</th>
        <th>Wali</th>
        <th>Telp</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @forelse ($siswas as $siswa)
        <tr>
            <td class="py-0">
                <img src="images/products/products-xs-01.jpg" alt="Product Image">
            </td>
            <td>{{$siswa->dataPribadi->nama_lengkap}}</td>
            <td>{{$siswa->siswa->sekolah->nama_sekolah}}</td>
            <td>{{$siswa->created_at->format('dd/m/yyyy')}}</td>
            <td>{{$siswa->dataWali->nama_wali}}</td>
            <td>{{$siswa->siswa->no_hp}}</td>
            <td></td>
        </tr>
      @empty
          
      @endforelse
  
    </tbody>
  </table>