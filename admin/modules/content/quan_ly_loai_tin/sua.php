<style>
input[type=number]::-webkit-inner-spin-button, 

input[type=number]::-webkit-outer-spin-button { 

  -webkit-appearance: none; 

  margin: 0; 

}
</style>
<?php 
include("modules/config.php");
$id = $_GET['id'];
$sql = "SELECT * FROM loai_tin WHERE id =".$id;
$result =mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>
<div class="container-fluid bg-info">
	<div class="container">
		<div id="tieu_de" class="bg-primary text-center">
			<h3 style="padding: 10px">Sửa loại tin</h3>
		</div>
		<div class="col-sm-7 col-sm-offset-2" style="padding-top: 20px">
			<form class="form-horizontal" action="modules/content/quan_ly_loai_tin/xu_ly.php?id=<?php echo $id;?>" method="post" enctype="mutildata/form-data">
        <div class="form-group">
          <label class="control-label col-sm-3" for="ten">Tên loại tin:</label>
          <div class="col-sm-9">
            <input type="text" name="ten" class="form-control" id="ten" placeholder="Nhập tên loại tin.." required value="<?php echo $row['ten'];?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="lien_ket">Liên kết:</label>
          <div class="col-sm-9"> 
            <input type="text" name="lien_ket" class="form-control" id="lien_ket" placeholder="Nhập liên kết.." required value="<?php echo $row['lien_ket'];?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="thu_tu" >Thứ tự:</label>
          <div class="col-sm-9"> 
            <input type="number" min="0" class="form-control" id="thu_tu" placeholder="Nhập thứ tự.." name="thu_tu" required value="<?php echo $row['thu_tu'];?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3" for="tinh_trang">Tình trạng:</label>
          <div class="col-sm-9"> 
            <select name="tinh_trang" class="form-control" >
              <?php
                if($row['tinh_trang']==1){
                  echo '<option value="1" selected>Kích hoạt</option>
              <option value="0">Không kích hoạt</option>';
                }else{
                  echo '<option value="1">Kích hoạt</option>
              <option value="0" selected="seleceted">Không kích hoạt</option>';
                }
              ?>
              
            </select>
          </div>
        </div>
        <?php
        if(isset($_GET['error'])){
          ?>
          <p class="col-sm-offset-3" style="padding-left: 10px" id="error_form">Thêm bị lỗi</p>
          <?php
        }
        ?>
        <div class="form-group"> 
          <div class="col-sm-offset-2 col-sm-9">
            <button type="submit" class="btn btn-primary col-sm-offset-5 col-sm-4" name="sua">Sửa</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>