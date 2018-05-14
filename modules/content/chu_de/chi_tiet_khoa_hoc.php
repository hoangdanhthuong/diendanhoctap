<?php
$id = $_GET['id'];	
$sql = "SELECT * FROM khoa_hoc WHERE id = ".$id;
$row = mysqli_fetch_assoc(mysqli_query($conn, $sql));
?>

<div class="container">
	<div class="container-fluid row ">
		<div class="tieu_de row text-center" style="margin-top: 50px">
			<h3 class="bg-primary" id="xep_hang">Chi tiết khóa học</h3>
		</div>
		<div class="row well" >
			<div class="well well-sm">
				<h4><?php echo $row['ten']?></h4>
				<p><b>Bắt đầu:</b> <?php echo $row['thoi_gian_bat_dau']?><br/> <b>Kết thúc: </b> <?php echo $row['thoi_gian_ket_thuc']?></p> 
			</div>
			<div class="container">
				<p><?php echo $row['noi_dung']?></p>

				<img src="">
			</div>
		</div>
	</div>
	<div class="row" style="margin-bottom: 10px">
		<a href="index.php?xem=bai_hoc&id=<?php echo $id;?>" class = "btn btn-info col-md-2 col-md-offset-5" >Bắt đầu học</a>
	</div>
</div>
	

