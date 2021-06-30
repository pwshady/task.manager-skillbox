<?php
include ("log.php");
include ("pass.php");

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
	if (($_POST["login"] != "") && ($_POST["password"] != ""))
	{
		$key = array_search($_POST["login"], $log);
		if ($key)
		{
			if ($pass[$key] == $_POST["password"])
			{
				print "ok";
			}
			else
			{
				print "pass error";
			}
		}
		else
		{
			print "log error";
		};
	}
	else
	{
		print "no";
	};
};

include($_SERVER["DOCUMENT_ROOT"] . "/layouts/header.php");
?>
  <div class="header">
    	<div class="logo"><img src="i/logo.png" width="68" height="23" alt="Project" /></div>
        <div style="clear: both"></div>
    </div>
    
    	<table width="100%" border="0" cellspacing="0" cellpadding="0">
        	<tr>
            	<td class="left-collum-index">
				
					<h1>Возможности проекта —</h1>
					<p>Вести свои личные списки, например покупки в магазине, цели, задачи и многое другое. Делится списками с друзьями и просматривать списки друзей.</p>
					
				
				</td>
                <td class="right-collum-index">
					
					<div class="project-folders-menu">
						<ul class="project-folders-v">
						<li class="project-folders-v-active"><span>Авторизация</span></li>
						<li><a href="#">Регистрация</a></li>
						<li><a href="#">Забыли пароль?</a></li>
						</ul>
					<div style="clear: both;"></div>
					</div>
					<? if(isset($_GET["login"]) && ($_GET["login"] === "yes")): ?>
					<form action="\?login=yes" method="POST">
						<div class="index-auth">
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="iat">Ваш e-mail:* <br /> <input id="login_id" size="30" name="login" value="<?=htmlspecialchars($_POST["login"] ?? '')?>" required/></td>
								</tr>
								<tr>
									<td class="iat">Ваш пароль:* <br /> <input id="password_id" size="30" name="password" value="<?=htmlspecialchars($_POST["password"] ?? '')?>" required/></td>
								</tr>
								<tr>
									<td><input type="submit" value="Войти" /></td>
								</tr>
							</table>
						</div>
					</form>
					<? endif; ?>
				
				</td>
            </tr>
        </table>
    
    <div class="footer">&copy;&nbsp;<nobr>2018</nobr> Project.</div>


<?php
include($_SERVER["DOCUMENT_ROOT"] . "/layouts/headerfooter.php");
print ($_SERVER['REQUEST_METHOD']);
