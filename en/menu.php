<?php
include "../func/header.php";
?>
<!-- Navbar -->
<nav class="navbar navbar-default" role="navigation" style="background-color: #f8f7f5; margin-bottom: 0px;">
	<div class="container-fluid">
    	<div class="navbar-header">
    		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
    		</button>
    		<a href="index.php">
                <img src="/czmec/assets/img/logo3.png" class="navbar-brand" />
            </a>
    	</div>

    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    		<ul class="nav navbar-nav navbar-right">
				<!-- <li class="active"><a href="index.php">Home</a></li> -->
        		<li class="dropdown">
        			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile<b class="caret"></b></a>
        			<ul class="dropdown-menu">
					  <li><a href="profile.php">School Introduction</a></li>
					  <li><a href="/czmec/en/profile/history.php">Historical Evolution</a></li>
					  <li><a href="profile.php">The Present Leader</a></li>
					  <li><a href="profile.php">Institution setting</a></li>
					  <li><a href="profile.php">Teaching Staff</a></li>
					  <li><a href="profile.php">Leadership Care</a></li>
					  <li><a href="profile.php">Honor the Honor</a></li>
					  <li><a href="profile.php">Propagandist Video</a></li>
        			</ul>
        		</li>
				<li><a href="department.php">Department</a></li>
				<li class="dropdown">
        			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Enrolment and employment<b class="caret"></b></a>
        			<ul class="dropdown-menu">
					  <li><a href="http://www.czimt.edu.cn/s/56/main.htm">Enrolment</a></li>
					  <li><a href="http://czimt.91job.gov.cn/">Employment</a></li>
        			</ul>
        		</li>
				<li class="dropdown">
        			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Continuing Education<b class="caret"></b></a>
        			<ul class="dropdown-menu">
					  <li><a href="http://www.czimt.edu.cn/s/39/main.htm">Continuing Education</a></li>
					  <li><a href="http://jxjy1.czmec.cn/diploma/">Higher Education</a></li>
					  <li><a href="http://jxjy2.czmec.cn:8080/train/jsp/project/showRecommends">Training</a></li>
        			</ul>
        		</li>
				<li class="dropdown">
        			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Cooperation and Exchange<b class="caret"></b></a>
        			<ul class="dropdown-menu">
					  <li><a href="http://www.czimt.edu.cn/s/42/main.htm">Enterprise Cooperation</a></li>
					  <li><a href="http://www.czmec.cn/s/44/main.htm"> Scientific and technological services </a></li>
					  <li><a href="http://www.czimt.edu.cn/s/124/main.htm"> International cooperation and exchange </a></li>
        			</ul>
        		</li>
				<li class="dropdown">
        			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Culture<b class="caret"></b></a>
        			<ul class="dropdown-menu">
					  <li><a href="culture.php">School Motto</a></li>
					  <li><a href="culture.php">Teaching Style of Learning </a></li>
					  <li><a href="culture.php">Graph theory and electrical machinery </a></li>
					  <li><a href="culture.php">Student growth </a></li>
					  <li><a href="culture.php">Teacher development </a></li>
					  <li><a href="culture.php">Brand characteristics </a></li>
        			</ul>
        		</li>
        		<li><a href="contact.php">Information</a></li>
        		<li><a href="/czmec/index.php">中文</a></li>
    		</ul>
    	</div>
	</div>
</nav>
<!-- end navbar -->