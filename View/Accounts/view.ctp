<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Account');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($account['Account']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Name'); ?></dt>
			<dd>
				<?php echo h($account['Account']['name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Account Group'); ?></dt>
			<dd>
				<?php echo $this->Html->link($account['AccountGroup']['name'], array('controller' => 'account_groups', 'action' => 'view', $account['AccountGroup']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Currency'); ?></dt>
			<dd>
				<?php echo "IDR"; ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Suspend'); ?></dt>
			<dd>
				<?php echo h($account['Account']['suspend']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Code'); ?></dt>
			<dd>
				<?php echo h($account['Account']['code']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Opening Balance'); ?></dt>
			<dd>
				<?php echo h($account['Account']['opening_balance']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Note'); ?></dt>
			<dd>
				<?php echo h($account['Account']['note']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Account')), array('action' => 'edit', $account['Account']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Account')), array('action' => 'delete', $account['Account']['id']), null, __('Are you sure you want to delete # %s?', $account['Account']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Accounts')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Account')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Account Groups')), array('controller' => 'account_groups', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Account Group')), array('controller' => 'account_groups', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Currencies')), array('controller' => 'currencies', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Currency')), array('controller' => 'currencies', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Journal Details')), array('controller' => 'journal_details', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Journal Detail')), array('controller' => 'journal_details', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Deposite Details')), array('controller' => 'deposite_details', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Deposite Detail')), array('controller' => 'deposite_details', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Payment Details')), array('controller' => 'payment_details', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Payment Detail')), array('controller' => 'payment_details', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Cash Banks')), array('controller' => 'cash_banks', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Cash Bank')), array('controller' => 'cash_banks', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Gltrans')), array('controller' => 'gltrans', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Gltran')), array('controller' => 'gltrans', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Journal Details')); ?></h3>
	<?php if (!empty($account['JournalDetail'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Journal Id'); ?></th>
				<th><?php echo __('Account Id'); ?></th>
				<th><?php echo __('D Amount'); ?></th>
				<th><?php echo __('C Amount'); ?></th>
				<th><?php echo __('Memo'); ?></th>
				<th><?php echo __('Department Id'); ?></th>
				<th><?php echo __('Project Id'); ?></th>
				<th><?php echo __('Ref Id'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($account['JournalDetail'] as $journalDetail): ?>
			<tr>
				<td><?php echo $journalDetail['id'];?></td>
				<td><?php echo $journalDetail['journal_id'];?></td>
				<td><?php echo $journalDetail['account_id'];?></td>
				<td><?php echo $journalDetail['d_amount'];?></td>
				<td><?php echo $journalDetail['c_amount'];?></td>
				<td><?php echo $journalDetail['memo'];?></td>
				<td><?php echo $journalDetail['department_id'];?></td>
				<td><?php echo $journalDetail['project_id'];?></td>
				<td><?php echo $journalDetail['ref_id'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'journal_details', 'action' => 'view', $journalDetail['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'journal_details', 'action' => 'edit', $journalDetail['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'journal_details', 'action' => 'delete', $journalDetail['id']), null, __('Are you sure you want to delete # %s?', $journalDetail['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Journal Detail')), array('controller' => 'journal_details', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Deposite Details')); ?></h3>
	<?php if (!empty($account['DepositeDetail'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Deposite Id'); ?></th>
				<th><?php echo __('Account Id'); ?></th>
				<th><?php echo __('Amount'); ?></th>
				<th><?php echo __('Project Id'); ?></th>
				<th><?php echo __('Department Id'); ?></th>
				<th><?php echo __('Memo'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($account['DepositeDetail'] as $depositeDetail): ?>
			<tr>
				<td><?php echo $depositeDetail['id'];?></td>
				<td><?php echo $depositeDetail['deposite_id'];?></td>
				<td><?php echo $depositeDetail['account_id'];?></td>
				<td><?php echo $depositeDetail['amount'];?></td>
				<td><?php echo $depositeDetail['project_id'];?></td>
				<td><?php echo $depositeDetail['department_id'];?></td>
				<td><?php echo $depositeDetail['memo'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'deposite_details', 'action' => 'view', $depositeDetail['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'deposite_details', 'action' => 'edit', $depositeDetail['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'deposite_details', 'action' => 'delete', $depositeDetail['id']), null, __('Are you sure you want to delete # %s?', $depositeDetail['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Deposite Detail')), array('controller' => 'deposite_details', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Payment Details')); ?></h3>
	<?php if (!empty($account['PaymentDetail'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Payment Id'); ?></th>
				<th><?php echo __('Account Id'); ?></th>
				<th><?php echo __('Amount'); ?></th>
				<th><?php echo __('Project Id'); ?></th>
				<th><?php echo __('Department Id'); ?></th>
				<th><?php echo __('Memo'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($account['PaymentDetail'] as $paymentDetail): ?>
			<tr>
				<td><?php echo $paymentDetail['id'];?></td>
				<td><?php echo $paymentDetail['payment_id'];?></td>
				<td><?php echo $paymentDetail['account_id'];?></td>
				<td><?php echo $paymentDetail['amount'];?></td>
				<td><?php echo $paymentDetail['project_id'];?></td>
				<td><?php echo $paymentDetail['department_id'];?></td>
				<td><?php echo $paymentDetail['memo'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'payment_details', 'action' => 'view', $paymentDetail['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'payment_details', 'action' => 'edit', $paymentDetail['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'payment_details', 'action' => 'delete', $paymentDetail['id']), null, __('Are you sure you want to delete # %s?', $paymentDetail['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Payment Detail')), array('controller' => 'payment_details', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Cash Banks')); ?></h3>
	<?php if (!empty($account['CashBank'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Name'); ?></th>
				<th><?php echo __('Bank Branch'); ?></th>
				<th><?php echo __('Address'); ?></th>
				<th><?php echo __('Rek Number'); ?></th>
				<th><?php echo __('Rek Name'); ?></th>
				<th><?php echo __('Account Name'); ?></th>
				<th><?php echo __('Account Type'); ?></th>
				<th><?php echo __('Currency Id'); ?></th>
				<th><?php echo __('Account Id'); ?></th>
				<th><?php echo __('Balance'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($account['CashBank'] as $cashBank): ?>
			<tr>
				<td><?php echo $cashBank['id'];?></td>
				<td><?php echo $cashBank['name'];?></td>
				<td><?php echo $cashBank['bank_branch'];?></td>
				<td><?php echo $cashBank['address'];?></td>
				<td><?php echo $cashBank['rek_number'];?></td>
				<td><?php echo $cashBank['rek_name'];?></td>
				<td><?php echo $cashBank['account_name'];?></td>
				<td><?php echo $cashBank['account_type'];?></td>
				<td><?php echo $cashBank['currency_id'];?></td>
				<td><?php echo $cashBank['account_id'];?></td>
				<td><?php echo $cashBank['balance'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'cash_banks', 'action' => 'view', $cashBank['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'cash_banks', 'action' => 'edit', $cashBank['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cash_banks', 'action' => 'delete', $cashBank['id']), null, __('Are you sure you want to delete # %s?', $cashBank['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Cash Bank')), array('controller' => 'cash_banks', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Gltrans')); ?></h3>
	<?php if (!empty($account['Gltran'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Trans Id'); ?></th>
				<th><?php echo __('Account Id'); ?></th>
				<th><?php echo __('Project Id'); ?></th>
				<th><?php echo __('Department Id'); ?></th>
				<th><?php echo __('Memo'); ?></th>
				<th><?php echo __('Debet'); ?></th>
				<th><?php echo __('Credit'); ?></th>
				<th><?php echo __('Gl Type Id'); ?></th>
				<th><?php echo __('Gl Date'); ?></th>
				<th><?php echo __('Gl Ref'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($account['Gltran'] as $gltran): ?>
			<tr>
				<td><?php echo $gltran['id'];?></td>
				<td><?php echo $gltran['trans_id'];?></td>
				<td><?php echo $gltran['account_id'];?></td>
				<td><?php echo $gltran['project_id'];?></td>
				<td><?php echo $gltran['department_id'];?></td>
				<td><?php echo $gltran['memo'];?></td>
				<td><?php echo $gltran['debet'];?></td>
				<td><?php echo $gltran['credit'];?></td>
				<td><?php echo $gltran['gl_type_id'];?></td>
				<td><?php echo $gltran['gl_date'];?></td>
				<td><?php echo $gltran['gl_ref'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'gltrans', 'action' => 'view', $gltran['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'gltrans', 'action' => 'edit', $gltran['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'gltrans', 'action' => 'delete', $gltran['id']), null, __('Are you sure you want to delete # %s?', $gltran['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Gltran')), array('controller' => 'gltrans', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
