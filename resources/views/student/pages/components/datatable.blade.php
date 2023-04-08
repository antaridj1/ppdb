<table id="productsTable" class="table table-hover table-product" style="width:100%">
  <thead>
    <tr>
      <th>No.</th>
      <th>Nama</th>
      <th>NIM</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $siswa)
    <tr>
      <td class="py-0">{{$loop->iteration}}</td>
      <td>{{$siswa->nama_lengkap}}</td>
      <td>{{$siswa->nisn}}</td>
    </tr>
    @endforeach


  </tbody>
</table>
