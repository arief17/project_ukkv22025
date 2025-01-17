<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Kasir</title>
</head>
<body>
 
	<br/>
	<a href="registrasi.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA USER</h3>
	<form method="post" action="aksi_tambahuser.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
            <tr>
                <td>Level</td>
                <td>
                <select name="level" id="">
                    <option value="Administrator">Administrator</option>
                    <option value="Petugas">Petugas</option>
                </select>
                </td>
                
            </tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>