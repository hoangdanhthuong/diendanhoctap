<?php
$id = $_GET['id'];
$sql_chu_de = "SELECT * FROM `chu_de` WHERE `id`= ".$id;
$row_chu_de = mysqli_fetch_assoc(mysqli_query($conn, $sql_chu_de));

$sql = "SELECT * FROM `tai_lieu` WHERE id_chu_de =  ".$id;
$result = mysqli_query($conn,$sql);
?>
<div class="container" style="margin-top: 60px">
	<div class="panel panel-primary">
		<ul class="breadcrumb">
			<li><a href="?xem=chude&id_loai_tin=4">Tài liệu</a></li>
			<li><a href="?xem=tailieu&id=<?php echo $id?>"><?php echo $row_chu_de['ten']?></a></li>     
		</ul>
		<div class="panel-body">
			<table width="100%" class="table table-striped">
				<?php 
				while ($row = mysqli_fetch_assoc($result)) {
					?>
					<tr>
						<td class="col-md-8"><a href="?xem=chitiettailieu&id=<?php echo $row['id']?>"><?php echo $row['tieu_de']?></a></td>
						<td class="col-md-4"><b>Ngày tạo:</b><?php echo $row['ngay_tao']?></td>
					</tr>


					<?php
				}
				?>
			</table>
		</div>
		
		
	</div>
</div>