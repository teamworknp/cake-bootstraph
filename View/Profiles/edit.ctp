
<div id="page-container" class="row-fluid">

	<div id="sidebar" class="span3">
		
		<div class="actions">
		
			<ul class="nav nav-list bs-docs-sidenav">
										<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Profile.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Profile.id'))); ?></li>
										<li><?php echo $this->Html->link(__('List Profiles'), array('action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
			</ul><!-- .nav nav-list bs-docs-sidenav -->
		
		</div><!-- .actions -->
		
	</div><!-- #sidebar .span3 -->
	
	<div id="page-content" class="span9">

		<div class="profiles form">
		
			<?php echo $this->Form->create('Profile'); ?>
				<fieldset>
					<h2><?php echo __('Edit Profile'); ?></h2>
				<?php
		echo "<div class='control-group'>";
		echo $this->Form->input('id', array('class' => 'span12'));
		echo "</div>";
		echo "<div class='control-group'>";
		echo $this->Form->input('user_id', array('class' => 'span12'));
		echo "</div>";
		echo "<div class='control-group'>";
		echo $this->Form->input('first_name', array('class' => 'span12'));
		echo "</div>";
		echo "<div class='control-group'>";
		echo $this->Form->input('middle_name', array('class' => 'span12'));
		echo "</div>";
		echo "<div class='control-group'>";
		echo $this->Form->input('last_name', array('class' => 'span12'));
		echo "</div>";
		echo "<div class='control-group'>";
		echo $this->Form->input('birth_day', array('class' => 'span12'));
		echo "</div>";
		echo "<div class='control-group'>";
		echo $this->Form->input('fullname', array('class' => 'span12'));
		echo "</div>";
		echo "<div class='control-group'>";
		echo $this->Form->input('gender', array('class' => 'span12'));
		echo "</div>";
	?>
				</fieldset>
			<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>
<?php echo $this->Form->end(); ?>
			
		</div>
			
	</div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
