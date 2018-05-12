<?php 

$sql = "SELECT * FROM chu_de WHERE id_loai_tin = ".$_GET['id_loai_tin']." and tinh_trang =1 order by thu_tu";
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
				<div class="row well" >
					<div class="col-sm-4" >
						<div class="thumbnail" >
							<a href="/w3images/lights.jpg">
								<img src="image/khoa_hoc.png" alt="Lights"  class="img-responsive" style="min-height: 200px;height: 180px;width: 100%;">
								<div class="caption">
									<p style="font-weight: bold; font-size: 16px">Khóa học lập trình Python</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-4" >
						<div class="thumbnail" >
							<a href="/w3images/lights.jpg">
								<img src="image/hoc_php.jpg" alt="Lights"  class="img-responsive" style="min-height: 200px;height: 180px;width: 100%;">
								<div class="caption">
									<p style="font-weight: bold; font-size: 16px">Khóa học lập trình PHP</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-4" >
						<div class="thumbnail" >
							<a href="/w3images/lights.jpg">
								<img src="image/116.jpg" alt="Lights"  class="img-responsive" style="min-height: 200px;height: 180px;width: 100%;">
								<div class="caption">
									<p style="font-weight: bold; font-size: 16px">Khóa học lập trình Java</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-4" >
						<div class="thumbnail" >
							<a href="/w3images/lights.jpg">
								<img src="image/114.jpg" alt="Lights"  class="img-responsive" style="min-height: 200px;height: 180px;width: 100%;">
								<div class="caption">
									<p style="font-weight: bold; font-size: 16px">Khóa học lập trình C/C++</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-4" >
						<div class="thumbnail" >
							<a href="/w3images/lights.jpg">
								<img src="image/tieng_anh.jpg" alt="Lights"  class="img-responsive" style="min-height: 200px;height: 180px;width: 100%;">
								<div class="caption">
									<p style="font-weight: bold; font-size: 16px">Khóa học tiếng anh giao tiếp</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-4" >
						<div class="thumbnail" >
							<a href="/w3images/lights.jpg">
								<img src="image/famework.jpg" alt="Lights"  class="img-responsive" style="min-height: 200px;height: 180px;width: 100%;">
								<div class="caption">
									<p style="font-weight: bold; font-size: 16px">Khóa học lập trình php framework</p>
								</div>
							</a>
						</div>
					</div>
					
					<div class="col-sm-4" >
						<div class="thumbnail" >
							<a href="/w3images/lights.jpg">
								<img src="image/mvc5.jpg" alt="Lights"  class="img-responsive" style="min-height: 200px;height: 180px;width: 100%;">
								<div class="caption">
									<p style="font-weight: bold; font-size: 16px">Khóa học lập trình asp.net mvc 5</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-4" >
						<div class="thumbnail" >
							<a href="/w3images/lights.jpg">
								<img src="image/113.png" alt="Lights"  class="img-responsive" style="min-height: 200px;height: 180px;width: 100%;">
								<div class="caption">
									<p style="font-weight: bold; font-size: 16px">Khóa học lập trình Android</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-4" >
						<div class="thumbnail" >
							<a href="/w3images/lights.jpg">
								<img src="image/tieng_anh_1.jpg" alt="Lights"  class="img-responsive" style="min-height: 200px;height: 180px;width: 100%;">
								<div class="caption">
									<p style="font-weight: bold; font-size: 16px">Khóa học tiếng anh cơ bản</p>
								</div>
							</a>
						</div>
					</div>
					<div class="course-row-hearder; ">
						<h3 >
							Nổi bật trong
							<span> Lập trình PHP </span>
						</h3>
						
					</div>
					<div class="col-sm-4" >
						<div class="thumbnail" >
							<a href="/w3images/lights.jpg">
								<img src="image/php1.png" alt="Lights"  class="img-responsive" style="min-height: 200px;height: 180px;width: 100%;">
								<div class="caption">
									<p style="font-weight: bold; font-size: 16px">Khóa học lập trình PHP</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-4" >
						<div class="thumbnail" >
							<a href="/w3images/lights.jpg">
								<img src="image/php2.jpg" alt="Lights"  class="img-responsive" style="min-height: 200px;height: 180px;width: 100%;">
								<div class="caption">
									<p style="font-weight: bold; font-size: 16px">Khóa học lập trình backend PHP</p>
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-4" >
						<div class="thumbnail" >
							<a href="/w3images/lights.jpg">
								<img src="image/php3.png" alt="Lights"  class="img-responsive" style="min-height: 200px;height: 180px;width: 100%;">
								<div class="caption">
									<p style="font-weight: bold; font-size: 16px">Laravel Best PHP Framework</p>
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