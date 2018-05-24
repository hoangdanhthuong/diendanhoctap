<!-- modal search -->
<div class="modal fade" id="modalSearch" role="dialog">
	<div class="modal-dialog modal-lg">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Tìm kiếm</h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" id="form_tim_kiem" action="modules/content/tim_kiem/xu_ly.php" method="post">
					<div class="form-group form-horizontal">
						<input type="text" class="form-control" name="timkiem" placeholder="Nhập bài học, câu hỏi..." >
						<input type="submit" value="Tìm" class=" btn btn-primary btn-lg">
					</div>
				</form>
			</div>
			<div id="result_search">
				
			</div>
			<div class="modal-footer" >
				
			</div>	
			<!-- end modal search -->
		</div>
	</div>
</div>