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
						<div class="col-sm-3 list_kh" style="position: relative;height: 300px;">
							<div class="thumbnail list-khoa-hoc" >
								<a href="index.php?xem=chitietbaihoc&id=<?php echo $row['id']?>">
									<div style="position: relative;overflow: hidden;">
										<img src="<?php echo $target.$images[0]?>" alt="Lights"  class="img-responsive" style=" position: relative; min-height: 200px;height: 180px;width: 100%;">
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


