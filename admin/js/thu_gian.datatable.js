$(document).ready(function(){
	$('#table_thu_gian').DataTable({
		'columnDefs':[
		{'searchable' : false , 'orderable' : false, 'targets':5},
		{'searchable' : false , 'orderable' : false, 'targets':6},
		]
	});
})