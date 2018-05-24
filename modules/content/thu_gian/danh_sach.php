
<?php 
if(isset($_GET['id'])){

$sql = "SELECT a.*, b.ho_ten FROM cau_hoi a, thanh_vien b WHERE a.ten_dang_nhap = b.ten_dang_nhap and a.tinh_trang = 1 and id_chu_de='".$_GET['id']."' order by ngay_tao desc limit 10";	
}else{

$sql = "SELECT a.*, b.ho_ten FROM cau_hoi a, thanh_vien b WHERE a.ten_dang_nhap = b.ten_dang_nhap and a.tinh_trang = 1  order by ngay_tao desc limit 10";
}
$result  = mysqli_query($conn, $sql);
$num_row = mysqli_num_rows($result);
?>
<hr>
<div class="container" style="margin-bottom: 20px">
	<div class="container-fluid row ">
		<div class="tieu_de row text-center">
			<h3 class="bg-primary" id="xep_hang">Tất cả chủ đề</h3>
		</div>
		<hr>
		<?php 
		if($num_row == 0){
			echo "<p>Chưa có câu hỏi nào<p></hr>";
		}else{
			while ($row = mysqli_fetch_assoc($result)) {
				$sql_new =  "SELECT *, MAX(thoi_gian) FROM binh_luan WHERE id_cau_hoi = ".$row['id'];
				$row_new = mysqli_fetch_assoc(mysqli_query($conn,$sql_new));
				?>
				<div class="row well" >
					<div class="col-sm-1 ">
						<a href="" ><img src="image/no-avatar.png" height="50px" width="50px"></a>
					</div>
					<div class="col-sm-11 form-inline">
						<div class="col-sm-9 list-group-item  list-group-item-warning">
							<div class="col-sm-9">
								<a href="index.php?xem=baiviet&id=<?php echo $row['id']?>" class=""> <?php echo $row['tieu_de']?></a>
								<p><b>Người đăng:</b> <?php echo $row['ho_ten']?></p>
							</div>
							<div class="col-sm-3">
								<span class="pull-right">Ngày đăng<br/> <?php echo $row['ngay_tao']?></span>
							</div>
						</div>
						<div class="col-sm-3 list-group-item  list-group-item-warning">
							<p style="font-weight: bold;color: black;">Bình luận mới nhất</p>
							<a  href="index.php?xem=baiviet&id=<?php echo $row['id']?>"><?php echo $row_new['noi_dung']?></a>
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
<hr/>
<hr/>
