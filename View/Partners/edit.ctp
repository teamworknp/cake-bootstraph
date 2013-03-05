<div class="row-fluid">
    <div class="span9">
            <?php echo $this->BootstrapForm->create('Partner', array('class' => 'form-horizontal'));?>
                    <fieldset>
                            <legend><?php echo __('Edit %s', __('Partner')); ?></legend>
                            <?php
                            echo $this->BootstrapForm->input('name');
                            echo $this->BootstrapForm->input('alias');
                            echo $this->BootstrapForm->input('partner_type_id', array(
                                    'required' => 'required',
                                    'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
                            );
                            echo $this->BootstrapForm->input('bussines_type_id');
                            echo $this->BootstrapForm->input('employee_id');
                            echo $this->BootstrapForm->input('credit_limit');
                            echo $this->BootstrapForm->input('status_credit_id', array(
                                    'required' => 'required',
                                    'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
                            );
                            echo $this->BootstrapForm->input('taxnumber');
                            echo $this->BootstrapForm->input('pkpnumber');
                            echo $this->BootstrapForm->input('status');
                            echo $this->BootstrapForm->input('balance');
                            echo $this->BootstrapForm->input('currency_id');
                            echo $this->BootstrapForm->input('payment_term_id');
                            echo $this->BootstrapForm->input('code');
                            echo $this->BootstrapForm->input('sales_type_id');
                            echo $this->BootstrapForm->input('attention');
                            echo $this->BootstrapForm->input('address');
                            echo $this->BootstrapForm->input('city');
                            echo $this->BootstrapForm->input('province');
                            echo $this->BootstrapForm->input('country_id');
                            echo $this->BootstrapForm->input('zip');
                            echo $this->BootstrapForm->input('phone');
                            echo $this->BootstrapForm->input('add_phone');
                            echo $this->BootstrapForm->input('fax');
                            echo $this->BootstrapForm->input('email');
                            echo $this->BootstrapForm->input('websites');
                            echo $this->BootstrapForm->input('shipping_attention');
                            echo $this->BootstrapForm->input('shipping_address');
                            echo $this->BootstrapForm->input('billing_attention');
                            echo $this->BootstrapForm->input('billing_address');
                            echo $this->BootstrapForm->input('shipping_note');
                            echo $this->BootstrapForm->input('billing_note');
                            echo $this->BootstrapForm->hidden('id');
                            echo $this->BootstrapForm->input('Tax');
                            ?>
                            <?php echo $this->BootstrapForm->submit(__('Submit'));?>
                    </fieldset>
            <?php echo $this->BootstrapForm->end();?>
    </div>
    <div class="span3">
            <div class="well" style="padding: 8px 0; margin-top:8px;">
            <ul class="nav nav-list">
                    <li class="nav-header"><?php echo __('Actions'); ?></li>
                    <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Partner.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Partner.id'))); ?></li>
                    <li><?php echo $this->Html->link(__('List %s', __('Partners')), array('action' => 'index'));?></li>
                    <li><?php echo $this->Html->link(__('List %s', __('Bussines Types')), array('controller' => 'bussines_types', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link(__('New %s', __('Bussines Type')), array('controller' => 'bussines_types', 'action' => 'add')); ?></li>
                    <li><?php echo $this->Html->link(__('List %s', __('Employees')), array('controller' => 'employees', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link(__('New %s', __('Employee')), array('controller' => 'employees', 'action' => 'add')); ?></li>
                    <li><?php echo $this->Html->link(__('List %s', __('Status Credits')), array('controller' => 'status_credits', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link(__('New %s', __('Status Credit')), array('controller' => 'status_credits', 'action' => 'add')); ?></li>
                    <li><?php echo $this->Html->link(__('List %s', __('Currencies')), array('controller' => 'currencies', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link(__('New %s', __('Currency')), array('controller' => 'currencies', 'action' => 'add')); ?></li>
                    <li><?php echo $this->Html->link(__('List %s', __('Payment Terms')), array('controller' => 'payment_terms', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link(__('New %s', __('Payment Term')), array('controller' => 'payment_terms', 'action' => 'add')); ?></li>
                    <li><?php echo $this->Html->link(__('List %s', __('Sales Types')), array('controller' => 'sales_types', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link(__('New %s', __('Sales Type')), array('controller' => 'sales_types', 'action' => 'add')); ?></li>
                    <li><?php echo $this->Html->link(__('List %s', __('Countries')), array('controller' => 'countries', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link(__('New %s', __('Country')), array('controller' => 'countries', 'action' => 'add')); ?></li>
                    <li><?php echo $this->Html->link(__('List %s', __('Projects')), array('controller' => 'projects', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link(__('New %s', __('Project')), array('controller' => 'projects', 'action' => 'add')); ?></li>
                    <li><?php echo $this->Html->link(__('List %s', __('Receipts')), array('controller' => 'receipts', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link(__('New %s', __('Receipt')), array('controller' => 'receipts', 'action' => 'add')); ?></li>
                    <li><?php echo $this->Html->link(__('List %s', __('Contacts')), array('controller' => 'contacts', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link(__('New %s', __('Contact')), array('controller' => 'contacts', 'action' => 'add')); ?></li>
                    <li><?php echo $this->Html->link(__('List %s', __('Items')), array('controller' => 'items', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link(__('New %s', __('Item')), array('controller' => 'items', 'action' => 'add')); ?></li>
                    <li><?php echo $this->Html->link(__('List %s', __('Sales Invoices')), array('controller' => 'sales_invoices', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link(__('New %s', __('Sales Invoice')), array('controller' => 'sales_invoices', 'action' => 'add')); ?></li>
                    <li><?php echo $this->Html->link(__('List %s', __('Taxes')), array('controller' => 'taxes', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link(__('New %s', __('Tax')), array('controller' => 'taxes', 'action' => 'add')); ?></li>
            </ul>
            </div>
    </div>
</div>