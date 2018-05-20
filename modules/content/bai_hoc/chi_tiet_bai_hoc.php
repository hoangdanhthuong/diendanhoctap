<?php
$id = $_GET['id'];
$sql_chi_tiet = "SELECT a.*, b.ten as ten_khoa_hoc FROM `bai_hoc`a, khoa_hoc b WHERE a.`id_khoa_hoc` = b.id AND a.id =".$id;
$row_bai_hoc = mysqli_fetch_assoc(mysqli_query($conn, $sql_chi_tiet));
?>

<div class="container">
	<div class="row">
		<div class="container-fluid row ">
			<div class="tieu_de row" style="margin-top: 60px;">
				<ul class="breadcrumb">
					<li><h5><a href="index.php">Trang chủ</a></h5></li>
					<li><a href="?xem=chitietkhoahoc&id=<?php echo $row_bai_hoc['id_khoa_hoc']?>"><?php echo $row_bai_hoc['ten_khoa_hoc']?></a></li>    
				</ul>
			</div>
			<div class="row" >
				<div class="tieu_de text-center bg-info">
					<h3><?php echo $row_bai_hoc['ten']?></h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<p><b>Ngày tạo:</b> <?php echo $row_bai_hoc['ngay_tao']?></p>
					<hr>
				</div>
				<div class="col-md-12">
					<p><?php echo $row_bai_hoc['noi_dung']?></p>
				</div>
				<div class="col-md-8 col-md-offset-2">
					<div class="embed-responsive embed-responsive-16by9" >
						<iframe width="854" height="480" src="<?php echo $row_bai_hoc['link_video']?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						
					</div>
				</div>
			</div>
			<hr>
		</div>
	</div>
</div>
