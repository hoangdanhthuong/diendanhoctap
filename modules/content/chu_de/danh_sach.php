<?php 

$sql = "SELECT * FROM chu_de  WHERE id_loai_tin = ".$_GET['id_loai_tin']." and tinh_trang =1 order by thu_tu";
$result = mysqli_query($conn, $sql);
?>
<div class="container-fluid well" style="margin-top: 55px ;margin-bottom: 5px">
	<div class="row " width ="100%">
		<div class="col-sm-4">
			<div class="container-fluid">
				<div class="tieu_de row ">
					<h3 class="bg-primary">Chủ đề</h3>
				</div>
				<table class="table table-hover" style="background-color: ">
					<tbody class="list-group">
						<?php
						while($row = mysqli_fetch_assoc($result)){
							echo '
							<tr>
							<td><a href="">'.$row['ten'].'</a></td>
							</tr>';
						}
						?>

					</tbody>
				</table>
			</div>
		</div>
		<?php 
			if($_GET['id_loai_tin']==3){
				include("modules/content/chu_de/hoi_dap.php");	
			}elseif($_GET['id_loai_tin']==2){
				include("modules/content/chu_de/khoa_hoc.php");	
			}elseif ($_GET['id_loai_tin']==4) {
				include("modules/content/chu_de/tai_lieu.php");	
			}
			
		?>
	</div>
</div>
<div class="container-fluid well">

</div>