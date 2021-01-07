<?php
    include "koneksi.php";
	$id=$_GET['id'];
	$penduduk=mysqli_query($koneksi,"SELECT * FROM penduduk WHERE id='$id'");
	while($r=mysqli_fetch_array($penduduk)){
?>

<div class="modal-dialog">
    <div class="modal-content">

    	<div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>

        <div class="modal-body">
        	<form action="proses_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
        		
                <div class="form-group" >
                	<label for="NIK">NIK</label>
                    <input type="hidden" name="id"  class="form-control" value="<?php echo $r['id']; ?>" />
     				<input type="number" name="nik"  class="form-control" value="<?php echo $r['nik']; ?>"/>
                </div>

                <div class="form-group" >
                	<label for="Nama">Nama</label>
     				<input type="text" name="nama"  class="form-control" value="<?php echo $r['nama']; ?>"/>
                </div>

                <div class="form-group" >
                	<label for="Jenis Kelamin">Jenis Kelamin</label><br>       
                    <label><input type="radio" name="jenis_kelamin" value="P" <?php if ($r['jenis_kelamin']=='P') echo 'checked'?> required>Pria</label>
                    <label><input type="radio" name="jenis_kelamin" value="W" <?php if ($r['jenis_kelamin']=='W') echo 'checked'?> required>Wanita</label>
                </div>
                 <div class="form-group" >
                    <label for="Alamat">Alamat</label>
                    <textarea name="alamat"  class="form-control"><?php echo $r['alamat']; ?></textarea>
                </div>
                 <div class="form-group" >
                    <label for="User Update">User</label>
                    <input type="text" name="userupdate"  class="form-control" value="<?php if($r['userupdate']==''){echo $r['userinput'];
                    }else{echo $r['userupdate'];} ?>" />
                </div>
                <div class="form-group" >
                    <label for="userinput"></label>
                    <input type="hidden" name="userinput"  class="form-control" value="<?php echo $r['userinput']; ?>"/>
                </div>

	            <div class="modal-footer">
	                <button class="btn btn-success" type="submit">
	                    Confirm
	                </button>

	                <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
	               		Cancel
	                </button>
	            </div>

            	</form>

             <?php } ?>

            </div>

           
        </div>
    </div>