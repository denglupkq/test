<?php
session_start();	
include ('cery.php');
if (isset($_POST["submit"])) {
	$sname = $_POST["sname"];
	$spwd = md5($_POST["spwd"]);
	$ucode=$_POST["scode"];
	$yanzheng=$_SESSION["authcode"];
	if ($sname && $spwd) {
		if($ucode==$yanzheng){
	
			$sql = "select id from yemian where sname='$sname' and spwd='$spwd'";
			$grey=mysql_query($sql);
            $greyc=mysql_fetch_row($grey);
			if (isset($greyc)) {
				$_SESSION['sname'] = $sname;
				$_SESSION['id']=$greyc[0];			
				echo "<script>alert('登录成功');window.location.href='liuyan.php';</script>";
				
			} else {
				echo "<script>alert('登录失败');window.location.href='denglu.php';</script>";
			}
			}else{
				echo "<script>alert('登录失败');window.location.href='denglu.php';</script>";			}
	} else {
		echo "<script>alert('提交失败');window.location.href='denglu.php';</script>";
	}
}
?>
<html>
				<div class="heads">	<?php echo include("head.php")?>
							<div style="background-image: url(img/t011e911e5e581f579a.jpg); background-repeat: no-repeat; height: 200px;">
				<table style="margin: 0px auto;">
					<tr>
						<td>用户名:</td>
						<td>
							<input type="text" name='sname' placeholder="请输入用户名"  />
						</td>
					</tr>
					<tr>
						<td>密码:</td>
						<td>
							<input type="password" name='spwd' placeholder="请输入密码">
						</td>
					</tr>
					<tr>
						<td>验证码:</td>
						<td>
							<input type="text" name="scode"/> <img src="code.php" onclick="this.src='code.php?nocache='+Math.random()" title="点击换一张" alt="点击换一张" />
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" name='submit' value='登录' /></td>
					</tr>
				</table>
			</form>
			<div style="height: 200px;"></div>
			<?php echo include("foot.php")?>
		</div>
</html>