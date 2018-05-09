<!-- Modal signup -->
<div class="modal fade" id="signup" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content -->
		<div class="modal-content">
			<div class="modal-header">
				<h2 class="text-center">Đăng ký</h2>
			</div>
			<div class=" modal-content" >
				<form class="" method="POST" action="modules/content/xu_ly/dang_ky.php" enctype="multipart/form-data">
					<div class="form-group">
						<label for="ten_dang_ky"><span class="glyphicon glyphicon-user"></span>Tên đăng nhập (*):</label>
						<input class=" form-control" type="text" id="ten_dang_ky" name="ten_dang_ky" placeholder="Tên đăng nhập .. " required>	
					</div>
					<div class="form-group">
						<label for="mat_khau"><span class="glyphicon glyphicon-eye-open"></span>Mật khẩu (*):</label>
						<input class="form-control" type="password" name="mat_khau" id="mat_khau" placeholder="Mật khẩu" required>
					</div>
					<div class="form-group">
						<label for="ho_ten"><span class="glyphicon glyphicon-user"></span>Họ tên (*):</label>
						<input class=" form-control" type="text" id="ho_ten" name="ho_ten" placeholder="Họ tên.. " required>	
					</div>
					<div class="form-group">
						<label for="email"><span class="glyphicon glyphicon-user"></span>Email (*):</label>
						<input class=" form-control" type="email" id="email" name="email" placeholder="Nhập email.." required>	
					</div>
					<div class="checkbox">
						<label><input type="checkbox" value="" checked="">Nhớ mật khẩu</label>
					</div>
					<div class="form-group">
						<input type="submit" value="Đăng ký" name="dang_ky" class="form-control btn btn-primary" >
					</div>
					<?php
						if(isset($_GET['error'])){
					?>
					<p style="color: red"></p>
					<?php
					}
					?>
				</form>
			</div>
			<div class="modal-footer">
				<p>Đã có tài khoản? <a href="index.php?xem=dangnhap">Đăng nhập/a></p>
			</div>

		</div>
	</div>
</div>