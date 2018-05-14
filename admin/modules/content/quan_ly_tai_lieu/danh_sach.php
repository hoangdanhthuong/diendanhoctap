<?php
include("modules/config.php");
$sql = "SELECT a.*, b.ten as ten_chu_de FROM tai_lieu a, chu_de b WHERE  b.id = id_chu_de";
$result = mysqli_query($conn,$sql);
if(isset($_GET['error'])){
	echo '<script type="text/javascript">
	alert("Xóa không thành công! Tài liệu này đang tồn tại.");
	</script>';
}

?>

<div class="container-fluid bg-success ">
	<div class="row bg-primary">
		<h2 class="text-center" >Danh sách tài liệu</h2>
	</div>
	<div class="container">
		<div class="row">
			<h3><a href="index.php?quanly=tailieu&ac=them"  class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Thêm</a></h3>
		</div>
		<div class="row">
			<table class="table dataTable table-hover table-bordered" id="table_tai_lieu">
				<thead class="bg-primary">
					<tr class="text-center">
						<th rowspan="2" style="vertical-align: middle;" class="text-center col-md-1">ID</th>
						<th rowspan="2" style="vertical-align: middle;" class="text-center">Tiêu đề</th>
						<th rowspan="2" style="vertical-align: middle;" class="text-center">Tên chủ đề</th>
						<th rowspan="2" style="vertical-align: middle;" class="text-center col-md-1" >Ngày tạo</th>
						<th rowspan="2" style="vertical-align: middle;" class="text-center col-md-1" >Thứ tự</th>
						<th rowspan="2" style="vertical-align: middle;" class="text-center col-md-1" >Tình trạng</th>
						<th colspan="2" class="text-center">Quản lý</th>
					</tr>
					<tr>
						<th class="col-md-1">Sửa</th>
						<th class="col-md-1">Xóa</th>
					</tr>
				</thead>
				<tbody class="text-center">
					<?php
					while($row = mysqli_fetch_assoc($result)){
						?>
						<tr id = "row_<?php echo $row['id']?>">
							<td ><?php echo $row['id']?></td>
							<td class="text-left"><?php echo $row['tieu_de']?></td>
							<td class="text-left"><?php echo $row['ten_chu_de']?></td>
							<td><?php echo $row['ngay_tao']?></td>
							<td><?php echo $row['thu_tu']?></td>
							<td><?php echo $row['tinh_trang']?></td>
							<td><a href="index.php?quanly=tailieu&ac=sua&id=<?php echo $row['id']?>" class="btn_them" ><i class="glyphicon glyphicon-edit"></i></a></td>
							<td><a href="modules/content/quan_ly_tai_lieu/xu_ly.php?id=<?php echo $row['id']?>" class="btn_xoa" ><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
	
</div>