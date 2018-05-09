<?php 
$sql = "SELECT * FROM chu_de WHERE tinh_trang =1 order by thu_tu";
$result = mysqli_query($conn, $sql);
?>
<div class="container-fluid well" style="margin-top: 55px ;margin-bottom: 5px">
	<div class="row " width ="100%">
		<div class="col-sm-4">
			<div class="container-fluid">
				<div class="tieu_de row ">
					<h3 class="bg-primary">Chủ đề</h3>
				</div>
				<table class="table table-hover" style="background-color: ">
					<tbody class="list-group">
						<?php
						while($row = mysqli_fetch_assoc($result)){
							echo '
							<tr>
							<td><a href="">'.$row['ten'].'</a></td>
							</tr>';
						}
						?>

					</tbody>
				</table>
			</div>
		</div>
		<div class="col-sm-8">
			<div class="container-fluid row ">
				<div class="tieu_de row text-center">
					<h3 class="bg-primary" id="xep_hang">Khóa học mới nhất</h3>
				</div>
				<div class="row well">
					<div class="col-sm-4" >
						<div class="thumbnail" >
							<a href="/w3images/lights.jpg">
								<img src="http://2sao.vietnamnetjsc.vn//2016/07/04/11/03/me-man-bo-suu-tap-hang-loat-hot-girl-xinh-yeu-khong-the-roi-mat-cua-chang-nhiep-anh-gia_1.jpg" alt="Lights"  class="img-responsive" style="min-height: 200px;height: 180px;width: 100%;">
								<div class="caption">
									<p>Lorem ipsum...</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-4" >
						<div class="thumbnail" >
							<a href="/w3images/lights.jpg">
								<img src="http://2sao.vietnamnetjsc.vn//2016/07/04/11/03/me-man-bo-suu-tap-hang-loat-hot-girl-xinh-yeu-khong-the-roi-mat-cua-chang-nhiep-anh-gia_1.jpg" alt="Lights"  class="img-responsive" style="min-height: 200px;height: 180px;width: 100%;">
								<div class="caption">
									<p>Lorem ipsum...</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-4" >
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
				<div class="row well">
					<div class="col-sm-4" >
						<div class="thumbnail" >
							<a href="/w3images/lights.jpg">
								<img src="http://2sao.vietnamnetjsc.vn//2016/07/04/11/03/me-man-bo-suu-tap-hang-loat-hot-girl-xinh-yeu-khong-the-roi-mat-cua-chang-nhiep-anh-gia_1.jpg" alt="Lights"  class="img-responsive" style="min-height: 200px;height: 180px;width: 100%;">
								<div class="caption">
									<p>Lorem ipsum...</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-4" >
						<div class="thumbnail" >
							<a href="/w3images/lights.jpg">
								<img src="http://2sao.vietnamnetjsc.vn//2016/07/04/11/03/me-man-bo-suu-tap-hang-loat-hot-girl-xinh-yeu-khong-the-roi-mat-cua-chang-nhiep-anh-gia_1.jpg" alt="Lights"  class="img-responsive" style="min-height: 200px;height: 180px;width: 100%;">
								<div class="caption">
									<p>Lorem ipsum...</p>
								</div>
							</a>
						</div>
						
					</div>
					<div class="col-sm-4" >
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
	</div>
</div>
<div class="container-fluid well">
	
</div>