<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Partner');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($partner['Partner']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Name'); ?></dt>
			<dd>
				<?php echo h($partner['Partner']['name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Alias'); ?></dt>
			<dd>
				<?php echo h($partner['Partner']['alias']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Partner Type Id'); ?></dt>
			<dd>
				<?php echo h($partner['Partner']['partner_type_id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Bussines Type'); ?></dt>
			<dd>
				<?php echo $this->Html->link($partner['BussinesType']['name'], array('controller' => 'bussines_types', 'action' => 'view', $partner['BussinesType']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Employee'); ?></dt>
			<dd>
				<?php echo $this->Html->link($partner['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $partner['Employee']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Credit Limit'); ?></dt>
			<dd>
				<?php echo h($partner['Partner']['credit_limit']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Status Credit'); ?></dt>
			<dd>
				<?php echo $this->Html->link($partner['StatusCredit']['name'], array('controller' => 'status_credits', 'action' => 'view', $partner['StatusCredit']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Taxnumber'); ?></dt>
			<dd>
				<?php echo h($partner['Partner']['taxnumber']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Pkpnumber'); ?></dt>
			<dd>
				<?php echo h($partner['Partner']['pkpnumber']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Status'); ?></dt>
			<dd>
				<?php echo h($partner['Partner']['status']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Balance'); ?></dt>
			<dd>
				<?php echo h($partner['Partner']['balance']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Currency'); ?></dt>
			<dd>
				<?php echo $this->Html->link($partner['Currency']['name'], array('controller' => 'currencies', 'action' => 'view', $partner['Currency']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Payment Term'); ?></dt>
			<dd>
				<?php echo $this->Html->link($partner['PaymentTerm']['name'], array('controller' => 'payment_terms', 'action' => 'view', $partner['PaymentTerm']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Code'); ?></dt>
			<dd>
				<?php echo h($partner['Partner']['code']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Sales Type'); ?></dt>
			<dd>
				<?php echo $this->Html->link($partner['SalesType']['name'], array('controller' => 'sales_types', 'action' => 'view', $partner['SalesType']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Attention'); ?></dt>
			<dd>
				<?php echo h($partner['Partner']['attention']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Address'); ?></dt>
			<dd>
				<?php echo h($partner['Partner']['address']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('City'); ?></dt>
			<dd>
				<?php echo h($partner['Partner']['city']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Province'); ?></dt>
			<dd>
				<?php echo h($partner['Partner']['province']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Country'); ?></dt>
			<dd>
				<?php echo $this->Html->link($partner['Country']['name'], array('controller' => 'countries', 'action' => 'view', $partner['Country']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Zip'); ?></dt>
			<dd>
				<?php echo h($partner['Partner']['zip']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Phone'); ?></dt>
			<dd>
				<?php echo h($partner['Partner']['phone']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Add Phone'); ?></dt>
			<dd>
				<?php echo h($partner['Partner']['add_phone']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Fax'); ?></dt>
			<dd>
				<?php echo h($partner['Partner']['fax']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Email'); ?></dt>
			<dd>
				<?php echo h($partner['Partner']['email']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Websites'); ?></dt>
			<dd>
				<?php echo h($partner['Partner']['websites']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Shipping Attention'); ?></dt>
			<dd>
				<?php echo h($partner['Partner']['shipping_attention']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Shipping Address'); ?></dt>
			<dd>
				<?php echo h($partner['Partner']['shipping_address']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Billing Attention'); ?></dt>
			<dd>
				<?php echo h($partner['Partner']['billing_attention']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Billing Address'); ?></dt>
			<dd>
				<?php echo h($partner['Partner']['billing_address']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Shipping Note'); ?></dt>
			<dd>
				<?php echo h($partner['Partner']['shipping_note']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Billing Note'); ?></dt>
			<dd>
				<?php echo h($partner['Partner']['billing_note']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Partner')), array('action' => 'edit', $partner['Partner']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Partner')), array('action' => 'delete', $partner['Partner']['id']), null, __('Are you sure you want to delete # %s?', $partner['Partner']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Partners')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Partner')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Bussines Types')), array('controller' => 'bussines_types', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Bussines Type')), array('controller' => 'bussines_types', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Employees')), array('controller' => 'employees', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Employee')), array('controller' => 'employees', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Status Credits')), array('controller' => 'status_credits', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Status Credit')), array('controller' => 'status_credits', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Currencies')), array('controller' => 'currencies', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Currency')), array('controller' => 'currencies', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Payment Terms')), array('controller' => 'payment_terms', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Payment Term')), array('controller' => 'payment_terms', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Sales Types')), array('controller' => 'sales_types', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Sales Type')), array('controller' => 'sales_types', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Countries')), array('controller' => 'countries', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Country')), array('controller' => 'countries', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Projects')), array('controller' => 'projects', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Project')), array('controller' => 'projects', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Receipts')), array('controller' => 'receipts', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Receipt')), array('controller' => 'receipts', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Contacts')), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Contact')), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Items')), array('controller' => 'items', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Item')), array('controller' => 'items', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Sales Invoices')), array('controller' => 'sales_invoices', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Sales Invoice')), array('controller' => 'sales_invoices', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Taxes')), array('controller' => 'taxes', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Tax')), array('controller' => 'taxes', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Projects')); ?></h3>
	<?php if (!empty($partner['Project'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Name'); ?></th>
				<th><?php echo __('Partner Id'); ?></th>
				<th><?php echo __('Start Date'); ?></th>
				<th><?php echo __('Finish Date'); ?></th>
				<th><?php echo __('Status Project Id'); ?></th>
				<th><?php echo __('Description'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($partner['Project'] as $project): ?>
			<tr>
				<td><?php echo $project['id'];?></td>
				<td><?php echo $project['name'];?></td>
				<td><?php echo $project['partner_id'];?></td>
				<td><?php echo $project['start_date'];?></td>
				<td><?php echo $project['finish_date'];?></td>
				<td><?php echo $project['status_project_id'];?></td>
				<td><?php echo $project['description'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'projects', 'action' => 'view', $project['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'projects', 'action' => 'edit', $project['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'projects', 'action' => 'delete', $project['id']), null, __('Are you sure you want to delete # %s?', $project['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Project')), array('controller' => 'projects', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Receipts')); ?></h3>
	<?php if (!empty($partner['Receipt'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Partner Id'); ?></th>
				<th><?php echo __('Rcp No'); ?></th>
				<th><?php echo __('Rcp Date'); ?></th>
				<th><?php echo __('Currency Id'); ?></th>
				<th><?php echo __('Rate'); ?></th>
				<th><?php echo __('Cash Bank Id'); ?></th>
				<th><?php echo __('Cheque Amount'); ?></th>
				<th><?php echo __('Cheque No'); ?></th>
				<th><?php echo __('Cheque Date'); ?></th>
				<th><?php echo __('Credit Amount'); ?></th>
				<th><?php echo __('Total Amount'); ?></th>
				<th><?php echo __('Paid Amount'); ?></th>
				<th><?php echo __('Overpay Amount'); ?></th>
				<th><?php echo __('Description'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($partner['Receipt'] as $receipt): ?>
			<tr>
				<td><?php echo $receipt['id'];?></td>
				<td><?php echo $receipt['partner_id'];?></td>
				<td><?php echo $receipt['rcp_no'];?></td>
				<td><?php echo $receipt['rcp_date'];?></td>
				<td><?php echo $receipt['currency_id'];?></td>
				<td><?php echo $receipt['rate'];?></td>
				<td><?php echo $receipt['cash_bank_id'];?></td>
				<td><?php echo $receipt['cheque_amount'];?></td>
				<td><?php echo $receipt['cheque_no'];?></td>
				<td><?php echo $receipt['cheque_date'];?></td>
				<td><?php echo $receipt['credit_amount'];?></td>
				<td><?php echo $receipt['total_amount'];?></td>
				<td><?php echo $receipt['paid_amount'];?></td>
				<td><?php echo $receipt['overpay_amount'];?></td>
				<td><?php echo $receipt['description'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'receipts', 'action' => 'view', $receipt['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'receipts', 'action' => 'edit', $receipt['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'receipts', 'action' => 'delete', $receipt['id']), null, __('Are you sure you want to delete # %s?', $receipt['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Receipt')), array('controller' => 'receipts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Contacts')); ?></h3>
	<?php if (!empty($partner['Contact'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Name'); ?></th>
				<th><?php echo __('Nick Name'); ?></th>
				<th><?php echo __('Company'); ?></th>
				<th><?php echo __('Occupation'); ?></th>
				<th><?php echo __('Address1'); ?></th>
				<th><?php echo __('Address2'); ?></th>
				<th><?php echo __('City'); ?></th>
				<th><?php echo __('Province'); ?></th>
				<th><?php echo __('Zip'); ?></th>
				<th><?php echo __('Phone'); ?></th>
				<th><?php echo __('Mobile Phone'); ?></th>
				<th><?php echo __('Email'); ?></th>
				<th><?php echo __('Websites'); ?></th>
				<th><?php echo __('Partner Id'); ?></th>
				<th><?php echo __('Country'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($partner['Contact'] as $contact): ?>
			<tr>
				<td><?php echo $contact['id'];?></td>
				<td><?php echo $contact['name'];?></td>
				<td><?php echo $contact['nick_name'];?></td>
				<td><?php echo $contact['company'];?></td>
				<td><?php echo $contact['occupation'];?></td>
				<td><?php echo $contact['address1'];?></td>
				<td><?php echo $contact['address2'];?></td>
				<td><?php echo $contact['city'];?></td>
				<td><?php echo $contact['province'];?></td>
				<td><?php echo $contact['zip'];?></td>
				<td><?php echo $contact['phone'];?></td>
				<td><?php echo $contact['mobile_phone'];?></td>
				<td><?php echo $contact['email'];?></td>
				<td><?php echo $contact['websites'];?></td>
				<td><?php echo $contact['partner_id'];?></td>
				<td><?php echo $contact['country'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'contacts', 'action' => 'view', $contact['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'contacts', 'action' => 'edit', $contact['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contacts', 'action' => 'delete', $contact['id']), null, __('Are you sure you want to delete # %s?', $contact['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Contact')), array('controller' => 'contacts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Items')); ?></h3>
	<?php if (!empty($partner['Item'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Name'); ?></th>
				<th><?php echo __('Code'); ?></th>
				<th><?php echo __('Item Type Id'); ?></th>
				<th><?php echo __('Tax Type Id'); ?></th>
				<th><?php echo __('Inventory Gl'); ?></th>
				<th><?php echo __('Sales Gl'); ?></th>
				<th><?php echo __('Sales Return Gl'); ?></th>
				<th><?php echo __('Sales Discount Gl'); ?></th>
				<th><?php echo __('Cogs Gl'); ?></th>
				<th><?php echo __('Purchase Return Gl'); ?></th>
				<th><?php echo __('Unbill Gl'); ?></th>
				<th><?php echo __('Shipping Gl'); ?></th>
				<th><?php echo __('Price'); ?></th>
				<th><?php echo __('Discount'); ?></th>
				<th><?php echo __('Editable Desc'); ?></th>
				<th><?php echo __('Unit'); ?></th>
				<th><?php echo __('Department Id'); ?></th>
				<th><?php echo __('Project Id'); ?></th>
				<th><?php echo __('Image'); ?></th>
				<th><?php echo __('Item Status'); ?></th>
				<th><?php echo __('Warehouse Id'); ?></th>
				<th><?php echo __('Qty'); ?></th>
				<th><?php echo __('Partner Id'); ?></th>
				<th><?php echo __('Parent Id'); ?></th>
				<th><?php echo __('Lft'); ?></th>
				<th><?php echo __('Rght'); ?></th>
				<th><?php echo __('Inventory Type Id'); ?></th>
				<th><?php echo __('Vendor Id'); ?></th>
				<th><?php echo __('Exclude'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($partner['Item'] as $item): ?>
			<tr>
				<td><?php echo $item['id'];?></td>
				<td><?php echo $item['name'];?></td>
				<td><?php echo $item['code'];?></td>
				<td><?php echo $item['item_type_id'];?></td>
				<td><?php echo $item['tax_type_id'];?></td>
				<td><?php echo $item['inventory_gl'];?></td>
				<td><?php echo $item['sales_gl'];?></td>
				<td><?php echo $item['sales_return_gl'];?></td>
				<td><?php echo $item['sales_discount_gl'];?></td>
				<td><?php echo $item['cogs_gl'];?></td>
				<td><?php echo $item['purchase_return_gl'];?></td>
				<td><?php echo $item['unbill_gl'];?></td>
				<td><?php echo $item['shipping_gl'];?></td>
				<td><?php echo $item['price'];?></td>
				<td><?php echo $item['discount'];?></td>
				<td><?php echo $item['editable_desc'];?></td>
				<td><?php echo $item['unit'];?></td>
				<td><?php echo $item['department_id'];?></td>
				<td><?php echo $item['project_id'];?></td>
				<td><?php echo $item['image'];?></td>
				<td><?php echo $item['item_status'];?></td>
				<td><?php echo $item['warehouse_id'];?></td>
				<td><?php echo $item['qty'];?></td>
				<td><?php echo $item['partner_id'];?></td>
				<td><?php echo $item['parent_id'];?></td>
				<td><?php echo $item['lft'];?></td>
				<td><?php echo $item['rght'];?></td>
				<td><?php echo $item['inventory_type_id'];?></td>
				<td><?php echo $item['vendor_id'];?></td>
				<td><?php echo $item['exclude'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'items', 'action' => 'view', $item['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'items', 'action' => 'edit', $item['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'items', 'action' => 'delete', $item['id']), null, __('Are you sure you want to delete # %s?', $item['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Item')), array('controller' => 'items', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Sales Invoices')); ?></h3>
	<?php if (!empty($partner['SalesInvoice'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Inv Number'); ?></th>
				<th><?php echo __('Inv Date'); ?></th>
				<th><?php echo __('Inv Duedate'); ?></th>
				<th><?php echo __('Partner Id'); ?></th>
				<th><?php echo __('Project Id'); ?></th>
				<th><?php echo __('Sales Type Id'); ?></th>
				<th><?php echo __('Tax Include'); ?></th>
				<th><?php echo __('Po Number'); ?></th>
				<th><?php echo __('Payment Term Id'); ?></th>
				<th><?php echo __('Currency Id'); ?></th>
				<th><?php echo __('Current Rate'); ?></th>
				<th><?php echo __('Discount'); ?></th>
				<th><?php echo __('Sub Total'); ?></th>
				<th><?php echo __('Disc Percent'); ?></th>
				<th><?php echo __('Freight Amount'); ?></th>
				<th><?php echo __('Grand Total'); ?></th>
				<th><?php echo __('Bill To'); ?></th>
				<th><?php echo __('Note'); ?></th>
				<th><?php echo __('Status Invoice Id'); ?></th>
				<th><?php echo __('Paid Amount'); ?></th>
				<th><?php echo __('Owing Amount'); ?></th>
				<th><?php echo __('Created'); ?></th>
				<th><?php echo __('Modified'); ?></th>
				<th><?php echo __('Fax Tax No'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($partner['SalesInvoice'] as $salesInvoice): ?>
			<tr>
				<td><?php echo $salesInvoice['id'];?></td>
				<td><?php echo $salesInvoice['inv_number'];?></td>
				<td><?php echo $salesInvoice['inv_date'];?></td>
				<td><?php echo $salesInvoice['inv_duedate'];?></td>
				<td><?php echo $salesInvoice['partner_id'];?></td>
				<td><?php echo $salesInvoice['project_id'];?></td>
				<td><?php echo $salesInvoice['sales_type_id'];?></td>
				<td><?php echo $salesInvoice['tax_include'];?></td>
				<td><?php echo $salesInvoice['po_number'];?></td>
				<td><?php echo $salesInvoice['payment_term_id'];?></td>
				<td><?php echo $salesInvoice['currency_id'];?></td>
				<td><?php echo $salesInvoice['current_rate'];?></td>
				<td><?php echo $salesInvoice['discount'];?></td>
				<td><?php echo $salesInvoice['sub_total'];?></td>
				<td><?php echo $salesInvoice['disc_percent'];?></td>
				<td><?php echo $salesInvoice['freight_amount'];?></td>
				<td><?php echo $salesInvoice['grand_total'];?></td>
				<td><?php echo $salesInvoice['bill_to'];?></td>
				<td><?php echo $salesInvoice['note'];?></td>
				<td><?php echo $salesInvoice['status_invoice_id'];?></td>
				<td><?php echo $salesInvoice['paid_amount'];?></td>
				<td><?php echo $salesInvoice['owing_amount'];?></td>
				<td><?php echo $salesInvoice['created'];?></td>
				<td><?php echo $salesInvoice['modified'];?></td>
				<td><?php echo $salesInvoice['fax_tax_no'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'sales_invoices', 'action' => 'view', $salesInvoice['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'sales_invoices', 'action' => 'edit', $salesInvoice['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sales_invoices', 'action' => 'delete', $salesInvoice['id']), null, __('Are you sure you want to delete # %s?', $salesInvoice['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Sales Invoice')), array('controller' => 'sales_invoices', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Taxes')); ?></h3>
	<?php if (!empty($partner['Tax'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Code'); ?></th>
				<th><?php echo __('Rate'); ?></th>
				<th><?php echo __('Name'); ?></th>
				<th><?php echo __('Sales Gl'); ?></th>
				<th><?php echo __('Purchase Gl'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($partner['Tax'] as $tax): ?>
			<tr>
				<td><?php echo $tax['id'];?></td>
				<td><?php echo $tax['code'];?></td>
				<td><?php echo $tax['rate'];?></td>
				<td><?php echo $tax['name'];?></td>
				<td><?php echo $tax['sales_gl'];?></td>
				<td><?php echo $tax['purchase_gl'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'taxes', 'action' => 'view', $tax['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'taxes', 'action' => 'edit', $tax['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'taxes', 'action' => 'delete', $tax['id']), null, __('Are you sure you want to delete # %s?', $tax['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Tax')), array('controller' => 'taxes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
