<?php
	session_start();
    include("ket_noi.php");	
    include("chuc_nang/ham/ham.php");	
	if(isset($_POST['thong_tin_khach_hang']))
	{
		include("chuc_nang/gio_hang/thuc_hien_mua_hang.php");
	}
	if(isset($_POST['cap_nhat_gio_hang']))
	{
		include("chuc_nang/gio_hang/cap_nhat_gio_hang.php");
		trang_truoc();
	}	
?> 
<html>
	<head>
		<meta charset="UTF-8">
		<title>Web bán hàng</title>
		<link rel="stylesheet" type="text/css" href="giao_dien/style.css">
       	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	   <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
	   <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	   <script src="jquery/jquery.js"></script>
	   <script src="bootstrap/js/bootstrap.js"></script>
	   <script src="jquery/jRating.jquery.js"></script>
	   <link rel="stylesheet" href="jquery/jRating.jquery.css" type="text/css">
        <?php //<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
?>	</head>
	<body>
		<center>
			<table width="100%" style="text-align: center;">
				<tr>
					<td><?php include("chuc_nang/tim_kiem/vung_tim_kiem.php");?></td>
                    <td><a href="index.php"><?php include("chuc_nang/banner/banner.php"); ?></a></td>
                    <td><input type="submit" name="login" value="Đăng nhập"><label> : </label>
                        <input type="submit" name="reg" value="Đăng kí" ></br>
                        <?php include("chuc_nang/gio_hang/vung_gio_hang.php"); ?>
                    </td>
				</tr>
				<tr>
					<td colspan="3" height="50px" style="background-color: rgb(59, 118, 245);" >
						<?php
							include("chuc_nang/menu_ngang/menu_ngang.php");
						?> 
                      
					</td>
				</tr>
				<tr>
					<td width="15%" valign="top">
					<?php 
						include("chuc_nang/menu_doc/menu_doc.php");
						include("chuc_nang/san_pham/moi.php"); 
						include("chuc_nang/quang_cao/trai.php"); 
					?>					
					</td>
					<td width="70%" valign="top" >
						<?php 
							include("chuc_nang/dieu_huong.php");
						?>
					</td>
					<td width="15%" valign="top" >
					<?php 
						
						
						include("chuc_nang/san_pham/noi_bat.php"); 
						include("chuc_nang/quang_cao/phai.php"); 
					?>					
					</td>
				</tr>
				<tr>
					<td colspan="3"><?php include("chuc_nang/footer/footer.php"); ?></td>
				</tr>
			</table>
		</center>
	</body>
</html>