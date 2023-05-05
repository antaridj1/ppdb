{{-- <table id="productsTable" class="table table-hover table-product" style="width:100%">
  <thead>
    <tr>
        <th class="py-0"></th>
      <th>No.</th>
      <th>Nama</th>
      <th>NIM</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $siswa)
    <tr>
        <td class="py-0"></td>
      <td>{{$loop->iteration}}</td>
      <td>{{$siswa->nama_lengkap}}</td>
      <td>{{$siswa->nisn}}</td>
    </tr>
    @endforeach


  </tbody>
</table> --}}



<table id="productsTable" class="table table-product" style="width:100%">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>NISN</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($data as $siswa)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$siswa->nama_lengkap}}</td>
            <td>{{$siswa->nisn}}</td>
        </tr>
      @empty
        <tr>
            <td colspan="3" style="text-align: center;">Data Tidak Ditemukan</td>
        </tr>
      @endforelse

    </tbody>
  </table>
