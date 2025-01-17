<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>DATA USER APLIKASI KASIR</h2>
	<a href="halaman_admin.php">KEMBALI</a>
	<br/>
	<a href="tambah_users.php">+ TAMBAH USER</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>Username</th>
			<th>Password</th>
            <th>Level</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from users");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['password']; ?></td>
                <td><?php echo $d['level']; ?></td>
				<td>
					<a href="edit_user.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus_user.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>