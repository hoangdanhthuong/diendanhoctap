
<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			</button>
			<a class="navbar-brand" href="index.php">Trang chủ</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li ><a href="index.php?quanly=loaitin">Loại tin</a></li>
				<li><a href="index.php?quanly=chude">Chủ đề</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Hỏi đáp<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="index.php?quanly=baidang">Bài đăng</a></li>
						<li><a href="index.php?quanly=binhluan">Bình luận</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Khóa học<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="index.php?quanly=khoahoc">Khóa học</a></li>
						<li><a href="index.php?quanly=baihoc">Bài học</a></li>
					</ul>
				</li>
				<li><a href="index.php?quanly=tailieu">Tài liệu</a></li>
				<li><a href="index.php?quanly=thanhvien">Thành viên</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php
				if(!isset($_SESSION['admin_dang_nhap_dien_dan'])){


					?>
					<li><a href="#"><span class="glyphicon glyphicon-user"></span> Đăng ký</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>
					<?php
				}else{
					?>
					<li><a href="modules/xu_ly/dang_xuat.php"><i class="glyphicon glyphicon-log-out"></i> Đăng xuất</a></li>
					<?php
				}
				?>
			</ul>
		</div>
	</div>
</nav>

