<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <!-- <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr> -->
        <tr>
            <th><?= __('Full Name') ?></th>
            <td><?= h($user->full_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Country') ?></th>
            <td><?= h($user->country) ?></td>
        </tr>
        <tr>
            <th><?= __('Zip Code') ?></th>
            <td><?= h($user->zip_code) ?></td>
        </tr>
        <tr>
            <th><?= __('Gender') ?></th>
            <td><?= h($user->gender) ?></td>
        </tr>
        <tr>
            <th><?= __('Language') ?></th>
            <td><?= h($user->language) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Date Of Birth') ?></th>
            <td><?= h($user->date_of_birth) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Address') ?></h4>
        <?= $this->Text->autoParagraph(h($user->address)); ?>
    </div>
    <div class="row">
        <h4><?= __('About Yourself') ?></h4>
        <?= $this->Text->autoParagraph(h($user->about_yourself)); ?>
    </div>
</div>
