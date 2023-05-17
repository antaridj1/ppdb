@extends('layout.app')
@section('title','PPDB')

@section('content')  

    <div class="content">                
        <!-- Table Product -->
        <div class="row">
            <div class="col-12">
                <div class="card card-default">
                    <div class="card-header">
                        <h2>Calon Peserta Didik</h2>
                        @auth('sekolah')
                        <div class="d-flex justify-content-end">
                            <div id="updateCounter" class="mr-2 d-none">0/0</div>
                            <button class="ladda-button btn btn-primary btn-ladda" id="updateButton" data-kuota="{{auth()->guard('sekolah')->user()->kuota}}" data-style="expand-left">
                                <span class="ladda-label">Terima Calon Peserta Didik</span>
                                <span class="ladda-spinner"></span>
                            </button>
                        </div>
                        
                          
                        @endauth
                    </div>
                    <div class="card-body">
                       @include('peserta-didik._table')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $('#checkAll').on('change', function() {
                $('.check').prop('checked', $(this).is(':checked'));
            });

            $('.check').on('change', function() {
                if ($('.check:checked').length === $('.check').length) {
                    $('#checkAll').prop('checked', true);
                } else {
                    $('#checkAll').prop('checked', false);
                }
            });

            // Inisialisasi Ladda Button
            var laddaButton = Ladda.create(document.querySelector('#updateButton'));

            $("#updateButton").click(async function() {
                var checkedValues = $("#productsTable input[name='checked']:checked").map(function() {
                    return this.id;
                }).get();
                var kuota = $(this).data('kuota');
                var totalItems = checkedValues.length;
        
                if (totalItems === 0) {
                    Swal.fire({        
                        icon: 'error',
                        title: `Tidak Ada Data yang Dipilih`,
                        showConfirmButton: false,
                        timer: 3000
                    })
                    return;
                } else if (totalItems > kuota) {
                    Swal.fire({        
                        icon: 'error',
                        title: `Peserta yang Anda Pilih Melebihi Kuota. Kuota yang tersisa sebanyak ${kuota} siswa)`,
                        showConfirmButton: false,
                        timer: 3000
                    })
                    return;
                }

                $('#updateCounter').removeClass('d-none');
                // Mulai Ladda Button
                laddaButton.start();

                var updatedItems = 0;

                for (const id of checkedValues) {
                    try {
                        updatedItems++;
                        $("#updateCounter").text(updatedItems + "/" + totalItems);
                        const response = await $.ajax({
                            url: "{{ route('sekolah.siswa.updateAccepted') }}",
                            method: "POST",
                            data: {
                            _token: "{{ csrf_token() }}",
                            checked: [id]
                            },
                        });
                        
                    } catch (error) {
                        console.error("Error:", error);
                    } finally {
                        // Perbarui progress Ladda Button
                        laddaButton.setProgress(updatedItems / totalItems);
                    }
                }
                Swal.fire({        
                    icon: 'success',
                    title: `Berhasil mengupdate ${totalItems} data peserta didik`,
                    showConfirmButton: false,
                    timer: 3000
                });

                $('#updateCounter').addClass('d-none');
                // Selesai Ladda Button
                laddaButton.stop();
            });

        });
    </script>

  @endsection