<div class="row-fluid" >
	<div class="span12">
		<h2><?php echo __('List %s', __('Partners'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table table-bordered" style='width:100%'>
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('name');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('alias');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('partner_type_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('bussines_type_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('employee_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('credit_limit');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('status_credit_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('taxnumber');?></th>
			
			
				
		
			</tr>
		<?php foreach ($partners as $partner): ?>
			<tr>
				<td><?php echo h($partner['Partner']['id']); ?>&nbsp;</td>
				<td><?php echo h($partner['Partner']['name']); ?>&nbsp;</td>
				<td><?php echo h($partner['Partner']['alias']); ?>&nbsp;</td>
				<td><?php echo h($partner['Partner']['partner_type_id']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($partner['BussinesType']['name'], array('controller' => 'bussines_types', 'action' => 'view', $partner['BussinesType']['id'])); ?>
				</td>
				<td>
					<?php echo $this->Html->link($partner['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $partner['Employee']['id'])); ?>
				</td>
				<td><?php echo h($partner['Partner']['credit_limit']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($partner['StatusCredit']['name'], array('controller' => 'status_credits', 'action' => 'view', $partner['StatusCredit']['id'])); ?>
				</td>
				<td><?php echo h($partner['Partner']['taxnumber']); ?>&nbsp;</td>
				
				
				
				
			
			</tr>
		<?php endforeach; ?>
		</table>

		<?php echo $this->BootstrapPaginator->pagination(); ?>
	</div>
	
</div>