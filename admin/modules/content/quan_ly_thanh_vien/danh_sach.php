<?php
include("modules/config.php");
$sql = "SELECT * FROM `thanh_vien` WHERE 1";
$result = mysqli_query($conn,$sql);
?>
<div class="container-fluid bg-success ">
	<div class="row bg-primary">
		<h2 class="text-center" >Danh sách thành viên</h2>
	</div>
	<div class="container">
		<div class="row">
			<hr/>
			<table class="table dataTable table-hover table-bordered" id="table_thanh_vien">
				<thead class="bg-primary">
					<tr class="text-center">
						<th  style="vertical-align: middle;" class="text-center col-md-1">ID</th>
						<th  style="vertical-align: middle;" class="text-center">Tên đăng nhập</th>
						<th  style="vertical-align: middle;" class="text-center">Họ tên</th>
						<th  style="vertical-align: middle;" class="text-center col-md-1" >Email</th>
						<th  style="vertical-align: middle;" class="text-center col-md-1" >Quyền truy cập</th>
						<th  style="vertical-align: middle;" class="text-center col-md-1" >Tình trạng</th>
						<th class="col-md-1 text-center">Check</th>
					</tr>
				</thead>
				<tbody class="text-center">
					<?php
					while($row = mysqli_fetch_assoc($result)){
						?>
						<tr id = "row_<?php echo $row['id']?>">
							<td ><?php echo $row['id']?></td>
							<td class="text-left"><?php echo $row['ten_dang_nhap']?></td>
							<td class="text-left"><?php echo $row['ho_ten']?></td>
							<td><?php echo $row['email']?></td>
							<td><?php 
							if($row['quyen']==1){
								echo "Quản trị";
							}else{
								echo "Thành viên";
							} ?></td>
							<td id="<?php echo $row['tinh_trang'];?>"><?php 
								if($row['tinh_trang'] ==1){
									echo "Kích hoạt";
								}else{
									echo "Không kích hoạt";
								}
							?></td>
							<td><a href="javascript:void(0)" class="tinh_trang" id="<?php echo $row['id']?>" ><i class="glyphicon glyphicon-check"></i></td>
						</tr>
						<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
	
</div>