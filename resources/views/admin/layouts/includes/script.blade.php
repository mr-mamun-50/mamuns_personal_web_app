<!-- Required Jquery -->
<script type="text/javascript" src="{{ asset('adm') }}/assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('adm') }}/assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{ asset('adm') }}/assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="{{ asset('adm') }}/assets/js/bootstrap/js/bootstrap.min.js"></script>

<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{ asset('adm') }}/assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- modernizr js -->
<script type="text/javascript" src="{{ asset('adm') }}/assets/js/modernizr/modernizr.js"></script>

<!-- am chart -->
<script src="{{ asset('adm') }}/assets/pages/widget/amchart/amcharts.min.js"></script>
<script src="{{ asset('adm') }}/assets/pages/widget/amchart/serial.min.js"></script>

<!-- Chart js -->
<script type="text/javascript" src="{{ asset('adm') }}/assets/js/chart.js/Chart.js"></script>

<!-- Todo js -->
<script type="text/javascript " src="{{ asset('adm') }}/assets/pages/todo/todo.js "></script>

<!-- Custom js -->
<script type="text/javascript" src="{{ asset('adm') }}/assets/pages/dashboard/custom-dashboard.min.js"></script>
<script type="text/javascript" src="{{ asset('adm') }}/assets/js/script.js"></script>
<script type="text/javascript " src="{{ asset('adm') }}/assets/js/SmoothScroll.js"></script>
<script src="{{ asset('adm') }}/assets/js/pcoded.min.js"></script>
<script src="{{ asset('adm') }}/assets/js/vartical-demo.js"></script>
<script src="{{ asset('adm') }}/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- Toastr js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Sweetalert js -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Datatables JS -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js">
</script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js">
</script>
<script type="text/javascript" charset="utf8"
    src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8"
    src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap5.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js">
</script>
<script type="text/javascript" charset="utf8"
    src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js">
</script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js">
</script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js">
</script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js">
</script>

<!-- include summernote js -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<!-- Google charts -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


<script>
    $('.delete').click(function(event) {
        var form = $(this).closest("form");
        event.preventDefault();
        Swal.fire({
            title: 'Do you want to delete this row?',
            text: "Once deleted, you will not be able to recover this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit()
            }
        })
    });
</script>
<script>
    $('.logout').click(function(event) {
        var form = $(this).closest("form");
        event.preventDefault();
        Swal.fire({
            title: 'Do you want to log out now?',
            text: "",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit()
            }
        })
    });
</script>
<script>
    @if (Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}"
        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
    @endif
</script>

<!-- Datatable script -->
<script>
    $(document).ready(function() {
        var table = $('#myDataTable').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
        });

        table.buttons().container()
            .appendTo('#myDataTable_wrapper .col-md-6:eq(0)');
    });
</script>
<script type="text/javascript" charset="utf8" src="{{ asset('adm/buttons.bootstrap4.min.js') }}"></script>

<!-- Summernote script -->
<script>
    $('.summernote').summernote({
        placeholder: 'Enter text here...',
        tabsize: 4,
        height: 200
    });
</script>


<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['bar']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Services', 'Numbers'],
            ['Software', 2],
            ['Designs', 4],
            ['Articles', 8],
            ['Videos', 6]
        ]);

        var options = {
            bar: {
                groupWidth: "50%"
            }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
    }
</script>
<script type="text/javascript">
    google.charts.load("current", {
        packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Articles', 'Comments'],
            ['Viewed', 6],
            ['Not Viewed', 4]
        ]);

        var options = {
            // title: 'Total Comments: ',
            // is3D: true,
            pieHole: 0.4,
            chartArea: {
                width: '100%',
                height: '90%'
            }
        };


        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
    }
</script>
