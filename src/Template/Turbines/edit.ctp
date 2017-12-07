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
		<h3 class="float-left"><?=  __('Edit Turbine') ?></h3>
		<div class="float-right btn-group" role="group" aria-label="<?= __('Actions')?>">
			<?= $this->Form->postLink('', ['action'=>'delete', $turbine->id], ['title'=>__('Delete turbine'), 'class'=>'oi oi-delete rounded btn btn-danger btn-sm', 'confirm'=>__('Confirm delete this turbine?')]) ?>
				
		</div>
	</div>
</div>
<div class="row justify-content-md-center">
	<div class="col col-md-8">
		<?= $this->Form->create($turbine) ?>
			<div class="form-row">
				<?= $this->Form->control('code', ['templateVars'=>['cols'=>6, 'help' => 'Código que identifica ésta turbina.']]) ?>
			</div>
			<div class="form-row">
				<?= $this->Form->control('location', ['templateVars'=>['cols'=>6, 'help' => '¿Dónde esta ubicada esta turbina?']]) ?>
				<?= $this->Form->control('power', ['class'=>'form-control text-right', 'templates'=>$iconedInputTemplate, 'templateVars'=>['cols'=>6]]); ?>
			</div>

				<?php
					echo $this->Form->control('notes', ['templateVars'=>[]]);
				?>

			<?= $this->Form->button(__('Save'), ['class' => 'btn btn-primary']) ?>
			<?= $this->Html->link(__('Cancel'), $this->request->referer(),  ['class'=>'btn btn-secondary']) ?>
		<?= $this->Form->end() ?>
	</div>
</div>

