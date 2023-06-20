<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.button {
  background-color: black;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  cursor: pointer;
}
.button1 {border-radius: 12px;}
</style>

</head>
<body>
<form action="aksi_insertdaftar.php" method="post">
	Username <input style="margin-left:30px" type="text" name ="username"><br></br>
	Nama <input style="margin-left:56px" type="text" name ="nama"><br></br>
	Nrp <input style="margin-left:70px" type="text" name ="nrp"><br></br>
	Password <input style="margin-left:35px" type="password" name ="pw"><br></br>
	Kode_PS <input style="margin-left:36px" type="text" name ="kode_ps"><br></br>
  Kode_Kota <input style="margin-left:24px" type="text" name ="kode_kota"><br></br>
	<input style="margin-left:150px" type="submit" value="simpan" >
</form>

</body>
</html>