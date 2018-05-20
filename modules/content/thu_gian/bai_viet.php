<?php
$sql = "SELECT * FROM chu_de WHERE id_loai_tin = 5 and tinh_trang = 1 order by thu_tu";
$result = mysqli_query($conn, $sql);
?>
<hr/>
<div class="container" id="dang_bai">
	<div class="container-fluid" id="tieu_de">
		<h2 class="bg-primary" style="padding: 10px"><button  class="btn btn-info" data-toggle = "collapse" data-target = "#form_bai_viet">Tạo bài thư giãn</button></h2>	
		<form class="form-group col-sm-offset-2 col-sm-8 collapse" id="form_bai_viet" action="modules/content/bai_viet/xu_ly.php"  method="post" enctype="multipart/form-data">
			<div class="form-group" >
				<label class="control-label " for="tieu_de">Tiêu đề:</label>
				<input type="text" name="tieu_de" id="tieu_de " class="form-control">
			</div>
			<div class="form-group" >
				<label class="control-label " for="noi_dung">Nội dung:</label>
				<textarea rows="5" class="form-control" name="noi_dung"></textarea>
			</div>
			<div class="form-group" >
				<label class="control-label " for="hinh_anh">Hình ảnh:</label>
				<input type="file" name="hinh_anh" id="hinh_anh" class="form-control">
				<img src="" id = "view_hinh_anh" width="100px" height="100px" alt = "hinh_anh" accept = "image/*">
			</div>
			<div class="form-group" >
				<label class="control-label " for="noi_dung">Chủ đề:</label>
				<select class="form-control" name="chu_de" required>
					<option value="">Chọn chủ đề</option>
					<?php
					while($row = mysqli_fetch_assoc($result)){
						echo '<option value="'.$row['id'].'">'.$row['ten'].'</option>';
					}
					?>
				</select>
			</div>
			<div class="form-group row" >
				<button type="submit" name="tao_bai_viet" class="btn btn-success col-sm-4 col-sm-offset-4 " >Tạo bài viết</button>
			</div>
		</form>
	</div>
</div>