<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa $empresa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Listar Empresas'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="empresas view large-9 medium-8 columns content">
    <h3>Contatos da empresa <?= h($empresa->rzsocial) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('CNPJ') ?></th>
            <td><?= h($empresa->cnpj) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Razão Social') ?></th>
            <td><?= h($empresa->rzsocial) ?></td>
        </tr>
    </table>
	
	<?= $this->Html->link(__('Novo Contato'), ['action' => 'novocontato', $empresa->id], ['class' => 'form button']) ?></td>
	
	<h5>Contatos</h5>
    <table class="vertical-table">
        <?php foreach ($contatos as $contato): ?>
            <tr>
                <th scope="row"><?= h($contato->responsavel) ?></th>
                <td><?= h($contato->email) ?></td>
				<td><?= h($contato->telefone) ?></td>
                <td><?= $this->Html->link(__('Alterar'), ['action' => 'alterarcontato', $contato->id]) ?> <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Contatoempresas', 'action' => 'delete', $contato->id], ['confirm' => __('Deseja realmente excluir o contato?', $contato->id)]) ?></td>
            </tr>
            <?php endforeach; ?>
    </table>
	
</div>
