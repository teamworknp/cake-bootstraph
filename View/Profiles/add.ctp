<div id="page-container" class="row-fluid">
    <div id="sidebar" class="span3">
        <div class="actions">
            <ul class="nav nav-list bs-docs-sidenav">
                    <li><?php echo $this->Html->link(__('List Profiles'), array('action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> 
                    </li>
                    <li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?></li>
            </ul>
        </div>

    </div>

    <div id="page-content" class="span9">
        <div class="profiles form">
            <?php echo $this->Form->create('Profile'); ?>
            <fieldset>
                <h2><?php echo __('Add Profile'); ?></h2>
                <?php
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
    </div>
</div>
