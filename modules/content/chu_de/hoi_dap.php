<?php 
if(isset($_GET['id'])){
	$sql = "SELECT a.*, b.ho_ten FROM cau_hoi a, thanh_vien b WHERE a.ten_dang_nhap = b.ten_dang_nhap and a.tinh_trang = 1 and id_chu_de='".$_GET['id']."' order by ngay_tao desc limit 10";	
}else{

	$sql = "SELECT a.*, b.ho_ten FROM cau_hoi a, thanh_vien b, chu_de c WHERE a.ten_dang_nhap = b.ten_dang_nhap and a.tinh_trang = 1 AND a.id_chu_de = c.id AND c.id_loai_tin = '".$_GET['id_loai_tin']."' order by ngay_tao desc limit 10";
}
$result  = mysqli_query($conn, $sql);
$num_row = mysqli_num_rows($result);
?>

<div class="col-sm-9">
	<div class="container-fluid row ">
		<div class="tieu_de row text-center">
			<h3 class="bg-primary" id="xep_hang">Tất cả câu hỏi </h3>
		</div>
		<?php 
		if($num_row == 0){
			echo "Chưa có câu hỏi nào";
		}else{
			while ($row = mysqli_fetch_assoc($result)) {

				?>
				<div class="row well" >
					<div class="col-sm-1 ">
						<a href="" ><img src="image/no-avatar.png" height="50px" width="50px"></a>
					</div>
					<div class="col-sm-11 form-inline">
						<div class="col-sm-8 list-group-item  list-group-item-warning">
							<div class="col-sm-9">
								<a href="index.php?xem=baiviet&id=<?php echo $row['id']?>" class=""> <?php echo $row['tieu_de']?></a>
								<p><b>Người hỏi:</b> <?php echo $row['ho_ten']?></p>
							</div>
							<div class="col-sm-3">
								<span class="pull-right">Ngày đăng<br/> <?php echo $row['ngay_tao']?></span>
							</div>
						</div>
						<div class="col-sm-34list-group-item  list-group-item-warning">
							<p style="font-weight: bold;color: black;">Bình luận mới nhất</p>
							<?php echo '<a href="index.php?xem=baiviet&id='.$row['id'].'">'.get_new_comment($conn, $row['id'])['noi_dung'].'</a>'; ?>
							
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
<?php 
function get_new_comment($conn, $id){
	$sql = " SELECT * FROM binh_luan WHERE id_cau_hoi = ".$id;
	return mysqli_fetch_assoc(mysqli_query($conn, $sql));
}
?>
