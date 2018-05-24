<?php

if(isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = "SELECT * FROM khoa_hoc WHERE id_chu_de = ".$id." and tinh_trang = 1 limit 16";
}else{
	$sql = "SELECT * FROM khoa_hoc WHERE tinh_trang = 1 limit 16";
}

$result = mysqli_query($conn, $sql);

$num_row = mysqli_num_rows($result);
?>

<div class="col-sm-9">
	<div class="container-fluid row ">
		<div class="tieu_de row text-center">
			<h3 class="bg-primary" id="xep_hang">Tất cả khóa học</h3>
		</div>
		<div class="row well" >
			<?php 
			if($num_row == 0){
				echo "Không có khóa học nào ..";
			}else{
				$target = "admin/modules/content/quan_ly_khoa_hoc/uploads/";
				while ($row = mysqli_fetch_assoc($result)) {
					?>
					<div class="col-sm-3 list_kh" style="position: relative;height: 250px;">
							<div class="thumbnail list-khoa-hoc" >
								<a href="index.php?xem=chitietkhoahoc&id=<?php echo $row['id']?>">
									<div style="position: relative;overflow: hidden;">
										<img src="<?php echo $target.$row['hinh_anh']?>" alt="Lights"  class="img-responsive" style=" position: relative; min-height: 150px;height: 120px;width: 100%;">
									</div>
									
									<div class="caption" style="color: #000;">
										<p style="font-weight: 500; font-size: 1.2em; height: 35px"><?php echo $row['ten']?></p>
									</div>
								</a>
							</div>
						</div>

					<?php
				}
			}
			?>
		</div>
	</div>
</div>
</div>		

