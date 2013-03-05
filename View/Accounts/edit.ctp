<div class="row-fluid">
	<div class="span9">
		<?php echo $this->Form->create('Account', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Edit %s', __('Account')); ?></legend>
				<?php
				echo $this->Form->input('name');
				echo $this->Form->input('account_group_id');
				echo $this->Form->input('currency_id');
				echo $this->Form->input('suspend');
				echo $this->Form->input('code');
				echo $this->Form->input('opening_balance');
				echo $this->Form->input('note');
				echo $this->Form->hidden('id');
				?>
				<?php echo $this->Form->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->Form->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Account.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Account.id'))); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Accounts')), array('action' => 'index'));?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Account Groups')), array('controller' => 'account_groups', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Account Group')), array('controller' => 'account_groups', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Currencies')), array('controller' => 'currencies', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Currency')), array('controller' => 'currencies', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Journal Details')), array('controller' => 'journal_details', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Journal Detail')), array('controller' => 'journal_details', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Deposite Details')), array('controller' => 'deposite_details', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Deposite Detail')), array('controller' => 'deposite_details', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Payment Details')), array('controller' => 'payment_details', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Payment Detail')), array('controller' => 'payment_details', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Cash Banks')), array('controller' => 'cash_banks', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Cash Bank')), array('controller' => 'cash_banks', 'action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Gltrans')), array('controller' => 'gltrans', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Gltran')), array('controller' => 'gltrans', 'action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>