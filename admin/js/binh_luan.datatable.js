$(document).ready(function(){
	$('#table_binh_luan').DataTable({
		'columnDefs':[
		{'searchable' : false , 'orderable' : false, 'targets':5},
		{'searchable' : false , 'orderable' : false, 'targets':6},
		]
	});
})