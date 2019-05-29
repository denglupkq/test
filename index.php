<?php
include("cery.php");
?>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<link rel="stylesheet" href="css/index.css" type="text/css" />
	</head>
	<body>
		<?php
			echo include("head.php");
			
			?>
		<div class="index">
			<div>
				<img src="img/jiaju.png" width="100%" />
			</div>
			<div class="body">
				<br />
				<b><a style="font-size: 30px;">最新产品</a></b><a href="shangpinleibiao.php" style="float: right;">查看全部</a>	</div>
			<div>
					<td><img src="img/t010a329dbaec49d6e1.jpg" /></td>
					<td><img src="img/t011d41ff998bfb5d36.jpg" /></td>
					<td><img src="img/t013930819492cada3f.jpg" /></td>
			</div>	
			<div style="height: 70px;"></div>
			<?php
				echo include("foot.php");
				?>		
	</body>
</html>
