@extends('layout.app')
@section('title','PPDB')

@section('content')  

    <div class="content">                
        <!-- Small Card -->
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card card-default">
                    <div class="d-flex p-5">
                    <div class="icon-md bg-secondary rounded-circle mr-3">
                        <i class="mdi mdi-account-plus-outline"></i>
                    </div>
                    <div class="text-left">
                        <span class="h2 d-block">890</span>
                        <p>Calon Peserta Didik</p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card card-default">
                    <div class="d-flex p-5">
                        <div class="icon-md bg-success rounded-circle mr-3">
                            <i class="mdi mdi-table-edit"></i>
                        </div>
                        <div class="text-left">
                            <span class="h2 d-block">350</span>
                            <p>Wali Peserta Didik</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card card-default">
                    <div class="d-flex p-5">
                        <div class="icon-md bg-primary rounded-circle mr-3">
                            <i class="mdi mdi-content-save-edit-outline"></i>
                        </div>
                        <div class="text-left">
                            <span class="h2 d-block">1360</span>
                            <p>Sekolah</p>
                        </div>
                    </div>
                </div>
            </div>
          {{-- <div class="col-xl-3 col-md-6">
              <div class="card card-default">
                  <div class="d-flex p-5">
                  <div class="icon-md bg-info rounded-circle mr-3">
                      <i class="mdi mdi-bell"></i>
                  </div>
                  <div class="text-left">
                      <span class="h2 d-block">$8930</span>
                      <p>Monthly Revenue</p>
                  </div>
                  </div>
              </div>
          </div> --}}
        </div>

        <!-- Table Product -->
        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-header">
                        <h2>Pendaftaran Hari Ini</h2>
                        <div class="dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"> Yearly Chart
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="productsTable" class="table table-hover table-product" style="width:100%">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product Name</th>
                                    <th>ID</th>
                                    <th>Qty</th>
                                    <th>Variants</th>
                                    <th>Committed</th>
                                    <th>Daily Sale</th>
                                    <th>Sold</th>
                                    <th>In Stock</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="py-0">
                                        <img src="images/products/products-xs-01.jpg" alt="Product Image">
                                    </td>
                                    <td>Coach Swagger</td>
                                    <td>24541</td>
                                    <td>27</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>
                                        <div id="tbl-chart-01"></div>
                                    </td>
                                    <td>4</td>
                                    <td>18</td>
                                    <td>
                                        <div class="dropdown">
                                        <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot class="border-top">
                                <tr>
                                <td><a href="#" class="text-uppercase">See All</a></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

                           <!-- Card Offcanvas -->
                        <div class="card card-offcanvas" id="contact-off" >
                            <div class="card-header">
                              <h2>Contacts</h2>
                              <a href="#" class="btn btn-primary btn-pill px-4">Add New</a>
                            </div>
                            <div class="card-body">
      
                              <div class="mb-4">
                                <input type="text" class="form-control form-control-lg form-control-secondary rounded-0" placeholder="Search contacts...">
                              </div>
      
                              <div class="media media-sm">
                                <div class="media-sm-wrapper">
                                  <a href="user-profile.html">
                                    <img src="images/user/user-sm-01.jpg" alt="User Image">
                                    <span class="active bg-primary"></span>
                                  </a>
                                </div>
                                <div class="media-body">
                                  <a href="user-profile.html">
                                    <span class="title">Selena Wagner</span>
                                    <span class="discribe">Designer</span>
                                  </a>
                                </div>
                              </div>
      
                              <div class="media media-sm">
                                <div class="media-sm-wrapper">
                                  <a href="user-profile.html">
                                    <img src="images/user/user-sm-02.jpg" alt="User Image">
                                    <span class="active bg-primary"></span>
                                  </a>
                                </div>
                                <div class="media-body">
                                  <a href="user-profile.html">
                                    <span class="title">Walter Reuter</span>
                                    <span>Developer</span>
                                  </a>
                                </div>
                              </div>
      
                              <div class="media media-sm">
                                <div class="media-sm-wrapper">
                                  <a href="user-profile.html">
                                    <img src="images/user/user-sm-03.jpg" alt="User Image">
                                  </a>
                                </div>
                                <div class="media-body">
                                  <a href="user-profile.html">
                                    <span class="title">Larissa Gebhardt</span>
                                    <span>Cyber Punk</span>
                                  </a>
                                </div>
                              </div>
      
                              <div class="media media-sm">
                                <div class="media-sm-wrapper">
                                  <a href="user-profile.html">
                                    <img src="images/user/user-sm-04.jpg" alt="User Image">
                                  </a>
      
                                </div>
                                <div class="media-body">
                                  <a href="user-profile.html">
                                    <span class="title">Albrecht Straub</span>
                                    <span>Photographer</span>
                                  </a>
                                </div>
                              </div>
      
                              <div class="media media-sm">
                                <div class="media-sm-wrapper">
                                  <a href="user-profile.html">
                                    <img src="images/user/user-sm-05.jpg" alt="User Image">
                                    <span class="active bg-danger"></span>
                                  </a>
                                </div>
                                <div class="media-body">
                                  <a href="user-profile.html">
                                    <span class="title">Leopold Ebert</span>
                                    <span>Fashion Designer</span>
                                  </a>
                                </div>
                              </div>
      
                              <div class="media media-sm">
                                <div class="media-sm-wrapper">
                                  <a href="user-profile.html">
                                    <img src="images/user/user-sm-06.jpg" alt="User Image">
                                    <span class="active bg-primary"></span>
                                  </a>
                                </div>
                                <div class="media-body">
                                  <a href="user-profile.html">
                                    <span class="title">Selena Wagner</span>
                                    <span>Photographer</span>
                                  </a>
                                </div>
                              </div>
      
                            </div>
                          </div>
      

  @endsection