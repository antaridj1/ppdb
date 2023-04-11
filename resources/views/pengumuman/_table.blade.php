<table id="productsTable" class="table table-product" style="width:100%">
    <thead>
      <tr>
        <th></th>
        <th>No.</th>
        <th>Judul</th>
        <th class="text-center">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($pengumuman as $pengumuman)
        <tr><td class="py-0"></td>
            <td>{{$loop->iteration}}</td>
            <td>{{$pengumuman->judul}}</td>
            <td class="text-center">
              <div class="dropdown">
                <a class="dropdown-toggle icon-burger-mini" style="color:black" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="{{route('admin.pengumuman.edit',$pengumuman->id)}}">Edit</a>
                  <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal_{{$pengumuman->id}}">

                    Hapus

                  </a>

                </div>
              </div>
            </td>
            @include('pengumuman._modal')
        </tr>
      @empty

      @endforelse

    </tbody>
  </table>
