<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Turbine $turbine
 */
?>
<div class="row justify-content-md-center">
    <div class="col col-md-8">
        <h3 class="float-left"><?= __('Turbine') ?>: <?= h($turbine->code) ?></h3>
        <div class="float-right btn-group" role="group" aria-label="<?= __('Actions')?>">
            <?= $this->Html->link('', ['action'=>'edit', $turbine->id], ['title'=>__('Edit turbine'), 'class'=>'oi oi-pencil btn btn-primary btn-sm']) ?>
            <?= $this->Form->postLink('', ['action'=>'delete', $turbine->id], ['title'=>__('Delete turbine'), 'class'=>'oi oi-delete btn btn-danger btn-sm', 'confirm'=>__('Confirm delete this turbine?')]) ?>
            <?= $this->Html->link('', ['action'=>'index'], ['title'=>__('List turbines'), 'class'=>'oi oi-list btn btn-secondary btn-sm']) ?>
                
        </div>
    </div>
</div>
<div class="row justify-content-md-center">
    <div class="col col-md-8">
    <table class="table">
        <tbody>
            <tr>
                <th scope="row"><?= __('Code') ?></th>
                <td><?= h($turbine->code) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Location') ?></th>
                <td><?= h($turbine->location) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($turbine->id) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Power') ?></th>
                <td><?= $this->Number->format($turbine->power) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Notes') ?></th>
                <td><?= $this->Text->autoParagraph(h($turbine->notes)); ?></td>
            </tr>

            <tr>
                <th scope="row"><?= __('Created') ?>/<?= __('Modified') ?></th>
                <td><?= h($turbine->created) ?>/<?= h($turbine->modified) ?></td>
            </tr>
        </tbody>
    </table>
</div>
