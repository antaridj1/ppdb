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
      @forelse ($peserta_didiks as $peserta_didik)
        <tr>
            <td class="py-0">
                <img src="images/products/products-xs-01.jpg" alt="Product Image">
            </td>
            <td>{{$peserta_didik->nama_lengkap}}</td>
            <td>{{$peserta_didik->sekolah->nama_sekolah}}</td>
            <td>{{$peserta_didik->created_at->format('dd/m/yyyy')}}</td>
            <td>{{$peserta_didik->dataWali->nama_wali}}</td>
            <td>{{$peserta_didik->no_hp}}</td>
            <td></td>
        </tr>
      @empty
          
      @endforelse
  
    </tbody>
  </table>