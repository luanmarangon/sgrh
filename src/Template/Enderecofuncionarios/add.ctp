<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enderecofuncionario $enderecofuncionario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Listar Funcionários'), ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="enderecofuncionarios form large-9 medium-8 columns content">
    <?= $this->Form->create($enderecofuncionario) ?>
    <fieldset>
        <legend><?= __('Adicionar um Endereço ao Funcionário') ?></legend>
<div class="large-6 medium-4 columns">
    <?php
    echo $this->Form->control('logradouro', ['label' => 'Endereço']);
    ?>
</div>
<div class="large-2 medium-4 columns">
    <?php

    echo $this->Form->control('numero', ['label' => 'Número']);
    ?>
</div>
<div class="large-4 medium-4 columns">
    <?php

    echo $this->Form->control('complemento');
    ?>
</div>
<div class="large-3 medium-4 columns">
    <?php

    echo $this->Form->control('bairro');
    ?>
</div>
<div class="large-3 medium-4 columns">
    <?php

    echo $this->Form->control('cep', ['label' => 'CEP']);
    ?>
</div>
<div class="large-4 medium-4 columns">
    <?php

    echo $this->Form->control('cidade');
    ?>
</div>
<div class="large-2 medium-4 columns">
    <?php

    echo $this->Form->control('uf_cidade', ['label' => 'Estado', 'options' => ['AC' => 'AC', 'AL' => 'AL', 'AP' => 'AP', 'AM' => 'AM', 'BA' => 'BA', 'CE' => 'CE', 'DF' => 'DF', 'ES' => 'ES', 'GO' => 'GO', 'MA' => 'MA', 'MT' => 'MT', 'MS' => 'MS', 'MG' => 'MG', 'PA' => 'PA', 'PB' => 'PB', 'PR' => 'PR', 'PE' => 'PE', 'PI' => 'PI', 'RJ' => 'RJ', 'RN' => 'RN', 'RS' => 'RS', 'RO' => 'RO', 'RR' => 'RR', 'SC' => 'SC', 'SP' => 'SP', 'SE' => 'SE', 'TO' => 'TO']]);
    ?>
</div>
<div class="large-12 medium-4 columns">
    <?php
    echo $this->Form->control('funcionarios_id', ['options' => $funcionarios, 'label' => 'Colaborador', 'default' => $id, 'disabled' => true]);
    ?>
</div>
</fieldset>
<?= $this->Form->button(__('Cadastrar')) ?>
<?= $this->Form->end() ?>
</div>