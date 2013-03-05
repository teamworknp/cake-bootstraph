<div class="row-fluid">
	<div class="span6">
		<?php echo $this->BootstrapForm->create('Partner', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Add %s', __('Partner')); ?></legend>
					<table class="table">
						<tr>
							<td>
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
				?>
							</td>
					
						
							<td>
								<?php 
									
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
				echo $this->BootstrapForm->input('Tax');
								?>
							</td>
						</tr>
					</table>
					
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	
</div>