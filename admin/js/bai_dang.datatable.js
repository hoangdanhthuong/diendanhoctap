$(document).ready(function(){
	$('#table_bai_dang').DataTable({
		'columnDefs':[
		{'searchable' : false , 'orderable' : false, 'targets':5},
		{'searchable' : false , 'orderable' : false, 'targets':6},
		]
	});
})