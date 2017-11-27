<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>spring`s resume</title>
	<style>
		body{
			height: 100%;
			background-color: #008B8B;
		}
		h1{
			margin: 0;
			padding: 0;
		}
		.float-clear{
			clear: both;
		}
		.content-box{
			width: 1000px;
			margin: 0 auto;
		}
		.card{
			background-color: white;
			box-shadow: 3px 3px 4px #AAAAAA;
		}
		.title{
			float: left;
			background-color: #2AA8D9;
			margin-left: -20px;
			padding: 10px;
			color: white;
		}
		.base-info{
			padding: 20px;
			margin-bottom: 20px;
		}
		.base-info p{
			font-size: 1.5em;
			font-weight: bold;
			color: #121212;
		}
		.base-info-left{
			float: left;
			width: 500px;
			border-right: 2px solid #AAAAAA;
		}
		.base-info-right{
			float: left;
			width: 438px;
			padding-left: 20px;
		}
		.base-info .something{
			color: #CD2626;
		}
		.more-info{
			width: 1000px;
			margin-bottom: 20px;
		}
		.education{
			width: 300px;
			height: 40px;
			float: left;
			margin-right: 20px;
			padding: 10px;
			background-color: #282828;
			line-height: 40px;
			text-align: center;
			letter-spacing: 5px;
			font-size: 1.2em;
			font-weight: bold;
			cursor: pointer;
		}
		.education:hover{
			background-color: white;
		}
		.work{
			width: 300px;
			height: 40px;
			float: left;
			margin-right: 20px;
			padding: 10px;
			background-color: #282828;
			line-height: 40px;
			text-align: center;
			letter-spacing: 5px;
			font-size: 1.2em;
			font-weight: bold;
			cursor: pointer;
		}
		.work:hover{
			background-color: white;
		}
		.skill{
			width: 300px;
			height: 40px;
			float: left;
			padding: 10px;
			background-color: #282828;
			line-height: 40px;
			text-align: center;
			letter-spacing: 5px;
			font-size: 1.2em;
			font-weight: bold;
			cursor: pointer;
		}
		.skill:hover{
			background-color: white;
		}
		.more-info-content{
			padding: 20px;
		}
		.item-des{
			padding-left: 40px;
		}
		.QRcode{
			float: left;
		}
		.QRcode-info{
			display: block;
			float: left;
		}
	</style>
</head>
<body>
	<div class="content-box">
		<div class="base-info card">
			<div class="title"><h1>基本信息</h1></div>
			<div class="float-clear"></div>
			<div class="base-info-left">
				<p>姓名：李春光</p>
				<p>性别：男</p>
				<p>年龄：23</p>
				<p>学历：本科</p>
				<p>工作经验：1年</p>
				<p>联系电话：15229292110</p>
				<p>邮箱：939941249@qq.com</p>
			</div>
			<div class="base-info-right">
				<p>求职岗位：PHP工程师</p>
				<hr>
				<p class="something">热爱编程，热爱生活。坚信技术改变生活，改变世界。乐意不断地学习、接受新技术</p>
				<p class="something">行寻求一份自己喜欢工作，为自己热爱的行业做出一点贡献。</p>
			</div>	
			<div class="float-clear"></div>		
		</div>
		<!-- <div class="more-info">
			<div class="education card">教育经历</div>
			<div class="work card">工作经历</div>
			<div class="skill card">技能&作品</div>
			<div class="float-clear"></div>
		</div> -->
		<div class="more-info-content card">
			<div class="education-content">
				<div class="title"><h1>教育经历</h1></div>
				<div class="float-clear"></div>
				<p>时间：2012.09 - 2017.07</p>
				<p>院校：西安邮电大学</p>
				<p>专业：信息安全</p>
			</div>
			<div class="work-content">
				<div class="title"><h1>工作经历</h1></div>
				<div class="float-clear"></div>
				<p>时间：2015.06 - 2016.05</p>
				<p>地点：西安安盟科技有限公司</p>
				<p>岗位：PHP工程师</p>
				<div class="title"><h1>项目经验</h1></div>
				<div class="float-clear"></div>
				<p>项目名称：大型仪器设备共享管理系统</p>
				<p>项目时间：2015.06 - 2015.09</p>
				<p>项目描述：</p>
				<p class="item-des">
					整合高校实验室与大型仪器信息，对处于空闲时间的资源提供外借，以提高利用率，并便于师生教育与学习。
				</p>
				<p>负责内容：</p>
				<p class="item-des">
					1.协同设计数据库 <br>
					2.按功能模块开发后端代码 <br>
					3.协同完成部分前端代码 <br>
					4.测试完成模块功能并修改相应bug <br>
					5.后期维护
				</p>
				<hr>
				<p>项目名称：高校教务综合管理系统</p>
				<p>项目时间：2015.09 - 2016.05</p>
				<p>项目描述：</p>
				<p class="item-des">
					该项目是对现有高校机教务工作的信息共享化的线上管理系统。有助于高校教务工作的进行，并连同各个部门信息，实现信息一体化。 <br>
					此系统完成多种功能。对于学生可以查询多数信息，包括自己的学籍信息，课程信息，学分信息，考试信息，教师信息，规划信息，考勤信息等等，并且有在线选课功能；对于管理者，可以查询同样乃至更多的信息，并且对整个教学过程进行监管。例如维护教材和课程信息，对课程进行排课，对教师的调课申请进行审批等等。
				</p>
				<p>负责内容：</p>
				<p class="item-des">
					1.协同设计数据库 <br>
					2.按功能模块开发后端代码 <br>
					3.协同完成部分前端代码 <br>
					4.测试完成模块功能并修改相应bug <br>
					5.后期维护
				</p>
			</div>
			<div class="skill-content">
				<div class="title"><h1>技能</h1></div>
				<div class="float-clear"></div>
				<p>前端技术及工具:HTML CSS Javascript JQuery Bootstrap</p>
				<p>后端技术及工具:PHP CodeIgniter Composer</p>
				<p>数据库技术及工具:mysql HeidiSQL</p>
				<p>常用开发环境:LAMP/WAMP</p>
				<p>其他工具:sublimeText PHPStorm git PS</p>
				<div class="title"><h1>作品</h1></div>
				<div class="float-clear"></div>
				<img src="0.jfif" alt="my wechat public accounts" class="QRcode">
				<p class="QRcode-info">最近学习微信开发做的公众号测试号，开发中...</p>
				<div class="float-clear"></div>
			</div>
		</div>
		
	</div>
</body>
</html>