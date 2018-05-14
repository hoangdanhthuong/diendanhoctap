
<?php
$sql ="SELECT * FROM khoa_hoc order by thu_tu";
$result = mysqli_query($conn, $sql);
$id = $_GET['id'];
$sql_bai_hoc = "SELECT * FROM bai_hoc WHERE id = ".$id;
$row_bai_hoc = mysqli_fetch_assoc(mysqli_query($conn, $sql_bai_hoc));
if(isset($_GET['error'])){
	echo '
	<script type="text/javascript">
	alert("Sửa không thành công! Đã tồn tại bài học.");
	</script>';
}
$target = "modules/content/quan_ly_bai_hoc/uploads/";
$image = explode(':', $row_bai_hoc['hinh_anh']);

?>
<div class="container-fluid bg-success ">
	<div class="row bg-primary">
		<h2 class="text-center" >Sửa bài học</h2>
	</div>
	<div class="container">
		<div class="col-sm-8 col-sm-offset-2" style="margin-top: 50px;">
			<form class="form-horizontal" action="modules/content/quan_ly_bai_hoc/xu_ly.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label class="control-label col-sm-2" for="tieu_de">Tiêu đề</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="tieu_de" placeholder="Nhập tiêu đề.." name="tieu_de" value="<?php echo $row_bai_hoc['ten']?>" required>
					</div>
				</div>
				<div class="form-group">        
					<label class="control-label col-sm-2" for="tieu_de">Nội dung</label>
					<div class=" col-sm-10">
						<textarea name="noi_dung" id="noi_dung" class="form-control" required>
							<?php echo $row_bai_hoc['noi_dung']?>
						</textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="link_video" >Link video</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="link_video" placeholder="Nhập link video.." name="link_video" value="<?php echo $row_bai_hoc['link_video']?>" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Hình ảnh</label>
					<div class="col-sm-10">
						<input type="file" id = "hinh_anh" name="hinh_anh[]" accept="image/*" required multiple >
					</div>
					<div class="row">
						<img src="<?php echo $target.$image[0];?>" id="view_hinh_anh" alt="Red dot" width="100px" height="100px" class="col-sm-offset-2" >
					</div>
				</div>
				<div class="form-group"> 
					<label class="control-label col-sm-2" for="thu_tu">Thứ tự</label>
					<div class="col-sm-4">
						<input type="number" name="thu_tu" min="0" value="0" class="form-control" placeholder="" id="thu_tu">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="khoa_hoc">Khóa học</label>
					<div class="col-sm-4">
						<select name="khoa_hoc" class="form-control" required>
							<option value="">Chọn khóa học</option>
							<?php
							while ($row = mysqli_fetch_assoc($result)) {
								echo '<option value="'.$row['id'].'">'.$row['ten'].'</option>';
							}
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="tinh_trang">Tình trạng</label>
					<div class="col-sm-4">
						<select name="tinh_trang" class="form-control">
							<option value="1">Kích hoạt</option>
							<option value="0">Không kích hoạt</option>
						</select>
					</div>
				</div>
				<p class="col-sm-offset-2"><?php
				if(isset($_GET['error'])){
					echo "Lỗi thêm khóa học.!";
				}
				?></p>
				<div class="form-group">        
					<div class="col-sm-offset-2 col-sm-10">
						<button  class="btn btn-primary" name="them" value="them" id="them">Thêm</button>
					</div>
				</div>
			</form>
		</div>

	</div>
</div>