<?php $pagename = basename($_SERVER['PHP_SELF']); ?>
<div class="col-xs-12 col-sm-12 col-md-3">	
	<div class="sidebar">
		<h4>Department</h4>					
		<ul class="sidemenu">
			<li <?php if ($pagename == "about.php") echo 'class="active"'; ?>><a href='about.php'>About Department</a></li>
			<li <?php if ($pagename == "") echo 'class="active"'; ?>><a href=''>About Department</a></li>
			<li <?php if ($pagename == "") echo 'class="active"'; ?>><a href=''>About Department</a></li>
		</ul>	
	</div>	
</div>