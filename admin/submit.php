<?php
$title = "设置";
//防止后台设置的参数被过滤
$safe = 0;
include './head.php';
$step = $_POST['step'];
if ($step == "pwd") {
	if ($conf['pwd']==md5($_POST['oldpwd'].$conf['salt'])&&$_POST['newpwd']==$_POST['repwd']) {
		if($_POST['user']==""){
		$user = $conf['admin'];
		}else{
		$user = $_POST['user'];
		}
		$pwd = md5($_POST['newpwd'].$conf['salt']);
		$result = $DB->query("UPDATE `config` SET `admin`='{$user}',`pwd`='{$pwd}' where id = 1");
		if ($result) {
			exit("<script type='text/javascript'>alert('设置成功，请重新登录');window.location.href='./login.php?logout'</script>");
		} else {
			exit("<script type='text/javascript'>alert('设置失败');window.location.href='./index.php'</script>");
		}
	}
} else if ($step == "set") {
	if ($_POST) {
		$title = $_POST['title'];
		$title2 = $_POST['title2'];
		$url = $_POST['weburl'];
		$ico = $_POST['ico'];
		$home = $_POST['home'];
		$description = $_POST['webdes'];
		$keywords = $_POST['webkey'];
		$gg = $_POST['webgg'];
		$tc = $_POST['tcgg'];
		$app = $_POST['app'];
		$qq = $_POST['zzqq'];
		$qun = $_POST['qqqun'];
		$icp = $_POST['icpurl'];
		$ewm = $_POST['ewmurl'];
		$audio = $_POST['audiourl'];
		$head = $_POST['header'];
		$foot = $_POST['footer'];
		
		$result = $DB->query("UPDATE `config` SET `title`='{$title}',`title2`='{$title2}',`weburl`='{$url}',`ico`='{$ico}',`home`='{$home}',`webkey`='{$keywords}',`webdes`='{$description}',`webgg`='{$gg}',`tcgg`='{$tc}',`app`='{$app}',`zzqq`='{$qq}',`qqqun`='{$qun}',`icpurl`='{$icp}',`ewmurl`='{$ewm}',`audiourl`='{$audio}',`header`='{$head}',`footer`='{$foot}' where id = 1");
		if ($result) {
			exit("<script type='text/javascript'>alert('设置成功');window.location.href='./index.php'</script>");
		} else {
			exit("<script type='text/javascript'>alert('设置失败');window.location.href='./index.php'</script>");
		}
	}
}else{
exit("<script type='text/javascript'>alert('设置失败，请不要改动入口参数！');window.location.href='./index.php'</script>");
}
?>