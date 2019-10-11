<br><br>
<h1 style="font-family: cursive;">SẢN PHẨM CỦA CHÚNG TÔI</h1> 
<br><br>
<?php 
	
	$tv="select id,ten,gia,hinh_anh,thuoc_menu from san_pham where trang_chu='co' order by sap_xep_trang_chu desc limit 0,15";
	$tv_1=mysqli_query($connect,$tv);
	echo "<table style='text-align: center;'>";
	while($tv_2=mysqli_fetch_array($tv_1))
	{
		echo "<tr>";
			for($i=1;$i<=3;$i++)
			{
				echo "<td width='300px' valign='top' >";
					if($tv_2!=false)
					{
						$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
						$link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];
						$gia=$tv_2['gia'];
						$gia=number_format($gia,0,",",".");
						echo "<a href='$link_chi_tiet' >";
							echo "<img src='$link_anh' width='230px' >";
						echo "</a>";
						echo "<br>";
						echo "<br>";
						echo "<a href='$link_chi_tiet' >";
							echo $tv_2['ten'];
						echo "</a>";
						echo "<div style='margin-top:5px' >";						
						echo $gia;
						echo "</div>";
						echo "<br>";
					}
					else 
					{
						echo "&nbsp;";
					}
				echo "</td>";
				if($i!=3)
				{
					$tv_2=mysqli_fetch_array($tv_1);
				}
			}
		echo "</tr>";
	}
	echo "</table>";
?>