<?php
include("modules/config.php");
$sql = "SELECT a.*, b.tieu_de FROM binh_luan a , cau_hoi b  WHERE  a.id_cau_hoi =b.id";
$result = mysqli_query($conn,$sql);

?>
<div class="container-fluid bg-success ">
	<div class="row bg-primary">
		<h2 class="text-center" >Danh sách bình luận</h2>
	</div>
	<div class="container">
		<div class="row">
			<hr/>
			<table class="table dataTable table-hover table-bordered" id="table_binh_luan">
				<thead class="bg-primary">
					<tr class="text-center">
						<th rowspan="2" style="vertical-align: middle;" class="text-center col-md-1">ID</th>
						<th rowspan="2" style="vertical-align: middle;" class="text-center">Nội dung</th>
						<th rowspan="2" style="vertical-align: middle;" class="text-center">Câu hỏi</th>
						<th rowspan="2" style="vertical-align: middle;" class="text-center">Người bình luận</th>
						<th rowspan="2" style="vertical-align: middle;" class="text-center col-md-1" >Ngày tạo</th>
						<th colspan="2" class="text-center">Quản lý</th>
					</tr>
					<tr>
						<th class="col-md-1">Check</th>
						<th class="col-md-1">Xóa</th>
					</tr>
				</thead>
				<tbody class="text-center">
					<?php
					while($row = mysqli_fetch_assoc($result)){
						?>
						<tr id = "row_<?php echo $row['id']?>">
							<td ><?php echo $row['id']?></td>
							<td class="text-left"><?php echo $row['noi_dung']?></td>
							<td class="text-left"><?php echo $row['tieu_de']?></td>
							<td class="text-left"><?php echo $row['ten_dang_nhap']?></td>
							<td><?php echo $row['thoi_gian']?></td>
							<td><a href="" class="btn_tinh_trang_<?php echo $row['id']?>" ><i class="glyphicon glyphicon-check"></i></td>
							<td><a href="modules/content/quan_ly_binh_luan/xu_ly.php?id=<?php echo $row['id']?>" class="btn_xoa" ><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
	
</div>