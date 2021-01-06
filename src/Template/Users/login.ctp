<div class="users form large-12 medium-12 columns content">
	<?= $this->Form->create() ?>
	<div class="large-12 medium-4 columns">
		
		<div class="large-4 medium-4 columns" style="margin-left: 30%; margin-top: 5%; ">
			<fieldset>
				<legend><?= __("Acessar o sistema") ?> </legend>
				<?php
				echo $this->Form->control('username', ['label' => 'Informe o nome de usuário:']);
				echo $this->Form->control('password', ['label' => 'Informe a senha do usuário:', 'type' => 'password']);
				?>
			</fieldset>
			<?= $this->Form->button(__('Acessar')); ?>
			<?= $this->Form->end() ?>
		</div>
		<!-- <div class="large-2 medium-4 columns">
			<img src="..\webroot\img\test.jpeg" alt="">
		</div> -->
	</div>
</div>