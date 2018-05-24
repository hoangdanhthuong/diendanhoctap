<?php 
$sql_so_binh_luan = "SELECT COUNT(*) as so_luong FROM thanh_vien_binh_luan WHERE id_dang_nhap = ".$_GET['id'];
$num_binh_luan = mysqli_fetch_assoc(mysqli_query($conn, $sql_so_binh_luan))['so_luong'];
if($num_binh_luan == null){$num_binh_luan =0;}
$sql_so_bai_viet = "SELECT COUNT(*) as so_luong FROM bai_viet_thanh_vien WHERE id_dang_nhap = ".$_GET['id'];
$num_bai_viet = mysqli_fetch_assoc(mysqli_query($conn, $sql_so_bai_viet))['so_luong'];
if($num_bai_viet == null){$num_bai_viet == 0;}

$sql_new_binh_luan = "SELECT * FROM thanh_vien_binh_luan WHERE id_dang_nhap =".$_GET['id']." ORDER BY id DESC LIMIT 10
";
$result_binh_luan = mysqli_query($conn, $sql_new_binh_luan);

$sql_new_bai_viet = "SELECT * FROM bai_viet_thanh_vien WHERE id_dang_nhap = ".$_GET['id']." ORDER BY id DESC
LIMIT 10";
$result_new_bai_viet = mysqli_query($conn, $sql_new_bai_viet);

$sql_thanh_vien = "SELECT * FROM thanh_vien WHERE id = ".$_GET['id'];
$thanh_vien = mysqli_fetch_assoc(mysqli_query($conn, $sql_thanh_vien));
?>
<div class="container" style="margin-top: 50px;">
	<div class="row">
		<div class="title-khoahoc" style="border-bottom: 3px solid #337ab7;">
			<h3 class="bg-primary" style="padding:10px; margin-bottom: 0; max-width: 260px; font-size: 22px; border-top-right-radius: 5px;">Thông tin thành viên</h3>	
		</div>
	</div>
	<div class="row" style="border: 1px solid #CCC;background:#f9f9f9;">
		<div class="row">
			<div class="col-md-5">
				<h3>Họ tên: <b><?php echo $thanh_vien['ho_ten'] ?></b></h3>
			</div>
			<div class="col-md-5">
				<h3>Email: <b><?php echo $thanh_vien['email'] ?></b></h3>
			</div>
		</div>

		<div class="row">
			<div class="col-md-3">
				<h5>Số bài: <b><?php echo $num_bai_viet?></b></h5>
				<h5>Bình luận: <b><?php echo $num_binh_luan;?></b></h5>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="container-fluid">
					<h3>Bài viết mới</h3>
					<?php 
					if(mysqli_num_rows($result_new_bai_viet)== 0){
						echo '<h5 >Chưa có bài viết nào..</h5>';
					}else{
						while ($row = mysqli_fetch_assoc($result_new_bai_viet)) {
							echo '<h5 ><a href="index.php?xem=baiviet&id='.$row['id'].'">'.$row['tieu_de'].'</a></h5>'	;
						}

					}
					?>
				</div>

			</div>
			<div class="row">
				<div class="container-fluid">
					<h3>Bình luận mới</h3>
					<?php 
					if(mysqli_num_rows($result_binh_luan)== 0){
						echo '<h5 >Chưa có bình luận nào..</h5>';
					}else{
						while ($row = mysqli_fetch_assoc($result_binh_luan)) {
							echo '<h5 ><a href="index.php?xem=baiviet&id='.$row['id_cau_hoi'].'">'.$row['noi_dung'].'</a></h5>'	;
						}

					}
					?>
				</div>
			</div>
		</div>

	</div>
	
</div>