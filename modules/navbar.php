<!-- start nav -->
<?php
$sql = "SELECT * FROM chu_de WHERE tinh_trang =1 order by thu_tu";
$result = mysqli_query($conn, $sql);
?>
<div class="container-fluid">
	<div class="bg-primary" >
		<nav class="navbar navbar-light navbar-fixed-top" style="background-color: #e3f2fd; ">
			<div class="container" style="padding: 0;">
				<!-- <div class="navbar-header">
					
				</div> -->
				<ul class="nav navbar-nav">
					<li><a class="navbar-brand" href="index.php">TuHoc.Com</a></li>
					<li class="dropdown"><a href="index.php?xem=chude&id_loai_tin=2">Khóa học</a>
						<ul class="dropdown-menu">
							<?php
								while($row = mysqli_fetch_assoc($result)){
									if($row['id_loai_tin']==2){
									echo '<li><a href="index.php?xem=khoahoc&id='.$row['id'].'">'.$row['ten'].'</a></li>';	
									}
									
								}
							?>
						</ul>
					</li>
					<li class="dropdown"><a href="index.php?xem=chude&id_loai_tin=3">Hỏi đáp</a>
						<ul class="dropdown-menu">
							<?php
							$result = mysqli_query($conn, $sql);
								while($row = mysqli_fetch_assoc($result)){
									if($row['id_loai_tin']==3){
									echo '<li><a href="index.php?xem=khoahoc&id='.$row['id'].'">'.$row['ten'].'</a></li>';	
									}
									
								}
							?>
						</ul>
					</li>
					<li class="dropdown"><a href="index.php?xem=chude&id_loai_tin=4">Tài liệu</a>
						<ul class="dropdown-menu">
							<?php
							$result = mysqli_query($conn, $sql);
								while($row = mysqli_fetch_assoc($result)){
									if($row['id_loai_tin']==4){
									echo '<li><a href="index.php?xem=khoahoc&id='.$row['id'].'">'.$row['ten'].'</a></li>';	
									}
									
								}
							?>
						</ul>
					</li>
					<li><a href="#">Giới thiệu</a></li>
					<li><a href="#">Đóng góp</a></li>
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
						<li class="dangky"><a href="index.php?xem=dangnhap" ><span class="glyphicon glyphicon-log-in"></span> Đăng nhập</a></li>
						<?php
					}else{
						?>
						<li><a href="modules/content/xu_ly/dang_xuat.php"><span class="glyphicon glyphicon-user"> </span>Đăng xuất</a></li>
						<?php 
					}
					?>
						</ul>
					</div>
				<ul class="nav navbar-nav navbar-right">
					
				</ul>
			</div>
		</nav>
	</div>
</div>
<!-- end nav -->