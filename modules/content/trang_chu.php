


<?php
session_start();
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
	<div class="row" id="thongke">
		<div class="col-sm-8">
			<div class="container-fluid">
				<div class="tieu_de row ">
					<h3 class="bg-primary">Thống kê bài viết</h3>
				</div>
				<table class="table table-hover">
					<thead>
						<tr>
							<th class="col-sm-10">Bài viết mới</th>
							<th class="col-sm-2">Người gửi cuối</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><a href="">aaaaa</a></td>
							<td>aaaaa</td>
						</tr>

						<tr>
							<td><a href="">aaaaa</a></td>
							<td>aaaaa</td>
						</tr>

						<tr>
							<td><a href="">aaaaa</a></td>
							<td>aaaaa</td>
						</tr>

						<tr>
							<td><a href="">aaaaa</a></td>
							<td>aaaaa</td>
						</tr>

						<tr>
							<td><a href="">aaaaa</a></td>
							<td>aaaaa</td>
						</tr>
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
						<tr>
							<td><a href="">Huy</a></td>
							<td>522</td>
						</tr>

						<tr>
							<td><a href="">Huy</a></td>
							<td>522</td>
						</tr>

						<tr>
							<td><a href="">Huy</a></td>
							<td>522</td>
						</tr>

						<tr>
							<td><a href="">Huy</a></td>
							<td>522</td>
						</tr>
						<tr>
							<td><a href="">Huy</a></td>
							<td>522</td>
						</tr>
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
							<img src="http://2sao.vietnamnetjsc.vn//2016/07/04/11/03/me-man-bo-suu-tap-hang-loat-hot-girl-xinh-yeu-khong-the-roi-mat-cua-chang-nhiep-anh-gia_1.jpg" alt="Lights"  class="img-responsive" style="min-height: 200px;height: 180px;width: 100%;">
							<div class="caption">
								<p>Lorem ipsum...</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-3" >
					<div class="thumbnail" >
						<a href="/w3images/lights.jpg">
							<img src="http://2sao.vietnamnetjsc.vn//2016/07/04/11/03/me-man-bo-suu-tap-hang-loat-hot-girl-xinh-yeu-khong-the-roi-mat-cua-chang-nhiep-anh-gia_1.jpg" alt="Lights"  class="img-responsive" style="min-height: 200px;height: 180px;width: 100%;">
							<div class="caption">
								<p>Lorem ipsum...</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-3" >
					<div class="thumbnail" >
						<a href="/w3images/lights.jpg">
							<img src="http://2sao.vietnamnetjsc.vn//2016/07/04/11/03/me-man-bo-suu-tap-hang-loat-hot-girl-xinh-yeu-khong-the-roi-mat-cua-chang-nhiep-anh-gia_1.jpg" alt="Lights"  class="img-responsive" style="min-height: 200px;height: 180px;width: 100%;">
							<div class="caption">
								<p>Lorem ipsum...</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-3" >
					<div class="thumbnail" >
						<a href="/w3images/lights.jpg">
							<img src="http://2sao.vietnamnetjsc.vn//2016/07/04/11/03/me-man-bo-suu-tap-hang-loat-hot-girl-xinh-yeu-khong-the-roi-mat-cua-chang-nhiep-anh-gia_1.jpg" alt="Lights"  class="img-responsive" style="min-height: 200px;height: 180px;width: 100%;">
							<div class="caption">
								<p>Lorem ipsum...</p>
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
								<td>aaaaaa</td>
								<td>222</td>
								<td>wwwwwww</td>
							</tr>
							<tr>
								<td>aaaaaa</td>
								<td>222</td>
								<td>wwwwwww</td>
							</tr>
							<tr>
								<td>aaaaaa</td>
								<td>222</td>
								<td>wwwwwww</td>
							</tr>
							<tr>
								<td>aaaaaa</td>
								<td>222</td>
								<td>wwwwwww</td>
							</tr>
							<tr>
								<td>aaaaaa</td>
								<td>222</td>
								<td>wwwwwww</td>
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
							<td>Vui chơi - Giải trí</td>
							<td>So sánh giữa ba cộng đồng học tập forumvi lớn nhất..</td>
						</tr>
						<tr>
							<td>Vui chơi - Giải trí</td>
							<td>So sánh giữa ba cộng đồng học tập forumvi lớn nhất..</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
	<!-- end giai tri -->