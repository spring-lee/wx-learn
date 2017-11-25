<?php 
require_once(dirname(dirname(__FILE__)).'/auto_load.php');
$menu = menu::read_menu();

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="description" content="Spring Box supervise">
	<title>SpringBox后台管理</title>
	<link rel="stylesheet" href="css/global.css">
	<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/menu.css">
</head>
<body>
	<!-- 页头 -->
	<header>
		<div class="head">
			<h1 class="siteName">SprigBox后台管理</h1>
		</div>
	</header>

	<!-- 主体 -->
	<div class="body">
		<!-- 导航 -->
		<div class="nav">
			<ul>
				<li class="unit"><a href="#">菜单管理</a><div class="active"><span class="fa fa-anchor"></span></div></li>
				<li class="wall"><hr></li>
				<li class="unit"><a href="#">备用1</a></li>
				<li class="wall"><hr></li>
				<li class="unit"><a href="#">备用2</a></li>
			</ul>	
		</div>
		
		<!-- 内容 -->
		<div class="content">
			<!-- 当前路径 -->
			<div class="path">
				/菜单管理
			</div>

			<hr>

			<!-- 菜单管理内容 -->
			<div class="menu-content">
				<!-- 一级菜单选择 -->
				<div class="top-level-s">
					<button type="button" class="editing">
						<span class="tit hidden">testMenu1</span>
						<span class="edit-flag fa fa-cogs fa-lg"></span>
					</button>
					<button type="button">
						<span class="tit">testMenu2</span>
						<span class="edit-flag fa fa-cogs fa-lg hidden"></span>
					</button>
					<button type="button">
						<span class="tit"><span class="fa fa-plus fa-lg"></span></span>
						<span class="edit-flag fa fa-cogs fa-lg hidden"></span>
					</button>
				</div>
				<!-- 一级菜单内容 -->
				<div class="top-level-c">
					<form action="">
						<!-- 一级菜单基础设置 -->
						<div class="tlmbs">
							<!-- 菜单名 -->
							<div class="tmn-group">
								<label for="t-menu-name">菜单名</label>
								<input type="text" id="t-menu-name" name="t-menu-name" value="textMenu1">
							</div>
							<!-- 菜单类型 -->
							<div class="tmt-group">
								<label for="t-menu-type">菜单类型</label>
								<select id="t-menu-type" name="t-menu-type">
									<option value="">父菜单</option>
									<option value="">click</option>
									<option value="">view</option>
								</select>
							</div>

							<div class="clear-float"></div>
						</div>

						<hr>

						<div class="unit-top">
							<div class="secondary-abb">
								<button type="button">
									testSonMenu1
								</button>
								<button type="button">
									<span class="fa fa-plus"></span>
								</button>
							</div>
							<div class="secondary-acb">
								<div>
									<label for="menu-name">菜单名</label>
									<input type="text" id="menu-name">
								</div>
								<div>
									<label for="menu-type">菜单类型</label>
									<select name="" id="menu-type">
										<option value="">click</option>
										<option value="">view</option>
									</select>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>	

		<div class="clear-float"></div>
	</div>
</body>
</html>