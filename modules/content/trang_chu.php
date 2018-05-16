
<?php
session_start();
$sql_new = "SELECT a.*, b.ho_ten FROM cau_hoi a, thanh_vien  b WHERE (a.ten_dang_nhap=b.ten_dang_nhap or b.email = a.ten_dang_nhap) and a.tinh_trang = 1 order by a.id desc limit 0,5";
$result_new = mysqli_query($conn, $sql_new);
$sql_xep_hang = "SELECT * FROM bang_xep_hang limit 0,5";
$result_xep_hang = mysqli_query($conn, $sql_xep_hang);

$sql_khoa_hoc = "SELECT * FROM khoa_hoc WHERE tinh_trang=1 order by id desc limit 8";
$result_khoa_hoc = mysqli_query($conn, $sql_khoa_hoc);

$sql_tai_lieu = "SELECT * FROM chu_de WHERE id_loai_tin = 4 and tinh_trang = 1 order by thu_tu ";
$result_tai_lieu = mysqli_query($conn, $sql_tai_lieu);

$sql_thu_gian = "SELECT * FROM chu_de WHERE id_loai_tin = 5 and tinh_trang = 1 order by thu_tu ";
$result_thu_gian = mysqli_query($conn, $sql_thu_gian);
?>
<!-- start contetn -->
<div class="container">
	<div class="row">
		<div class="img_banner" style="padding-top: 20px">
			<img src="image/header.jpg" alt="">
		</div>
	</div>
</div>
<div class="container">
	<?php
	if(isset($_SESSION['dang_nhap_dien_dan'])){
		include('modules/content/bai_viet/them.php');
	}
	?>
	<div class="row" >
		<div class="col-sm-8">
			<div class="container-fluid">
				<div class="tieu_de row ">
					<h3 class="bg-primary">Thống kê bài viết</h3>
				</div>
				<table class="table" >
					<thead>
						<tr>
							<th class="col-sm-9">Bài viết mới</th>
							<th class="col-sm-3">Người gửi cuối</th>
						</tr>
					</thead>
					<tbody>
						<?php
						while($row = mysqli_fetch_assoc($result_new)) {
							
							echo "<tr>
							<td><a href='index.php?xem=baiviet&id=".$row['id']."'>".$row['tieu_de']."</a></td>
							<td><b>".$row['ho_ten'].'</b><br/>'.$row['ngay_tao']."</td>
							</tr>";
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="container-fluid row ">
				<div class="tieu_de row text-center">
					<h3 class="bg-primary" id="xep_hang">Bảng xếp hạng</h3>
				</div>
				<table class="table table-hover bg-info">
					<thead>
						<tr>
							<th>Thành viên</th>
							<th>Số bài</th>
						</tr>
					</thead>
					<tbody>
						<?php
						while ($row = mysqli_fetch_assoc($result_xep_hang)) {
							echo '<tr>
							<td><a href="index.php?xem=thanhvie&id='.$row['id'].'">'.$row['ho_ten'].'</a></td>
							<td>'.$row['so_luong_bai'].'</td>
							</tr>';
						}
						?>
					</tbody>
				</table>
			</div>

		</div>
	</div>
	<div class="row " id="dang_bai" >
		<div class="container-fluid" id="tieu_de">
			<h3 class="bg-primary" style="padding: 10px">Khóa học mới nhất</h3>	
			<div class="row khoa_hoc" >
				<?php 
				$num_row = mysqli_num_rows($result_khoa_hoc);
				if($num_row == 0){
					echo "Không có khóa học nào ..";
				}else{
					$target = "admin/modules/content/quan_ly_khoa_hoc/uploads/";
					while ($row = mysqli_fetch_assoc($result_khoa_hoc)) {
						?>
						<div class="col-sm-4" style="position: relative;height: 300px;">
							<div class="thumbnail" >
								<a href="index.php?xem=chitietkhoahoc&id=<?php echo $row['id']?>">
									<img src="<?php echo $target.$row['hinh_anh']?>" alt="Lights"  class="img-responsive" style=" position: relative; min-height: 200px;height: 180px;width: 100%;">
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
	<!-- tai lieu -->
	<div class="row " id="dang_bai" >
		<div class="container-fluid" id="tieu_de">
			<h3 class="bg-primary" style="padding: 10px">Tài liệu</h3>	
			<div class="row khoa_hoc" >
				<div class="container-fluid">
					<table class="table table-hover bg-info table-striped">
						<thead class="bg-success">
							<tr>
								<th class="col-sm-6">Chủ đề</th>
								<th class="col-sm-2">Số lượng</th>
								<th class="col-sm-4">Mới nhất</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							while ($row = mysqli_fetch_assoc($result_tai_lieu)) {
								$sql_new_tai_lieu = "SELECT * FROM tai_lieu WHERE id_chu_de= ".$row['id']." order by ngay_tao desc";
								$row_new_tai_lieu = mysqli_fetch_assoc(mysqli_query($conn, $sql_new_tai_lieu));
								echo '<tr>
								<td class = "text-uppercase"><a href = "index.php?xem=tailieu&id='.$row['id'].'">'.$row['ten'].'</a></td>
								<td>'.mysqli_num_rows(mysqli_query($conn, $sql_new_tai_lieu)).'</td>
								<td><a href = "index.php?xem=tailieu&id='.$row['id'].'">'.$row_new_tai_lieu['tieu_de'].'</a></td>
								</tr>';
							}
							?>
							
						</tbody>
					</table>
				</div>
				
			</div>
		</div>
	</div>
	<!-- end tai lieu -->
	<!-- giai tri -->
	<div class="row " id="dang_bai" >
		<div class="container-fluid" id="tieu_de">
			<h3 class="bg-primary" style="padding: 20px">Thư giãn - giải trí</h3>	
		</div>
		<div class="row" style="margin-bottom: 10px">
			<div class="container" id="tieu_de">
				<table class="table table-striped">
					<thead>
						<tr>
							<td class="col-sm-8"></td>
							<td class="col-sm-4"></td>
						</tr>
					</thead>
					<tbody>
						<?php 

						while ($row_thu_gian = mysqli_fetch_assoc($result_thu_gian)) {
							$sql_new_thu_gian = "SELECT *, MAX(ngay_tao) FROM cau_hoi WHERE id_chu_de=".$row_thu_gian['id'];
							$row = mysqli_fetch_assoc(mysqli_query($conn, $sql_new_thu_gian));
							?>
							<tr>
								<td > <a href="index.php?xem=thugian&id=<?php echo $row_thu_gian['id']?>" class ="text-uppercase"><?php echo $row_thu_gian['ten']?></a></td>
								<td> <a href="index.php?xem=baiviet&id=<?php echo $row_thu_gian['id']?>"><?php echo $row['tieu_de']?></a></td>
							</tr>
							<?php
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
	<!-- end giai tri -->