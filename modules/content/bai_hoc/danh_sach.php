<?php
$id = $_GET['id'];
$sql = "SELECT * FROM bai_hoc WHERE id_khoa_hoc = ".$id." and tinh_trang = 1 limit 16";
$result = mysqli_query($conn, $sql);

$num_row = mysqli_num_rows($result);

?>
<div class="container">
	<div class="row">
		<div class="container-fluid row ">
			<div class="tieu_de row text-center" style="margin-top: 50px;">
				<h3 class="bg-primary" id="xep_hang">Tất cả bài học</h3>
			</div>
			<div class="row well" >
				<?php 
				if($num_row == 0){
					echo "Không có bài học nào ..";
				}else{
					$target = "admin/modules/content/quan_ly_bai_hoc/uploads/";
					while ($row = mysqli_fetch_assoc($result)) {
						$images = explode( ':',$row['hinh_anh']);
						?>
						<div class="col-sm-4" style="position: relative;height: 300px;">
							<div class="thumbnail" >
								<a href="index.php?xem=chitietbaihoc&id=<?php echo $row['id']?>">
									<img src="<?php echo $target.$images[0]?>" alt="Lights"  class="img-responsive" style=" position: relative; min-height: 200px;height: 180px;width: 100%;">
									<div class="caption">
										<p style="font-weight: bold; font-size: 16px; height: 35px"><?php echo $row['ten']?></p>
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


