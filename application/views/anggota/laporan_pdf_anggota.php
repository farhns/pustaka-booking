<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PDF ANGGOTA</title>
</head>
<body>
	<style type="tex`t/css">
	.table-data {
		width: 100%;
		border-collapse: collapse;
	}
	.table-data tr th,
	.table-data tr td {
		border: 1px solid black;
		font-size: 11pt;
		padding: 10px 10px 10px 10px;
	}
	</style>
	<h3>
		<center>Laporan Data Anggota Perpustakaan Online</center>
	</h3>
	<br/>
	<table class="table table-data">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Nama</th>
				<th scope="col">Email</th>
				<th scope="col" nowrap>Member Sejak</th>
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
		</tbody>
	</table>
</body>

</html>

<!-- NAMA : Farhan Sofwan Muchlisin -->
<!-- NIM  : 12220520 -->