<?php
$id = $_GET['id'];
$sql = "SELECT a.*, b.ho_ten FROM cau_hoi a, thanh_vien b WHERE a.ten_dang_nhap = b.ten_dang_nhap and a.tinh_trang =1 and a.id = ".$id;
$row = mysqli_fetch_assoc(mysqli_query($conn, $sql));

$sql_binh_luan = "SELECT a.*, b.ho_ten FROM binh_luan a, thanh_vien b WHERE a.ten_dang_nhap = b.ten_dang_nhap and id_cau_hoi = ".$id." order by thoi_gian desc";

$result_binh_luan = mysqli_query($conn, $sql_binh_luan);
if (isset($_POST['gui'])) {
	$ten_dang_nhap = $_SESSION['dang_nhap_dien_dan'];
	$noi_dung = $_POST['noi_dung'];
	$sql_them = "INSERT INTO binh_luan( noi_dung, ten_dang_nhap, thoi_gian, id_cau_hoi) VALUES ('".$noi_dung."', '".$ten_dang_nhap."', '".date('Y-m-d H-i-s')."', '".$id."' )";
	mysqli_query($conn, $sql_them);
	header("location:index.php?xem=baiviet&id=".$id);
}
?>
<div class="container" style="margin-top: 50px">
	<div class="panel  panel-primary">

		<div class="panel-heading panel-sm">
			<h3><?php echo $row['tieu_de']?></h3>
		</div>
		<div class="panel-body">
			<div class="row" style="margin-left: 10px">
				<span><b>Thành viên:</b> <?php echo $row['ho_ten']?></span><br/>
				<span><b>Ngày đăng:</b> <?php echo $row['ngay_tao']?></span>	
			</div>
			
			<div class="well">
				<?php 
				echo $row['noi_dung'];
				if($row['hinh_anh']!==''){
					$target = "modules/content/bai_viet/";
					echo '<div class="thumbnail">

					<img src="'.$target.$row['hinh_anh'].'" alt="Lights" >
					</div>';
				}
				?>

			</div>
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3>Bình luận<h3>
					</div>
					<div class="panel-body">
						<?php 
						if(isset($_SESSION['dang_nhap_dien_dan'])){

							?>
							<form method="post" action="" enctype="mutilpart/form-data">
								<div class="row form-group">
									<label class="label-control col-md-1">
										Nội dung
									</label>
									<div class="col-md-11">

										<textarea class="form-control" name="noi_dung" placeholder="Nhập nội dung bình luận.." required></textarea>
									</div>
									<div class="pull-right" style="margin-right: 10px;margin-top:10px; ">
										<button type="submit" class="btn btn-succes" name="gui">Gửi</button>
									</div>
								</div>
							</form>
							<?php 
						}
						if(mysqli_num_rows($result_binh_luan)==0){
							echo "Chưa có bình luận nào..";
						}else{
							while($row_binh_luan = mysqli_fetch_assoc($result_binh_luan)){
							?>
							<div class="well row" style="margin:10px 20px">

								<div class="col-md-2 bg-info" style="margin: -20; padding: 5px">
									<span><b><?php echo $row_binh_luan['ho_ten']?></b></span><br>
									<span><b><?php echo $row_binh_luan['thoi_gian']?></b></span>
								</div>
								<div class="col-md-8">
									<p>
										<?php echo $row_binh_luan['noi_dung']?>
									</p>
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
	</div>