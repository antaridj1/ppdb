<div class="col-xl-12">
                    <!-- Notifications -->
                    <div class="card card-default">
                    <div class="card-header">
                        <h2>Informasi</h2>
                    </div>

                    <div class="card-body">
                        <ul class="list-group">
                            @foreach ($pengumumans as $pengumuman)
                            <li class="list-group-item list-group-item-action">
                                <div class="media media-sm mb-0">
                                <div class="media-sm-wrapper bg-primary">
                                    <i class="mdi mdi-star-outline"></i>
                                </div>
                                <div class="media-body">
                                    <span class="title">{{$pengumuman->judul}}</span>
                                    <p>{{$pengumuman->pengumuman}}
                                    </p>
                                </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    </div>
                </div>
