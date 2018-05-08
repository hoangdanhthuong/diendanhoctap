<?php
include("modules/config.php");
$sql ="SELECT * FROM loai_tin order by id ";
$result = mysqli_query($conn, $sql);
?>
<div class="container-fluid bg-info">
	<div class="container">
		<div id="tieu_de">
			<h3><a href="index.php?quanly=loaitin&ac=them" class="btn btn-info"><i class="glyphicon glyphicon-plus"></i>Thêm</a></h3>
		</div>
		<table class="table table-hover text-center table-bordered " id="table_loai_tin">
			<thead class="bg-primary">
				<tr>
					<th rowspan="2" class="col-sm-1" style="vertical-align: middle;" class="text-center">ID</th>
					<th rowspan="2" style="vertical-align: middle;" class="text-center">Tên loại tin</th>
					<th rowspan="2" style="vertical-align: middle;" class="text-center">Link</th>
					<th rowspan="2" style="vertical-align: middle;" class="text-center">Thứ tự</th>
					<th rowspan="2" style="vertical-align: middle;" class="text-center">Tình trạng</th>
					<th colspan="2" class="text-center">Quản lý</th>
				</tr>
				<tr>
					<th class="text-center">Sửa</th>
					<th class="text-center">Xóa</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				while($row = mysqli_fetch_assoc($result)){
					?>
				<tr>
					<td><?php echo $row['id'];?></td>
					<td><?php echo $row['ten'];?></td>
					<td><?php echo $row['lien_ket'];?></td>
					<td><?php echo $row['thu_tu'];?></td>
					<td><?php echo $row['tinh_trang'];?></td>
					<td><a href="index.php?quanly=loaitin&ac=sua&id=<?php echo $row['id'];?>"><i class="glyphicon glyphicon-edit"></i></a></td>
					<td><a href="modules/content/quan_ly_loai_tin/xu_ly.php?id=<?php echo $row['id'];?>"><i class="glyphicon glyphicon-trash"></i></a></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript" src="js/loai_tin.datatable.js"></script>