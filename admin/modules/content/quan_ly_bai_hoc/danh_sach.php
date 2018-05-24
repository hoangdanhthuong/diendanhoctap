<?php
include("modules/config.php");
$sql = "SELECT a.*, b.ten as ten_khoa_hoc FROM bai_hoc a, khoa_hoc b WHERE a.id_khoa_hoc = b.id";
$result = mysqli_query($conn,$sql);
?>
<div class="container-fluid bg-success ">
	<div class="row bg-primary">
		<h2 class="text-center" >Danh sách bài học</h2>
	</div>
	<div class="container">
		<div class="row">
			<h3><a href="index.php?quanly=baihoc&ac=them"  class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>Thêm</a></h3>
		</div>
		<div class="row table-responsive">
			<table class="table dataTable table-hover table-bordered" id="table_bai_hoc">
				<thead class="bg-primary">
					<tr class="text-center">
						<th rowspan="2" style="vertical-align: middle;" class="text-center col-md-1">ID</th>
						<th rowspan="2" style="vertical-align: middle;" class="text-center">Tên bài học</th>
						<th rowspan="2" style="vertical-align: middle;" class="text-center">Tên khóa học</th>
						<th rowspan="2" style="vertical-align: middle;" class="text-center col-md-1" >Link video</th>
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
							<td class="text-left"><?php echo $row['ten']?></td>
							<td class="text-left"><?php echo $row['ten_khoa_hoc']?></td>
							<td><?php echo $row['link_video']?></td>
							<td><?php echo $row['thu_tu']?></td>
							<td><?php echo $row['tinh_trang']?></td>
							<td><a href="index.php?quanly=baihoc&ac=sua&id=<?php echo $row['id']?>" class="btn_them" ><i class="glyphicon glyphicon-edit"></i></a></td>
							<td><a href="modules/content/quan_ly_bai_hoc/xu_ly.php?id=<?php echo $row['id']?>" class="btn_xoa" ><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
	
</div>