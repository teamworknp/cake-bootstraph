<div class="row-fluid">
	<div class="span12">
		<h2><?php echo __('List %s', __('Accounts'));?></h2>

		<p>
			<?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table table-bordered">
			<tr>
				<th><?php echo $this->Paginator->sort('id');?></th>
				<th><?php echo $this->Paginator->sort('name');?></th>
				<th><?php echo $this->Paginator->sort('account_group_id');?></th>
				<th><?php echo $this->Paginator->sort('currency_id');?></th>
				<th><?php echo $this->Paginator->sort('suspend');?></th>
				<th><?php echo $this->Paginator->sort('code');?></th>
				<th><?php echo $this->Paginator->sort('opening_balance');?></th>
				<th><?php echo $this->Paginator->sort('note');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($accounts as $account): ?>
			<tr>
				<td><?php echo h($account['Account']['id']); ?>&nbsp;</td>
				<td><?php echo h($account['Account']['name']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($account['AccountGroup']['name'], array('controller' => 'account_groups', 'action' => 'view', $account['AccountGroup']['id'])); ?>
				</td>
				<td>
					<?php echo "IDR"; ?>
				</td>
				<td><?php echo h($account['Account']['suspend']); ?>&nbsp;</td>
				<td><?php echo h($account['Account']['code']); ?>&nbsp;</td>
				<td><?php echo h($account['Account']['opening_balance']); ?>&nbsp;</td>
				<td><?php echo h($account['Account']['note']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $account['Account']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $account['Account']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $account['Account']['id']), null, __('Are you sure you want to delete # %s?', $account['Account']['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>

		<div class="pagination" style='text-align:center'>
			<ul>
				<?php
					echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
					echo $this->Paginator->numbers(array('separator' => '</li><li>', 'currentClass' => 'disabled', 'before' => '<li>', 'after' => '</li>'));
					echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
				?>
				</ul>
			</div><!-- .pagination -->
	</div>
	
</div>