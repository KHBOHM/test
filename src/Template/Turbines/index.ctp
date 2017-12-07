<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Turbine[]|\Cake\Collection\CollectionInterface $turbines
 */

	$this->Paginator->setTemplates([
		'prevDisabled' => '<li class="page-item disabled"><a href="{{url}}" class="page-link">{{text}}</a></li>',
		'prevDisabled' => '<li class="page-item disabled"><a href="{{url}}" class="page-link">{{text}}</a></li>',
		'prevActive' => '<li class="page-item"><a href="{{url}}" class="page-link">{{text}}</a></li>',
		'nextDisabled' => '<li class="page-item disabled"><a href="{{url}}" class="page-link">{{text}}</a></li>',
		'nextActive' => '<li class="page-item"><a href="{{url}}" class="page-link">{{text}}</a></li>',
		'number' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>'
	]);
?>
<div class="row justify-content-md-center">
	<div class="col col-md-8">
		<h3 class="float-left"><?= __('Turbines') ?></h3>
		<div class="float-right btn-group" role="group" aria-label="<?= __('Actions')?>">
			<?= $this->Html->link('', ['action'=>'add'], ['title'=>__('Add new turbine'), 'class'=>'oi oi-plus btn btn-primary btn-sm', 'escape'=>false]) ?>
				
		</div>
	</div>
</div>
<div class="row justify-content-md-center">
	<div class="col col-md-8">
		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col"><?= $this->Paginator->sort('id') ?></th>
					<th scope="col"><?= $this->Paginator->sort('code') ?></th>
					<th scope="col"><?= $this->Paginator->sort('location') ?></th>
					<th scope="col"><?= $this->Paginator->sort('power') ?></th>
					<th scope="col" class="actions"><?= __('Actions') ?></th>
				</tr>
			</thead>
			<tbody class="table-striped">
				<?php foreach ($turbines as $turbine): ?>
				<tr>
					<th scope="row"><?= $this->Number->format($turbine->id) ?></th>
					<td><?= h($turbine->code) ?></td>
					<td><?= h($turbine->location) ?></td>
					<td><?= $this->Number->format($turbine->power) ?></td>
					<td class="actions">
						<?= $this->Html->link(__('View'), ['action' => 'view', $turbine->id]) ?>
						<?= $this->Html->link(__('Edit'), ['action' => 'edit', $turbine->id]) ?>
						<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $turbine->id], ['confirm' => __('Confirm delete this turbine?')]) ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<br />
		<nav aria-label="<?= __('Page navigation')?>">
			<ul class="pagination">
				<?= $this->Paginator->prev('< ' . __('previous')) ?>
				<?= $this->Paginator->total()>1?$this->Paginator->numbers():'<li class="page-item"><a class="page-link" href="#">1</a></li>' ?>
				<?= $this->Paginator->next(__('next') . ' >') ?>
			</ul>
		</nav>
	</div>
</div>
