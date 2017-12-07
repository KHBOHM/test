<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$search = isset($search)?$search:'';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?= $this->Html->charset() ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>
		TEST MVC:
		<?= $this->fetch('title') ?>
	</title>
	<?= $this->Html->meta('icon') ?>

	<?= $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css') ?>
	<?= $this->Html->css('open-iconic-bootstrap.css') ?>

	
	<?= $this->fetch('meta') ?>
	<?= $this->fetch('css') ?>

</head>
<body style="padding-top: 5em">

	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
		<?= $this->Html->link('TEST MVC', '/', ['class'=>'navbar-brand']) ?>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="<?= __('Toggle navigation') ?>">
		<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<?= $this->Html->link(__('Home'), ['controller'=>'pages', 'action'=>'display', 'home'], ['class'=>'nav-link']) ?>
				</li>
				<li class="nav-item">
					<?= $this->Html->link(__('Turbines'), ['controller'=>'turbines', 'action'=>'index'], ['class'=>'nav-link']) ?>
				<!--li class="nav-item">
					<a class="nav-link disabled" href="#">Disabled</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
					<div class="dropdown-menu" aria-labelledby="dropdown01">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li-->
			</ul>
			<?= $this->Form->create(null, ['url'=>['controller'=>'turbines', 'action'=>'index'], 'type'=>'get', 'class'=>'form-inline my-2 my-lg-0']) ?>
				<?= $this->Form->input('search', ['label'=>false, 'class'=>'form-control mr-sm-2', 'placeholder'=>__('Search'), 'aria-label'=>__('Search'), 'value'=>$search]) ?>
				<?= $this->Form->button(__('Search'), ['type'=>'submit', 'class'=>'btn btn-outline-success my-2 my-sm-0']) ?>
			<?= $this->Form->end() ?>
		</div>
	</nav>

	<main role="main" class="container-fluid">





		<?= $this->Flash->render() ?>
		<?= $this->fetch('content') ?>
	</main>

	<footer>
	</footer>
	<?= $this->Html->script('https://code.jquery.com/jquery-2.2.4.min.js') ?>
	<?= $this->Html->script('https://unpkg.com/popper.js') ?>
	<?= $this->Html->script('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js') ?>
	<?= $this->fetch('script') ?>
</body>
</html>
