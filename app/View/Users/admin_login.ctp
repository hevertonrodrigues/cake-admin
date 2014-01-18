<?php echo $this->Form->create('User', array( 'class' => 'form-horizontal', 'div' => false ) );?>
    <fieldset>
    <?php
        echo $this->Form->input('username', array( 'label' => false, 'placeholder' => 'usuário', 'class' => 'input-large col-xs-12' ) );
        echo $this->Form->input('password', array( 'label' => false, 'placeholder' => 'senha', 'class' => 'input-large col-xs-12' ) );
    ?>
      <div class="clearfix"></div>
    </fieldset>
<hr>
<?php echo $this->Form->end( array( 'label' => __('Login'), 'class' => 'btn btn-primary col-xs-12' ) );?>
<div class="clearfix"></div>
