
<?php
$id = $_GET['id'];
$sql_tai_lieu = "SELECT * FROM tai_lieu WHERE id = ".$id;
$row = mysqli_fetch_assoc(mysqli_query($conn, $sql_tai_lieu));

$sql ="SELECT * FROM chu_de WHERE id_loai_tin = 4 order by thu_tu";
$result = mysqli_query($conn, $sql);
if(isset($_GET['error'])){
	echo '
	<script type="text/javascript">
	alert("Sửa không thành công! Đã tồn tại tài liệu.");
	</script>';
}
$target = "modules/content/quan_ly_tai_lieu/uploads/";
$image = explode(':', $row['hinh_anh']);
?>
<div class="container-fluid bg-success ">
	<div class="row bg-primary">
		<h2 class="text-center" >Sửa tài liệu</h2>
	</div>
	<div class="container">
		<div class="col-sm-8 col-sm-offset-2" style="margin-top: 50px;">
			<form class="form-horizontal" action="modules/content/quan_ly_tai_lieu/xu_ly.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label class="control-label col-sm-2" for="tieu_de">Tiêu đề</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="tieu_de" placeholder="Nhập tiêu đề.." name="tieu_de" value="<?php echo $row['tieu_de']?>" required>
					</div>
				</div>
				<div class="form-group">        
					<label class="control-label col-sm-2" for="noi_dung">Nội dung</label>
					<div class=" col-sm-10">
						<textarea name="noi_dung" id="noi_dung" class="form-control" required>
							<?php echo $row['noi_dung']?>
						</textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="link_tai_lieu">Đường dẫn tài liệu</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="link_tai_lieu" placeholder="Nhập đường dẫn tài liệu.." name="link_tai_lieu" value="<?php echo $row['lien_ket']?>" required>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">Hình ảnh</label>
					<div class="col-sm-10">
						<input type="file" id = "hinh_anh" name="hinh_anh[]" multiple accept="image/*">
					</div>
					<div class="row">
						<img src="<?php echo  $target.$image[0]?>" id="view_hinh_anh" alt="Red dot" width="100px" height="100px" class="col-sm-offset-2" >
					</div>
				</div>
				<div class="form-group"> 
					<label class="control-label col-sm-2" for="thu_tu">Thứ tự</label>
					<div class="col-sm-4">
						<input type="number" name="thu_tu" min="0" value="0" class="form-control" placeholder="" id="thu_tu" value="<?php echo $row['thu_tu']?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="chu_de">Chủ đề</label>
					<div class="col-sm-4">
						<select name="chu_de" class="form-control" required>
							<option value="">Chọn chủ đề</option>
							<?php
							while ($row_chu_de = mysqli_fetch_assoc($result)) {
								if($row['id_chu_de'] == $row_chu_de['id']){
									echo '<option selected value="'.$row_chu_de['id'].'">'.$row_chu_de['ten'].'</option>';
								}else{
									echo '<option value="'.$row_chu_de['id'].'">'.$row_chu_de['ten'].'</option>';
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
							<option value="1">Kích hoạt</option>
							<option value="0">Không kích hoạt</option>
						</select>
					</div>
				</div>
				<p class="col-sm-offset-2" style="color: red"><?php
				if(isset($_GET['error'])){
					echo "Lỗi sửa tài liệu.!";
				}
				?></p>
				<div class="form-group">        
					<div class="col-sm-offset-3 col-sm-9">
						<button  class="btn btn-primary col-sm-2" name="sua" value="sua" id="sua" >Sửa</button>
					</div>
				</div>
			</form>
		</div>

	</div>
</div>