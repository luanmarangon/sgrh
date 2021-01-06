<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa $empresa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Listar Empresas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="empresas form large-9 medium-8 columns content">
    <?= $this->Form->create($empresa) ?>
    <fieldset>
        <legend><?= __('Adicionar uma Empresa') ?></legend>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('cnpj', ['label' => 'CNPJ']);
            ?>
        </div>
        <div class="large-8 medium-4 columns">
            <?php

            echo $this->Form->control('rzsocial', ['label' => 'Razão Social']);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php

            echo $this->Form->control('logradouro', ['label' => 'Endereço']);
            ?>
        </div>
        <div class="large-2 medium-4 columns">
            <?php

            echo $this->Form->control('numero', ['label' => 'N°']);
            ?>
        </div>
        <div class="large-3 medium-4 columns">
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
        <div class="large-6 medium-4 columns">
            <?php

            echo $this->Form->control('cidade');
            ?>
        </div>
        <div class="large-3 medium-4 columns">
            <?php

            echo $this->Form->control('estado', ['options' => ['AC' => 'AC', 'AL' => 'AL', 'AP' => 'AP', 'AM' => 'AM', 'BA' => 'BA', 'CE' => 'CE', 'DF' => 'DF', 'ES' => 'ES', 'GO' => 'GO', 'MA' => 'MA', 'MT' => 'MT', 'MS' => 'MS', 'MG' => 'MG', 'PA' => 'PA', 'PB' => 'PB', 'PR' => 'PR', 'PE' => 'PE', 'PI' => 'PI', 'RJ' => 'RJ', 'RN' => 'RN', 'RS' => 'RS', 'RO' => 'RO', 'RR' => 'RR', 'SC' => 'SC', 'SP' => 'SP', 'SE' => 'SE', 'TO' => 'TO']]);
            ?>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Cadastrar')) ?>
    <?= $this->Form->end() ?>
</div>