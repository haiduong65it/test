<br><br>
<h2 style="font-family:cursive ;">SẢN PHẨM NỔI BẬT</h2>
<br><br>
<center>
	<?php 
		$tv="select id,ten,hinh_anh from san_pham where noi_bat='co' order by id desc limit 0,3";
		$tv_1=mysqli_query($connect,$tv);
		while($tv_2=mysqli_fetch_array($tv_1))
		{
			$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
			$link_chi_tiet="?thamso=chi_tiet_san_pham&id=".$tv_2['id'];
			echo "<a href='$link_chi_tiet' >";
				echo "<img src='$link_anh' width='150px' >";
			echo "</a>";
			echo "<br><br>";
			echo $tv_2['ten'];
			echo "<br>";
			echo "<br>";
		}
	?>
</center>
