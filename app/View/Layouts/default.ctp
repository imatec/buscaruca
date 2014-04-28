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
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a>Welcome <b><?php echo AuthComponent::user('username'); ?></b></a>
            </li>
            <li><?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout'))?>
            </li>
          </ul>
          <!--
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>-->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">

          <ul class="nav nav-sidebar">
            <li><?php echo $this->Html->link(__('All Searches'), '/searches'); ?></li>
            <li><?php echo $this->Html->link(__('New Search'), '/searches/add'); ?></li>
            <li><?php echo $this->Html->link(__('All Prospects'), '/prospects'); ?></li>
            <li><?php echo $this->Html->link(__('New Prospect'), '/prospects/add'); ?></li>
          </ul>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <?php echo $this->Session->flash(); ?>
          <?php echo $this->Session->flash('auth'); ?>
			    <?php echo $this->fetch('content'); ?>
          
        </div>
      </div>
    </div>
    <div class="panel panel-default">
	   <?php echo $this->element('sql_dump'); ?>
    </div>
</body>
</html>
