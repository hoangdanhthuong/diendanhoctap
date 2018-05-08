<!-- Modal login -->
<div class="" id="login" role="">
	<div class="modal-dialog">
		<!-- Modal content -->
		<div class="modal-content">
			<div class="modal-header">
				<h2 class="text-center">Đăng nhập</h2>
			</div>
			<div class=" modal-content" >
				<form action="modules/xu_ly/dang_nhap.php" class="form-group" method="post" enctype="mutilpart/form-data" >
					<div class="form-group">
						<label for="userName"><span class="glyphicon glyphicon-user"></span>Tên đăng nhập:</label>
						<input class=" form-control" type="text" id="userName" name="userName" placeholder="Tên đăng nhập hoặc email " required="required">	
					</div>
					<div class="form-group">
						<label for="password"><span class="glyphicon glyphicon-eye-open"></span>Mật khẩu:</label>
						<input class="form-control" type="password" name="password" placeholder="Mật khẩu" required="required">
					</div>
					<div class="checkbox">
						<label><input type="checkbox" value="" checked="">Nhớ mật khẩu</label>
					</div>
					<div class="form-group">
						<input type="submit" value="Đăng nhập" class="form-control btn btn-primary" name="dang_nhap" >
					</div>

				</form>
			</div>
			<div class="modal-footer">
			</div>

		</div>
	</div>
</div>