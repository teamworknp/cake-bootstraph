
<div id="page-container" class="row-fluid">

	<div id="sidebar" class="span3">
		
		<div class="actions">
			
			<ul class="nav nav-list bs-docs-sidenav">			
						<li><?php echo $this->Html->link(__('Edit Profile'), array('action' => 'edit', $profile['Profile']['id']), array('class' => '')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Profile'), array('action' => 'delete', $profile['Profile']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $profile['Profile']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- .nav nav-list bs-docs-sidenav -->
			
		</div><!-- .actions -->
		
	</div><!-- #sidebar .span3 -->
	
	<div id="page-content" class="span9">
		
		<div class="profiles view">

			<h2><?php  echo __('Profile'); ?></h2>

			<table class="table table-striped table-bordered">
				<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($profile['Profile']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('User'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($profile['User']['id'], array('controller' => 'users', 'action' => 'view', $profile['User']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('First Name'); ?></strong></td>
		<td>
			<?php echo h($profile['Profile']['first_name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Middle Name'); ?></strong></td>
		<td>
			<?php echo h($profile['Profile']['middle_name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Last Name'); ?></strong></td>
		<td>
			<?php echo h($profile['Profile']['last_name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Birth Day'); ?></strong></td>
		<td>
			<?php echo h($profile['Profile']['birth_day']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Fullname'); ?></strong></td>
		<td>
			<?php echo h($profile['Profile']['fullname']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Gender'); ?></strong></td>
		<td>
			<?php echo h($profile['Profile']['gender']); ?>
			&nbsp;
		</td>
</tr>			</table><!-- .table table-striped table-bordered -->
			
		</div><!-- .view -->

			
	</div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
