<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<h3>
	<center>Laporan Data Anggota Perputakaan Online</center>
</h3>
<br />
<table class="table-data">
	<thead>
		<tr>
			<th>#</th>
			<th>Nama</th>
			<th>Email</th>
			<th nowrap>Member Sejak</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$i = 1;
		foreach ($anggota as $a) { ?>
			<tr>
				<th scope="row"><?= $i++; ?></th>
				<td><?= $a['nama']; ?></td>
				<td><?= $a['email']; ?></td>
				<td><?= date('d F Y', $a['tanggal_input']); ?></td>
			</tr>
		<?php } ?>
		<?php
		?>
	</tbody>
</table>

<!-- NAMA : Farhan Sofwan Muchlisin -->
<!-- NIM  : 12220520 -->
