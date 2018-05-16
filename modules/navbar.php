<!-- start nav -->
<?php
$sql = "SELECT * FROM chu_de WHERE tinh_trang =1 order by thu_tu";
$result = mysqli_query($conn, $sql);
?>
<div class="container-fluid">
	<div class="bg-primary" >
		<nav class="navbar navbar-light navbar-fixed-top" style="background-color: #e3f2fd; ">
			<div class="container" style="padding: 0;">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar" style="background-color: black"></span>
						<span class="icon-bar" style="background-color: black"></span>
						<span class="icon-bar" style="background-color: black"></span>                        
					</button>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li><a class="navbar-brand" href="index.php">TuHoc.Com</a></li>
						<li class="dropdown"><a href="index.php?xem=chude&id_loai_tin=2">Khóa học</a>
							
						</li>
						<li class="dropdown"><a href="index.php?xem=chude&id_loai_tin=3">Hỏi đáp</a>
						</li>
						<li class="dropdown"><a href="index.php?xem=chude&id_loai_tin=4">Tài liệu</a>
							
						</li>
						<li><a href="index.php?xem=gioithieu">Giới thiệu</a></li>
						<li>
							<button type="button" class="btn btn-link btn-md" style="margin-top: 10px" data-toggle="modal" data-target="#modalSearch">	<span class="glyphicon glyphicon-search"></span></button>
						</li>
					</ul>
					<div class="pull-right menu_right">
						<ul class="nav navbar-nav">
							<?php
							session_start();
							if(!isset($_SESSION['dang_nhap_dien_dan'])){
								?>
								<li class="dangky"><a href="#" data-toggle = "modal" data-target = "#signup"><span class="glyphicon glyphicon-user"  ></span> Đăng ký</a></li>
								<li class="dangky"><a href="#" data-toggle = "modal" data-target = "#login"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>
								<?php
							}else{
								?>
								<li><a href="modules/content/xu_ly/dang_xuat.php"><span class="glyphicon glyphicon-user"> </span>Đăng xuất</a></li>
								<?php 
							}
							?>
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</div>
</div>
<!-- end nav -->