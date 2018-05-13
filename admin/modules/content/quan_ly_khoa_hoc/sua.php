
<?php
$sql ="SELECT * FROM chu_de WHERE id_loai_tin = 2 order by thu_tu";
$id = $_GET['id'];

$sql_khoa_hoc = "SELECT * FROM khoa_hoc WHERE id = ".$id;
$row_khoa_hoc = mysqli_fetch_assoc(mysqli_query($conn,$sql_khoa_hoc));

$result = mysqli_query($conn, $sql);
if(isset($_GET['error'])){
	echo '
	<script type="text/javascript">
	alert("Sửa không thành công! Đã tồn tại khóa học.");
	</script>';
}
$target = "modules/content/quan_ly_khoa_hoc/uploads/";
?>
<div class="container-fluid bg-success ">
	<div class="row bg-primary">
		<h2 class="text-center" >Sửa khóa học</h2>
	</div>
	<div class="container">
		<div class="col-sm-8 col-sm-offset-2" style="margin-top: 50px;">
			<form class="form-horizontal" action="modules/content/quan_ly_khoa_hoc/xu_ly.php?id=<?php echo $id?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label class="control-label col-sm-2" for="tieu_de">Tiêu đề</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="tieu_de" placeholder="Nhập tiêu đề.." name="tieu_de" required value="<?php echo $row_khoa_hoc['ten']?>">
					</div>
				</div>
				<div class="form-group">        
					<label class="control-label col-sm-2" for="tieu_de">Nội dung</label>
					<div class=" col-sm-10">
						<textarea name="noi_dung" id="noi_dung" class="form-control" required><?php echo $row_khoa_hoc['noi_dung']?>
					</textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Hình ảnh</label>
				<div class="col-sm-10">
					<input type="file" id = "hinh_anh" name="hinh_anh" accept="image/*">
				</div>
				<div class="row">
					<img src="<?php echo $target.$row_khoa_hoc['hinh_anh']?>" id="view_hinh_anh" alt="Red dot" width="100px" height="100px" class="col-sm-offset-2" >
				</div>
			</div>

			<div class="form-group"> 
				<label class="control-label col-sm-2" for="start_date">Thời gian bắt đầu</label>
				<div class="col-sm-4">
					<input type="date" name="start_date" min="0" class="form-control" placeholder="" id="start_date" value="<?php echo $row_khoa_hoc['thoi_gian_bat_dau']?>">
				</div>
			</div>
			<div class="form-group"> 
				<label class="control-label col-sm-2" for="end_date">Thời gian kết thúc</label>
				<div class="col-sm-4">
					<input type="date" name="end_date" min="0" class="form-control" placeholder="" id="end_date" value="<?php echo $row_khoa_hoc['thoi_gian_ket_thuc']?>">
				</div>
			</div>
			<div class="form-group"> 
				<label class="control-label col-sm-2" for="thu_tu">Thứ tự</label>
				<div class="col-sm-4">
					<input type="number" name="thu_tu" min="0" value="<?php echo $row_khoa_hoc['thu_tu']?>" class="form-control" placeholder="" id="thu_tu">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="chu_de">Chủ đề</label>
				<div class="col-sm-4">
					<select name="chu_de" class="form-control" required>
						<option value="">Chọn chủ đề</option>
						<?php
						while ($row = mysqli_fetch_assoc($result)) {
							if($row_khoa_hoc['id_chu_de'] == $row['id']){
								echo '<option selected value="'.$row['id'].'">'.$row['ten'].'</option>';	
							}else{
								echo '<option value="'.$row['id'].'">'.$row['ten'].'</option>';
							}

						}
						?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="tinh_trang">Tình trạng</label>
				<div class="col-sm-4">
					<select name="tinh_trang" class="form-control">
						<?php
						if($row_khoa_hoc['tinh_trang'] == 1){
							echo '<option value="1" selected>Kích hoạt</option>
							<option value="0">Không kích hoạt</option>';
						}else{
							echo '<option value="1">Kích hoạt</option>
							<option value="0" selected>Không kích hoạt</option>';
						}
						?>

					</select>
				</div>
			</div>
			<p class="col-sm-offset-2" style="color: red"><?php
			if(isset($_GET['error'])){
				echo "Lỗi thêm khóa học.!";
			}
			?></p>
			<div class="form-group">        
				<div class="col-sm-offset-2 col-sm-10">
					<button  class="btn btn-primary" name="sua" value="sua" id="sua">Sửa</button>
				</div>
			</div>
		</form>
	</div>

</div>
</div>