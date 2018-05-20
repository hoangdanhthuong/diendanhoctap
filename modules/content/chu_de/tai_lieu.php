<?php 
	if(isset($_GET['id'])){
		$sql_tai_lieu = "SELECT a.*, b.ten FROM `tai_lieu` a, chu_de b WHERE a.`id_chu_de` = b.id AND a.id_chu_de = ".$_GET['id'];
	}else{
		$sql_tai_lieu = "SELECT a.*, b.ten FROM `tai_lieu` a, chu_de b WHERE a.`id_chu_de` = b.id";
	}
	$result_tai_lieu = mysqli_query($conn, $sql_tai_lieu);
	$num_row = mysqli_num_rows($result_tai_lieu);
?>

<div class="col-sm-8">
	<div class="container-fluid row ">
		<div class="tieu_de row text-center">
			<h3 class="bg-primary" id="xep_hang">Tất cả tài liệu</h3>
		</div>
		<?php 
		if($num_row == 0){
			echo "Chưa có tài liệu  nào";
		}else{
			while ($row = mysqli_fetch_assoc($result_tai_lieu)) {

				?>
				<div class="row well" >
					<div class="col-sm-1 ">
						<a href="" ><img src="image/no-avatar.png" height="50px" width="50px"></a>
					</div>
					<div class="col-sm-11 form-inline">
						<div class="col-sm-12 list-group-item  list-group-item-warning">
							<div class="col-sm-9">
								<a href="index.php?xem=chitiettailieu&id=<?php echo $row['id']?>" class=""> <?php echo $row['tieu_de']?></a>
								<p><b>Chủ đề:</b> <?php echo $row['ten']?></p>
							</div>
							<div class="col-sm-3">
								<span class="pull-right">Ngày đăng<br/> <?php echo $row['ngay_tao']?></span>
							</div>
						</div>
						
					</div>
				</div>
				<?php
			}
		}
		?>
		
	</div>
	<?php
	if($num_row>10){

		?>
		<div class="well">
			<div class="row"> 
				<a href="javascript:void(0)" class="col-sm-8 col-sm-offset-2 btn btn-info" id="xem_them_cau_hoi" >Xem thêm</a>
			</div>
		</div>
		<?php

	}
	?>
</div>		
