<table id="productsTable" class="table table-product" style="width:100%">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Telp</th>
        <th>Email</th>
        <th>Kuota</th>
        <th class="text-center">Status</th>
        <th class="text-center">Aksi</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @forelse ($sekolahs as $sekolah)
        <tr><td >{{$loop->iteration}}</td>
            
            <td>{{$sekolah->nama_sekolah}}</td>
            <td>{{$sekolah->tlp_sekolah}}</td>
            <td>{{$sekolah->email}}</td>
            <td>{{$sekolah->kuota}}</td>
            <td class="text-center"> <span class="badge badge-pill {{$sekolah->status_badge}}">{{$sekolah->status_string}}</span></td>
            <td class="text-center">
              <div class="dropdown">
                <a class="dropdown-toggle icon-burger-mini" style="color:black" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="{{route('admin.sekolah.show',$sekolah->id)}}">Detail</a>
                  <a class="dropdown-item" href="{{route('admin.sekolah.edit',$sekolah->id)}}">Edit</a>
                  <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal_{{$sekolah->id}}">

                    Hapus

                  </a>

                </div>
              </div>
            </td>
            <td class="py-0"></td>
            @include('sekolah._modal')
            {{-- <td class="text-center">
                <a href="{{route('admin.sekolah.show',$sekolah->id)}}" class="btn btn-sm btn-outline-info">
                    <i class="mdi mdi-information"></i>
                </a>
                <a href="{{route('admin.sekolah.edit',$sekolah->id)}}" class="btn btn-sm btn-outline-primary">
                    <i class="mdi mdi-pencil"></i>
                </a>
                <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deletesekolahModal_{{$sekolah->id}}">
                    <i class="mdi mdi-trash-can"></i>
                </button>

            </td> --}}
        </tr>
      @empty

      @endforelse

    </tbody>
  </table>
