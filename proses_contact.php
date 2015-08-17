<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Berhasil</title>
</head>

<body>
<p>
  <?php

$name=$_POST['name'];
$email=$_POST['email'];
$subjek=$_POST['subjek'];
$pesan=$_POST['pesan'];

$to="tampubolonbudiman@gmail.com";
$header="From: $email";

@mail($to, $subjek, $pesan, $header);
echo "Pesan Berhasil Dikirim";
?>
</p>
<table width="20%" border="0">
  <tr>
    <td><a href="index.php"><img src="image/home.png" width="30" height="30" border="0" align="bottom" /> Kembali ke Beranda </a></td>
    
    
  </tr>
</table>
<p>
  <object classid="clsid:166B1BCA-3F9C-11CF-8075-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/director/sw.cab#version=8,5,0,0" width="427" height="81">
    <param name="src" value="images/flashvortex.swf" />
    <embed src="images/flashvortex.swf" pluginspage="http://www.macromedia.com/shockwave/download/" width="427" height="81"></embed>
  </object>
</p>
</body>
</html>
