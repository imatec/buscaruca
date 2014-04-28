<?php echo $this->Form->create('User', array('class' => 'form-signin')); ?>
    <h2 class="form-signin-heading">Please sign in</h2>
        <?php 
        echo $this->Form->input('username', array('class' => 'form-control'));
        echo $this->Form->input('password', array('class' => 'form-control'));
        echo $this->Form->button('Sign in', array('class' => 'btn btn-lg btn-primary btn-block', 'type' => 'submit'));
    	?>
<?php echo $this->Form->end(); ?>