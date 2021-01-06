<div class="users form large-12 medium-12 columns content">
	<?= $this->Form->create() ?>
	<fieldset>
		<legend><?=__("Solicitar acesso ao Sistema") ?> </legend>
		<?php
			echo $this->Form->control('mail', ['label' => 'Informe o e-mail para envio do login:']);
		?>
	</fieldset>
	<?= $this->Form->button(__('Enviar')); ?>
	<?= $this->Form->end() ?>
</div>
