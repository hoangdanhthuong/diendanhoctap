<?php
include("modules/config.php");
$sql = "SELECT a.*,b.ten FROM cau_hoi a, chu_de b WHERE a.id_chu_de = b.id";
$result = mysqli_query($conn,$sql);

?>
<div class="container-fluid bg-success ">
	<div class="row bg-primary">
		<h2 class="text-center" >Danh sách bài đăng</h2>
	</div>
	<div class="container">
		<div class="row">
			<hr/>
			<table class="table dataTable table-hover table-bordered" id="table_bai_dang">
				<thead class="bg-primary">
					<tr class="text-center">
						<th rowspan="2" style="vertical-align: middle;" class="text-center col-md-1">ID</th>
						<th rowspan="2" style="vertical-align: middle;" class="text-center">Câu hỏi</th>
						<th rowspan="2" style="vertical-align: middle;" class="text-center">Tên chủ đề</th>
						<th rowspan="2" style="vertical-align: middle;" class="text-center col-md-1" >Ngày tạo</th>
						<th rowspan="2" style="vertical-align: middle;" class="text-center col-md-1" >Tình trạng</th>
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
							<td class="text-left"><?php echo $row['tieu_de']?></td>
							<td class="text-left"><?php echo $row['ten']?></td>
							<td><?php echo $row['ngay_tao']?></td>
							<td id="<?php echo $row['tinh_trang'];?>"><?php 
								if($row['tinh_trang'] ==1){
									echo "Kích hoạt";
								}else{
									echo "Không kích hoạt";
								}
							?></td>
							<td><a href="javascript:void(0)" class="tinh_trang" id="<?php echo $row['id']?>" ><i class="glyphicon glyphicon-check"></i></td>
							<td><a href="javascript:void(0)" class="btn_xoa" ><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
	
</div>