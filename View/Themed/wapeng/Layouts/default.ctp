<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
			<?php echo $cakeDescription ?>:
			<?php echo $title_for_layout; ?>
		</title>
		<?php
			echo $this->Html->meta('icon');
			
			echo $this->fetch('meta');
			echo $this->Html->css('bootstrap');
			echo $this->Html->css('bootstrap-responsive');
			echo $this->Html->css('maincore');

			echo $this->fetch('css');
			
			echo $this->Html->script('libs/jquery');
			echo $this->Html->script('libs/bootstrap');
			echo $this->Html->script('libs/bootstrap-collaspse');
			
			echo $this->fetch('script');
		?>
	<style>
		
		
		
		
	
	</style>
	<script>
	$(document).ready(function()
			{
		 
			  $('#slider-button').click(function() {
				
			    if($(this).css("margin-left") == "0px")
			    {
			        $('#sidebar').animate({"margin-left": '-200'});
			        $('#slider-button').animate({"margin-left": '-200'});
			        $('#content').animate({"margin-left": '0'});
			    }
			    else
			    {
			        $('#sidebar').animate({"margin-left": '0'});
			        $('#slider-button').animate({"margin-left": '0'});
			        $('#content').animate({"margin-left": '210'});
			    }


			  });
			 });     
	
	</script>	
	</head>

	<body>
		
		<?php echo $this->element('menu/top_menu')?>
		
			<div id='head'></div>
  			<div id="main">
    			<div id="sidebar" class="span2">
    				
					<?php echo $this->element('menu/accordion')?>
    			</div>
    			
    
    			<div id="content">
    				 
      				<?php echo $this->Session->flash(); ?>
					<?php echo $this->fetch('content'); ?>
					
    			</div>
  			</div>
			<div id='footer'>
				<div align='center'>Kwadran.com</div>
			</div>
			
		
		
	</body>

</html>