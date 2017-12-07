<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Turbine $turbine
 */



$this->Form->setTemplates([
	'inputContainer' => '<div class="form-group col-md-{{cols}} {{required}}">{{content}}<small class="form-text text-muted">{{help}}</small></div>',
	'input' => '<input type="{{type}}" name="{{name}}"{{attrs}} class="form-control"/>',
	'textarea' => ' <textarea class="form-control" name="{{name}}"{{attrs}}>{{value}}</textarea>',
]);

$iconedInputTemplate = [
	'input' => '<div class="input-group mb-2 mb-sm-0"><input type="{{type}}" name="{{name}}"{{attrs}} class="form-control"/><div class="input-group-addon">KW</div></div>',
];

?>
<div class="row justify-content-md-center">
	<div class="col col-md-8">
		<h2><?=  __('New Turbine') ?></h2>
	</div>
	<div class="col col-md-8">
		<?= $this->Form->create($turbine) ?>
			<div class="form-row">
				<?= $this->Form->control('code', ['templateVars'=>['cols'=>6]]) ?>
			</div>
			<div class="form-row">
				<?= $this->Form->control('location', ['templateVars'=>['cols'=>6, 'help' => '¿Dónde esta ubicada esta turbina?']]) ?>
				<?= $this->Form->control('power', ['templates'=>$iconedInputTemplate, 'templateVars'=>['cols'=>6]]); ?>
			</div>

				<?php

					echo $this->Form->control('notes', ['templateVars'=>[]]);
				?>

			<?= $this->Form->button(__('Save'), ['class' => 'btn btn-primary']) ?>
			<?= $this->Html->link(__('Cancel'), $this->request->referer(),  ['class'=>'btn btn-secondary']) ?>
		<?= $this->Form->end() ?>
	</div>
</div>

