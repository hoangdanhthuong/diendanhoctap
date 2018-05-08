<div class="row" id="dang_bai">
		<div class="container-fluid" id="tieu_de">
			<h2 class="bg-primary" style="padding: 10px"><button  class="btn btn-info" data-toggle = "collapse" data-target = "#form_bai_viet">Tạo bài viết</button></h2>	
			<form class="form-group col-sm-offset-2 col-sm-8 collapse" id="form_bai_viet"  >
				<div class="form-group" >
					<label class="control-label " for="tieu_de">Tiêu đề:</label>
					<input type="text" name="tieu_de" id="tieu_de " class="form-control">
				</div>
				<div class="form-group" >
					<label class="control-label " for="noi_dung">Nội dung:</label>
					<textarea rows="5" class="form-control" name="noi_dung"></textarea>
				</div>
				<div class="form-group" >
					<label class="control-label " for="noi_dung">Chủ đề:</label>
					<select class="form-control" name="chu_de">
						<option value="-1">Chọn chủ đề</option>
						<option value="0">Lập trình C#</option>
						<option value="1">Lập trình Java</option>
					</select>
				</div>
				<div class="form-group row" >
					<button type="submit" name="tao_bai_viet" class="btn btn-success col-sm-4 col-sm-offset-4 " >Tạo bài viết</button>
				</div>
			</form>
		</div>
	</div>