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
		echo $this->fetch('meta');
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


	<!-- page scripts -->
    <?php echo $this->Html->script('simpliq/jquery-ui-1.10.3.custom.min.js'); ?>
    <?php echo $this->Html->script('simpliq/jquery.sparkline.min.js'); ?>
    <?php echo $this->Html->script('simpliq/jquery.chosen.min.js'); ?>
    <?php echo $this->Html->script('simpliq/jquery.cleditor.min.js'); ?>
    <?php echo $this->Html->script('simpliq/jquery.autosize.min.js'); ?>
    <?php echo $this->Html->script('simpliq/jquery.placeholder.min.js'); ?>
    <?php echo $this->Html->script('simpliq/jquery.maskedinput.min.js'); ?>
    <?php echo $this->Html->script('simpliq/jquery.inputlimiter.1.3.1.min.js'); ?>

    <?php echo $this->Html->script('simpliq/bootstrap-datepicker.min.js'); ?>
    <?php echo $this->Html->script('simpliq/bootstrap-timepicker.min.js'); ?>
    <?php echo $this->Html->script('simpliq/moment.min.js'); ?>
    <?php echo $this->Html->script('simpliq/daterangepicker.min.js'); ?>
    <?php echo $this->Html->script('simpliq/jquery.hotkeys.min.js'); ?>
    <?php echo $this->Html->script('simpliq/jquery.inputlimiter.1.3.1.min.js'); ?>
    <?php echo $this->Html->script('simpliq/bootstrap-wysiwyg.min.js'); ?>
    <?php echo $this->Html->script('simpliq/bootstrap-colorpicker.min.js'); ?>
    <?php echo $this->Html->script('simpliq/pages/form-elements.js'); ?>



  <?php
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<!-- start: Header -->
<header class="navbar">
  <div class="container">
    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".sidebar-nav.nav-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a id="main-menu-toggle" class="hidden-xs open"><i class="fa fa-bars"></i></a>
    <a class="navbar-brand col-lg-2 col-sm-1 col-xs-12" href="<?php echo $this->base . '/admin/'?>"><span>SimpliQ</span></a>
    <!-- start: Header Menu -->
    <div class="nav-no-collapse header-nav">
      <ul class="nav navbar-nav pull-right">
        <!-- start: User Dropdown -->
        <li class="dropdown">
          <a class="btn account dropdown-toggle" data-toggle="dropdown" href="index.html#">
            <div class="avatar"></div>
            <div class="user">
              <span class="hello">Welcome!</span>
              <span class="name">Łukasz Holeczek</span>
            </div>
          </a>
          <ul class="dropdown-menu">
            <li class="dropdown-menu-title">
            </li>
            <li><a href="index.html#"><i class="fa fa-user"></i> Profile</a></li>
            <li><a href="index.html#"><i class="fa fa-cog"></i> Settings</a></li>
            <li><a href="<?php echo $this->base . '/admin/users/logout'?>"><i class="fa fa-off"></i> Logout</a></li>
          </ul>
        </li>
      <!-- end: User Dropdown -->
      </ul>
    </div>
  <!-- end: Header Menu -->
  </div>
</header>
<!-- end: Header -->
<div class="container">
  <div class="row">
    <?php echo $this->element( 'admin_main_menu' ); ?>

    <!-- start: Content -->
    <div id="content" class="col-lg-10 col-sm-11">
      <?php
        echo $this->element( 'flash_success', array( 'message' => $this->Session->flash('success') ) );
        echo $this->element( 'flash_error', array( 'message' => $this->Session->flash('error') ) );
      ?>
			<?php echo $this->fetch('content'); ?>
    </div>
    <!-- end: Content -->
  </div><!--/row-->
</div><!--/container-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>Here settings can be configured...</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="clearfix"></div>
<footer>
  <p>
    <span class="hidden-phone" style="text-align:right;float:right">Desenvolvido por Heverton Rodrigues<a href="#" alt="Desenvolvido por Heverton Rodrigues"></a></span>
  </p>
	<?php echo $this->element('sql_dump'); ?>
</footer>
</html>
