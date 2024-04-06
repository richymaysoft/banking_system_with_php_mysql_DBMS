</main>
</div>
<script language="javascript">
	populateCountries( "country", "state" );
	populateCountries( "country2" );
	populateCountries( "country2" );
</script>
<script src="../assets/vendor/jquery/jquery-3.2.1.slim.min.js"></script>
<script src="../assets/vendor/jquery/jquery.min.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>-->
<script src="../assets/vendor/popper.js/umd/popper.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/vendor/summernote/summernote-bs4.js"></script>
<script src="../assets/vendor/summernote/summernote-tools.js"></script>
<script src="../assets/vendor/pace-progress/pace.min.js"></script>
<script src="../assets/vendor/stacked-menu/js/stacked-menu.min.js"></script>
<script src="../assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="../assets/vendor/flatpickr/flatpickr.min.js"></script>
<script src="../assets/javascript/theme.min.js"></script> <!-- END THEME JS -->
<script src="../assets/javascript/pages/dashboard-demo.js"></script> <!-- END PAGE LEVEL JS -->
<!--<script src="https://code.jquery.com/jquery-3.5.1.js"></script>-->
<script src="../assets/vendor/datatable/js/jquery.dataTables.min.js"></script>
<script src="../assets/vendor/datatable/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/vendor/datatable/js/dataTables.responsive.min.js"></script>
<script src="../assets/vendor/datatable/js/responsive.bootstrap4.min.js"></script>
<script src="../assets/js/moment.min.js"></script>
<script src="../assets/js/datetime-moment.js"></script>
<script>
    $(document).ready(function () {
        $.fn.dataTable.moment( 'DD/MM/YYYY HH:mm' );
        $('#example').DataTable({"order": [[ 1, "desc" ]]});
    });
    
    $(document).ready(function () {
        $.fn.dataTable.moment( 'DD/MM/YYYY HH:mm' );
        $('#example2').DataTable({"order": [[ 1, "desc" ]]});
    });
</script>
</body>
</html>