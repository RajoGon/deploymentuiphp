<?php
echo '		
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		  <ul class="navbar-nav">
		    <li  class="nav-item">
		      <a id="username" class="nav-link" href="#">Hello User-Name</a>
		    </li>
		    <li class="nav-item';?> <?php if($thispage=='index') echo 'active';?> <?php echo'">
		      <a class="nav-link" href="./index.php">Cloud Deployment</a>
		    </li>
		    <li class="nav-item';?> <?php if($thispage=='history') echo 'active';?> <?php echo'">
		      <a class="nav-link" href="./history.php">Deployment History</a>
		    </li>

		  </ul>
		</nav>
		';

?>