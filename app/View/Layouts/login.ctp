<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Buscaruca
	</title>
	<?php
		//echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('dashboard');
    echo $this->Html->css('signin');    

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">BuscaRuca</a>
        </div>
        <div class="navbar-collapse collapse">
<!--
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
            
            <?php if(/*$logged_in*/FALSE): ?>
            <li>
              Wellcome <?php echo $current_user['username']; ?>
              </li>
              <li><?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout'))?></li>
            <?php else : ?>
            <li>
             <?php echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'logout'));?></li>
            <?php endif;?>
          </ul>
            -->
          <!--
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>-->
        </div>
      </div>
    </div>

    <div class="container">
          <?php echo $this->Session->flash(); ?>
          <?php echo $this->Session->flash('auth'); ?>
			    <?php echo $this->fetch('content'); ?>
    </div>
</body>
</html>
