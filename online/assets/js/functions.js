$( document ).ready( function () {
		$.fn.dataTable.moment( 'DD/MM/YY H:i' );
		$( '#example' ).DataTable( {		
			"order": [[ 0, "desc" ]],
			responsive: true
		} );
	} );
	
	
    $(document).ready(function () {
        $.fn.dataTable.moment( 'MM/DD/YYYY HH:mm' );
        $('#example1').DataTable({"order": [[ 0, "desc" ]]});
    });

	
new ClipboardJS( '.clip' );
new ClipboardJS('.clip_modal', {
    container: document.getElementById('CopyWallets')
});
function myCopy() {
		var x = document.getElementById( "showCopy" );
		if ( x.style.display === "none" ) {
			x.style.display = "block";
		} else {
			x.style.display = "none";
		}
	}
function myCopys() {
		var x = document.getElementById( "showCopys" );
		if ( x.style.display === "none" ) {
			x.style.display = "block";
		} else {
			x.style.display = "none";
		}
	}