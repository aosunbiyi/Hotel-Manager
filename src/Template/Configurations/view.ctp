<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Configuration $configuration
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Configuration'), ['action' => 'edit', $configuration->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Configuration'), ['action' => 'delete', $configuration->id], ['confirm' => __('Are you sure you want to delete # {0}?', $configuration->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Configurations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Configuration'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="configurations view large-9 medium-8 columns content">
    <h3><?= h($configuration->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Country Name') ?></th>
            <td><?= h($configuration->country_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country Alias') ?></th>
            <td><?= h($configuration->country_alias) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Curr Sign') ?></th>
            <td><?= h($configuration->curr_sign) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State Name') ?></th>
            <td><?= h($configuration->state_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zip') ?></th>
            <td><?= h($configuration->zip) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Financial Period From Month') ?></th>
            <td><?= h($configuration->financial_period_from_month) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Financial Period To Month') ?></th>
            <td><?= h($configuration->financial_period_to_month) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($configuration->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Financial Period From Day') ?></th>
            <td><?= $this->Number->format($configuration->financial_period_from_day) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Financial Period To Day') ?></th>
            <td><?= $this->Number->format($configuration->financial_period_to_day) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Date') ?></th>
            <td><?= h($configuration->start_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($configuration->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($configuration->modified) ?></td>
        </tr>
    </table>
</div>
