<?php
include_once("../../../admin/modules/config.php");
$key_search = $_POST['timkiem'];
$sql = "SELECT * FROM bai_hoc WHERE ten like '%".$key_search."%' AND tinh_trang = 1 limit 16";
$result = mysqli_query($conn, $sql);
$num_row = mysqli_num_rows($result);
?>
<div class="container-fluid row ">
	<h3 class="bg-primary text-center" >kết quả tìm kiếm</h3>
	<div class=" col-md-12 well"  width = "100%">
		<?php 
		if($num_row == 0){
			echo "Không có bài học nào ..";
		}else{
			while ($row = mysqli_fetch_assoc($result)) {
				$images = explode( ':',$row['hinh_anh']);
				?>
				<p><a href="index.php?xem=chitietbaihoc&id=<?php echo $row['id']?>"><?php echo $row['ten']?></a></p>
				<div style=" white-space: nowrap; width: 100%; overflow: hidden;text-overflow: ellipsis; max-height: 20px" ><?php echo $row['noi_dung'].".."?></div>
				<hr>
				<?php
			}
		}
		?>
	</div>
</div>

