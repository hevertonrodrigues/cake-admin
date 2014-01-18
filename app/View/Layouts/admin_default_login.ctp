<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('simpliq/bootstrap.min.css');
    echo $this->Html->css('simpliq/style.min.css');
		echo $this->Html->css('simpliq/retina.min.css');
  ?>




	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="js/simpliq/respond.min.js"></script>
      <script src= "css/simpliq/ie6-8.css"></script>
	<![endif]-->

	<!-- start: JavaScript-->
	<!--[if !IE]>-->
      <?php echo $this->Html->script('simpliq/jquery-2.0.3.min.js'); ?>
	<!--<![endif]-->

	<!--[if IE]>
      <?php echo $this->Html->script('simpliq/jquery-1.10.2.min.js'); ?>
	<![endif]-->


	<!--[if IE]>
		<script type="text/javascript">	window.jQuery || document.write("<script src='js/simpliq/jquery-1.10.2.min.js'>"+"<"+"/script>"); </script>
	<![endif]-->
    <?php echo $this->Html->script('simpliq/jquery-migrate-1.2.1.min.js'); ?>
    <?php echo $this->Html->script('simpliq/bootstrap.min.js'); ?>
	<!-- theme scripts -->
    <?php echo $this->Html->script('simpliq/core.min.js'); ?>
    <?php echo $this->Html->script('simpliq/custom.min.js'); ?>
	<!-- end: JavaScript-->

  <?php
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
  <div class="container">
    <div class="row">
      <?php
        echo $this->element( 'flash_success', array( 'message' => $this->Session->flash('success') ) );
        echo $this->element( 'flash_error', array( 'message' => $this->Session->flash('error') ) );
        echo $this->Session->flash('auth');
      ?>
      <div class="row">
        <div class="login-box">
          <h2>Login to your account</h2>
          <?php echo $this->fetch('content'); ?>
        </div>
      </div><!--/row-->
    </div><!--/row-->
  </div><!--/container-->
</body>
</html>
