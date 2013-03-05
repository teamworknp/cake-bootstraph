<div><div id="page-container">

    <div id="page-content">

        <div class="profiles index">

            <h2><?php echo __('Profiles'); ?></h2>

            <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
                <tr>
                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                    <th><?php echo $this->Paginator->sort('user_id'); ?></th>
                    <th><?php echo $this->Paginator->sort('first_name'); ?></th>
                    <th><?php echo $this->Paginator->sort('middle_name'); ?></th>
                    <th><?php echo $this->Paginator->sort('last_name'); ?></th>
                    <th><?php echo $this->Paginator->sort('birth_day'); ?></th>
                    <th><?php echo $this->Paginator->sort('fullname'); ?></th>
                    <th><?php echo $this->Paginator->sort('gender'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <div> <?php foreach ($profiles as $profile): ?></div>
                <tr>
                    <td><?php echo h($profile['Profile']['id']); ?>&nbsp;</td>
                    <td>
                            <?php echo $this->Html->link($profile['User']['id'], array('controller' => 'users', 'action' => 'view', $profile['User']['id'])); ?>
                        </td>
                        <td><?php echo h($profile['Profile']['first_name']); ?>&nbsp;</td>
                        <td><?php echo h($profile['Profile']['middle_name']); ?>&nbsp;</td>
                        <td><?php echo h($profile['Profile']['last_name']); ?>&nbsp;</td>
                        <td><?php echo h($profile['Profile']['birth_day']); ?>&nbsp;</td>
                        <td><?php echo h($profile['Profile']['fullname']); ?>&nbsp;</td>
                        <td><?php echo h($profile['Profile']['gender']); ?>&nbsp;</td>
                        <td class="actions">
                            <?php echo $this->Html->link(__('View'), array('action' => 'view', $profile['Profile']['id']), array('class' => 'btn btn-mini')); ?>
                            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $profile['Profile']['id']), array('class' => 'btn btn-mini')); ?>
                            <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $profile['Profile']['id']), array('class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $profile['Profile']['id'])); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>

            <p><small>
                    <?php
                    echo $this->Paginator->counter(array(
                        'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
                    ));
                    ?>			</small></p>

            <div class="pagination">
                <ul>
                    <?php
                    echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
                    echo $this->Paginator->numbers(array('separator' => '</li><li>', 'currentClass' => 'disabled', 'before' => '<li>', 'after' => '</li>'));
                    echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
                    ?>
                </ul>
            </div><!-- .pagination -->

        </div><!-- .index -->

    </div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
</div>