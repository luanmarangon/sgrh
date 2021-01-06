<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar Usuário'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Tem certeza de que deseja excluir # {0}?', $user->username)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Usuários'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Colaboradores'), ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Editar dados do Usuário') ?></legend>
        <div class="large-4 medium-4 columns">
                <?php
                    echo $this->Form->control('username');
                ?>
            </div>
            <div class="large-4 medium-4 columns">
                <?php
                    echo $this->Form->control('password', ['type' => 'password', 'label' => 'Senha']);
                ?>
            </div>
            <div class="large-4 medium-4 columns">
                <?php
                    echo $this->Form->control('role', ['options'=>['Administrador' => 'Administrador', 'Recursos Humanos' => 'Recursos Humanos','Supervisor' => 'Supervisor'], 'label' => 'Nível Acesso:']);
                ?>
            </div>
            <div class="large-12 medium-4 columns">
                <?php
                    echo $this->Form->control('funcionarios_id', ['options' => $funcionarios]);
                ?>
            </div>
    </fieldset>
    <?= $this->Form->button(__('Alterar')) ?>
    <?= $this->Form->end() ?>
</div>
