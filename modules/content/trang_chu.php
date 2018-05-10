


<?php
session_start();
$sql_new = "SELECT a.*, b.ho_ten FROM cau_hoi a, thanh_vien  b WHERE (a.ten_dang_nhap=b.ten_dang_nhap or b.email = a.ten_dang_nhap) and a.tinh_trang = 1 order by a.id desc limit 0,5";
$result_new = mysqli_query($conn, $sql_new);
$sql_xep_hang = "SELECT * FROM bang_xep_hang limit 0,5";
$result_xep_hang = mysqli_query($conn, $sql_xep_hang);
?>
<!-- start contetn -->
<div class="container">
	<div class="row">
		<div class="img_banner">
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
				<div class="col-sm-3" >
					<div class="thumbnail" >
						<a href="/w3images/lights.jpg">
							<img src="image/khoa_hoc.png" alt="Lights"  class="img-responsive" style="min-height: 200px;height: 180px;width: 100%;">
							<div class="caption">
								<p style="font-weight: bold; font-size: 16px">Khóa học lập trình Python</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-3" >
					<div class="thumbnail" >
						<a href="/w3images/lights.jpg">
							<img src="image/hoc_php.jpg" alt="Lights"  class="img-responsive" style="min-height: 200px;height: 180px;width: 100%;">
							<div class="caption">
								<p style="font-weight: bold; font-size: 16px">Khóa học lập trình PHP</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-3" >
					<div class="thumbnail" >
						<a href="/w3images/lights.jpg">
							<img src="image/111.jpg" alt="Lights"  class="img-responsive" style="min-height: 200px;height: 180px;width: 100%;">
							<div class="caption">
								<p style="font-weight: bold; font-size: 16px">Khóa học lập trình PHP</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-3" >
					<div class="thumbnail" >
						<a href="/w3images/lights.jpg">
							<img src="image/112.jpg" alt="Lights"  class="img-responsive" style="min-height: 200px;height: 180px;width: 100%;">
							<div class="caption">
								<p style="font-weight: bold; font-size: 16px">Khóa học lập trình C#</p>
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="row khoa_hoc" >
				<div class="col-sm-3" >
					<div class="thumbnail" >
						<a href="/w3images/lights.jpg">
							<img src="image/113.png" alt="Lights"  class="img-responsive" style="min-height: 200px;height: 180px;width: 100%;">
							<div class="caption">
								<p style="font-weight: bold; font-size: 16px">Khóa học lập trình PHP</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-3" >
					<div class="thumbnail" >
						<a href="/w3images/lights.jpg">
							<img src="image/114.jpg" alt="Lights"  class="img-responsive" style="min-height: 200px;height: 180px;width: 100%;">
							<div class="caption">
								<p style="font-weight: bold; font-size: 16px">Khóa học lập trình C/C++</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-3" >
					<div class="thumbnail" >
						<a href="/w3images/lights.jpg">
							<img src="image/115.jpg" alt="Lights"  class="img-responsive" style="min-height: 200px;height: 180px;width: 100%;">
							<div class="caption">
								<p style="font-weight: bold; font-size: 16px">Khóa học lập trình Java</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-3" >
					<div class="thumbnail" >
						<a href="/w3images/lights.jpg">
							<img src="image/116.jpg" alt="Lights"  class="img-responsive" style="min-height: 200px;height: 180px;width: 100%;">
							<div class="caption">
								<p style="font-weight: bold; font-size: 16px">Khóa học lập trình Java</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- tai lieu -->
	<div class="row " id="dang_bai" >
		<div class="container-fluid" id="tieu_de">
			<h3 class="bg-primary" style="padding: 10px">Tài liệu</h3>	
			<div class="row khoa_hoc" >
				<div class="container-fluid">
					<table class="table table-hover bg-info">
						<thead class="bg-success">
							<tr>
								<th class="col-sm-6">Chủ đề</th>
								<th class="col-sm-2">Số lượng</th>
								<th class="col-sm-4">Mới nhất</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Lập trình C#</td>
								<td>222</td>
								<td>Sách mới nhất</td>
							</tr>
							<tr>
								<td>Lập trình C++</td>
								<td>333</td>
								<td>Bài mới nhất</td>
							</tr>
							<tr>
								<td>Lập trình C</td>
								<td>444</td>
								<td>Video mới nhất</td>
							</tr>
							<tr>
								<td>Lập trình Java</td>
								<td>555</td>
								<td>Ngôn ngữ hay nhất</td>
							</tr>
							<tr>
								<td>Lập trình Php</td>
								<td>666	</td>
								<td>Sách mới nhất</td>
							</tr>
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
			<h3 class="bg-primary" style="padding: 10px">Thư giản - giải trí</h3>	
		</div>
		<div class="row">
			<div class="container-fluid" id="tieu_de">
				<table class="table table-striped">
					<thead>
						<tr>
							<td class="col-sm-8"></td>
							<td class="col-sm-4"></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td> <a>Vui chơi - Giải trí</a></td>
							<td> <a>So sánh giữa ba cộng đồng học tập forumvi lớn nhất..</a></td>
						</tr>
						<tr>
							<td><a>Thư giãn - Giải trí</a></td>
							<td> <a>Cùng vui chơi với chúng tôi..</a></td>
						</tr>
						<tr>
							<td> <a>Nghe nhạc </a></td>
							<td><a>Nghe nhạc tiếng anh hay..</a></td>
						</tr>
						<tr>
							<td><a>Đọc sách</a></td>
							<td><a>Đọc sách lập trình hay nhất..</a></td>
						</tr>
						<tr>
							<td><a>Đọc truyện</a></td>
							<td><a>So sánh giữa ba cộng đồng học tập forumvi lớn nhất..</a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
	<!-- end giai tri -->