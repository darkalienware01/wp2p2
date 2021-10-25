<link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/bootstrap.min.css">
<title>Form Transaksi</title>
<form action="<?= base_url("p7/send");?>" method="post">
<center>
<div class="form-group">
<table>
	<tr>
		<th colspan="3"> Form Transaksi Penjualan Sepatu </th>
		
	</tr>
	
	<tr>
		<td>Nama Pembeli</td>
		<td>:</td>
		<td><input class="form-control" type="text" name="nama" placeholder="Input Nama Pembeli" required>
		<?= form_error('kode','<small style="color:red;">','</small>'); ?></td>
	</tr>
	<tr>
		<td>No HP</td>
		<td>:</td>
		<td><input class="form-control" type="text" name="no" placeholder="Input No HP" required>
		<?= form_error('nama','<small style="color:red;">','</small>'); ?></td>
	</tr>
	<tr>
		<td>Merk</td>
		<td>:</td>
		<td><select class="form-control" name="merk" id="merk">
		<option value="Nike">Nike</option>
		<option value="Adidas">Adidas</option>
		<option value="Kickers">Kickers</option>
		<option value="Eiger">Eiger</option>
		<option value="Bucherri">Bucherri</option>
		</select>
		<?= form_error('sks','<small style="color:red;">','</small>'); ?></td>
	</tr>
	<tr>
		<td>Ukuran</td>
		<td>:</td>
		<td><select class="form-control" name="ukuran" id="ukuran">
		<?php for ($i = 32; $i < 45; $i++){?>
		<option value="<?= $i;?>"><?= $i;?></option>
		<?php }?>
	</tr>
	<tr>
		<td colspan="3"> <input class="btn btn-primary" type="submit" value="Submit"></td>
	</tr>
</table>
</center>
</form>
</div>
<script src="<?= base_url();?>assets/js/bootstrap.min.js"></script>