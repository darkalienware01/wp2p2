<title>Form Input Mata Kuliah</title>
<form action="<?= base_url("matkul/cetak");?>" method="post">
<center>
<table>
	<tr>
		<th colspan="3"> Form Input Data Mata Kuliah </th>
		
	</tr>
	<tr>
		<th colspan="3"> </th>
	</tr>
	<tr>
		<th>Kode Matkul</th>
		<th>:</th>
		<th><input type="text" name="kode" placeholder="Input Kode Matkul">
		<?= form_error('kode','<small style="color:red;">','</small>'); ?></th>
	</tr>
	<tr>
		<th>Nama Matkul</th>
		<th>:</th>
		<th><input type="text" name="nama" placeholder="Input Nama Matkul">
		<?= form_error('nama','<small style="color:red;">','</small>'); ?></th>
	</tr>
	<tr>
		<th>Jumlah SKS</th>
		<th>:</th>
		<th><select name="sks" id="sks">
		<option value=""> Pilih SKS </option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		</select>
		<?= form_error('sks','<small style="color:red;">','</small>'); ?></th>
	</tr>
	<tr>
		<th colspan="3"> <input type="submit" value="Submit"></th>
	</tr>
</table>
</center>
</form>