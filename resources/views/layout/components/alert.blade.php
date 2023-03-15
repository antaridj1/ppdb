
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session()->has('status'))
    <script>
        $(document).ready(function(){       
            Swal.fire({        
                icon: '{{session()->get('status')}}',
                title: '{{session()->get('message')}}',
                showConfirmButton: false,
                timer: 3000
            })
        });  
    </script>
@endif

