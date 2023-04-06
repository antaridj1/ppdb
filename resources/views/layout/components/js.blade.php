<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/plugins/simplebar/simplebar.min.js')}}"></script>
<script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>
<script src="{{asset('assets/plugins/apexcharts/apexcharts.js')}}"></script>
<script src="{{asset('assets/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
<script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
<script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-us-aea.js')}}"></script>
<script src="{{asset('assets/plugins/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
                    
<script src="{{asset('assets/plugins/ladda/spin.min.js')}}"></script>
<script src="{{asset('assets/plugins/ladda/ladda.min.js')}}"></script>
<script>
    jQuery(document).ready(function() {
    jQuery('input[name="dateRange"]').daterangepicker({
    autoUpdateInput: false,
    singleDatePicker: true,
    locale: {
        cancelLabel: 'Clear'
    }
    });
    jQuery('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
        jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
    });
    jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
        jQuery(this).val('');
    });
    });
</script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="{{asset('assets/plugins/toaster/toastr.min.js')}}"></script>
<script src="{{asset('assets/js/mono.js')}}"></script>
<script src="{{asset('assets/js/chart.js')}}"></script>
<script src="{{asset('assets/js/map.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>

<script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>

<script>
  $('.dropify').dropify();
</script>
