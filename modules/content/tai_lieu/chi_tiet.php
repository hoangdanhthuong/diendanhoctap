<?php
$id = $_GET['id'];
$sql = "SELECT a.*, b.ten FROM `tai_lieu` a, chu_de b WHERE a.`id_chu_de` = b.id AND a.id = ".$id;
$row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
?>
<div class="container">
	<div class="row">
		<div class="container-fluid row ">
			<div class="tieu_de row" style="margin-top: 60px;">
				<ul class="breadcrumb">
					<li><h5><a href="index.php">Trang chủ</a></h5></li>
					<li><a href="xem=chude&id_loai_tin=3&id=<?php echo $row['id']?>"><?php echo $row['ten']?></a></li>    
				</ul>
			</div>
				<div class="row" >
				<div class="tieu_de text-center bg-info">
					<h3><?php echo $row['tieu_de']?></h3>
				</div>
			</div>
			<div class="panel-body">
				<div> 
					<b>Ngày đăng:</b><?php echo $row['ngay_tao']?>
				</div>
				<hr>
				<div class="container">
					<div class="noi_dung">
						<p><?php echo $row['noi_dung']?></p>
					</div>

					<div class="link">
						<a href="<?php echo $row['lien_ket']?>"><?php echo $row['lien_ket']?></a>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>