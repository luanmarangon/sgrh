<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funcionario $funcionario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
            <li><?= $this->Html->link(__('Listar Funcionários'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="funcionarios form large-9 medium-8 columns content">
    <?= $this->Form->create($funcionario) ?>
    <fieldset>
    <fieldset>
        <legend><?= __('Editar os dados do  Colaborador ' .$funcionario['nome']) ?></legend>
        <div class="large-6 medium-4 columns">
            <?php
            echo $this->Form->control('nome');
            ?>
        </div>
        <div class="large-2 medium-4 columns">
            <?php
            echo $this->Form->control('sexo', ['label' => 'Sexo', 'options' => ['F' => 'Feminino', 'M' => 'Masculino']]);
            ?>
        </div>
        <div class="large-2 medium-4 columns">
            <?php
            echo $this->Form->control('etinia', ['label' => 'Etnia', 'options' => ['Branca' => 'Branca', 'Parda' => 'Parda', 'Negra' => 'Negra', 'Amarela' => 'Amarela', 'Outros' => 'Outros']]);
            ?>
        </div>
        <div class="large-2 medium-4 columns">
            <?php
            echo $this->Form->control('cabelo', ['label' => 'Cabelo', 'options' => ['Castanho' => 'Castanho', 'Loiro' => 'Loiro', 'Preto' => 'Preto', 'Ruivo' => 'Ruivo']]);
            ?>
        </div>
        <div class="large-2 medium-4 columns">
            <?php
            echo $this->Form->control('olhos', ['label' => 'Cabelo', 'options' => ['Azul' => 'Azul', 'Castanho' => 'Castanho', 'Preto' => 'Preto', 'Verde' => 'Verde']]);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('dt_nascimento', ['type' => 'text', 'label' => 'Data de Nascimento']);
            ?>
        </div>
        <div class="large-2 medium-4 columns">
            <?php
            echo $this->Form->control('est_civil', ['label' => 'Estado Civil', 'options' => ['', 'Solteiro' => 'Solteiro', 'Casado' => 'Casado', 'Separado' => 'Separado', 'Divorciado' => 'Divorciado', 'Viúvo' => 'Viúvo']]);
            ?>
        </div>
        <div class="large-3 medium-4 columns">
            <?php
            echo $this->Form->control('naturalidade');
            ?>
        </div>
        <div class="large-1 medium-4 columns">
            <?php
            echo $this->Form->control('uf_naturalidade', ['label' => 'U.F.', 'options' => ['', 'AC' => 'AC', 'AL' => 'AL', 'AP' => 'AP', 'AM' => 'AM', 'BA' => 'BA', 'CE' => 'CE', 'DF' => 'DF', 'ES' => 'ES', 'GO' => 'GO', 'MA' => 'MA', 'MT' => 'MT', 'MS' => 'MS', 'MG' => 'MG', 'PA' => 'PA', 'PB' => 'PB', 'PR' => 'PR', 'PE' => 'PE', 'PI' => 'PI', 'RJ' => 'RJ', 'RN' => 'RN', 'RS' => 'RS', 'RO' => 'RO', 'RR' => 'RR', 'SC' => 'SC', 'SP' => 'SP', 'SE' => 'SE', 'TO' => 'TO']]);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('nacionalidade', ['options' => ['Brasileiro' => 'Brasileiro', 'Estrangeiro' => 'Estrangeiro' ]]);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('escolaridade', ['options' => ['Analfabeto' => 'Analfabeto', 'Fundamental incompleto' => 'Fundamental Completo', 'Médio Incompleto' => 'Médio Incompleto', 'Superior Incompleto' => 'Superior Incompleto', 'Superior Completo' => 'Superior Completo', 'Mestrado' => 'Mestrado', 'Doutorado' => 'Doutorado']]);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('mail_pessoal', ['label' => 'E-Mail Pessoal']);
            ?>
        </div>
        <div class="large-6 medium-4 columns">
            <?php
            echo $this->Form->control('pai');
            ?>
        </div>
        <div class="large-6 medium-4 columns">
            <?php
            echo $this->Form->control('mae');
            ?>
        </div>
        <div class="large-2 medium-4 columns">
            <?php
            echo $this->Form->control('ativo', ['options' => ['S' => 'Sim', 'N' => 'Não']]);
            ?> 
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('dtcadastro', ['type' => 'text', 'label' => 'Data de Cadastro']);
            ?>
        </div>
        <div class="large-3 medium-4 columns">
            <?php
            echo $this->Form->control('num_carteira', ['label' => 'Numero da Carteira de Trabalho']);
            ?>
        </div>
        <div class="large-2  medium-4 columns">
            <?php
            echo $this->Form->control('cart_trabalho', ['label' => 'Carteira de Trabalho']);
            ?>
        </div>
        <div class="large-2 medium-4 columns">
            <?php
            echo $this->Form->control('serie');
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('dt_emis_cart', ['type' => 'text', 'label' => 'Emissão da Carteira de Trabalho']);
            ?>
        </div>
        <div class="large-3 medium-4 columns">
            <?php
            echo $this->Form->control('cidade');
            ?>
        </div>
        <div class="large-3 medium-4 columns">
            <?php
            echo $this->Form->control('registro_geral', ['label' => 'Registro Estrangeiro']);
            ?>
        </div>
        <div class="large-3 medium-4 columns">
            <?php
            echo $this->Form->control('naturalizado');
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('dt_chg_br', ['type' => 'text', 'label' => 'Chegada ao Brasil']);
            ?>
        </div>
        <div class="large-2 medium-4 columns">
            <?php
            echo $this->Form->control('casado_brasileiro', ['options' => ['S' => 'Sim', 'N' => 'Não']]);
            ?>
        </div>
        <div class="large-3 medium-4 columns">
            <?php
            echo $this->Form->control('cpf', ['label' => 'CPF']);
            ?>
        </div>
        <div class="large-2 medium-4 columns">
            <?php
            echo $this->Form->control('pis');
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('dt_cad_pis', ['type' => 'text', 'label' => 'Data de Cadastramento PIS']);
            ?>
        </div>
        <div class="large-3 medium-4 columns">
            <?php
            echo $this->Form->control('rg', ['label' => 'RG']);
            ?>
        </div>
        <div class="large-2 medium-4 columns">
            <?php
            echo $this->Form->control('orgao', ['label' => 'Orgão RG']);
            ?>
        </div>
        <div class="large-1 medium-4 columns">
            <?php
            echo $this->Form->control('uf_rg', ['label' => 'U.F.', 'options' => ['', 'AC' => 'AC', 'AL' => 'AL', 'AP' => 'AP', 'AM' => 'AM', 'BA' => 'BA', 'CE' => 'CE', 'DF' => 'DF', 'ES' => 'ES', 'GO' => 'GO', 'MA' => 'MA', 'MT' => 'MT', 'MS' => 'MS', 'MG' => 'MG', 'PA' => 'PA', 'PB' => 'PB', 'PR' => 'PR', 'PE' => 'PE', 'PI' => 'PI', 'RJ' => 'RJ', 'RN' => 'RN', 'RS' => 'RS', 'RO' => 'RO', 'RR' => 'RR', 'SC' => 'SC', 'SP' => 'SP', 'SE' => 'SE', 'TO' => 'TO']]);
            ?>
        </div>
        
        <div class="large-4 medium-2 columns">
            <?php
            echo $this->Form->control('dt_emis_rg', ['type' => 'text', 'label' => 'Data de Emissão do RG']);
            ?>
        </div>
        <div class="large-2 medium-1 columns">
            <?php
            echo $this->Form->control('habilitacao', ['label' => 'Registro da CNH']);
            ?>
        </div>
        <div class="large-1 medium-1 columns">
            <?php
            echo $this->Form->control('categoria', ['label' => 'CNH', 'options' => ['A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D', 'E' => 'E', 'A/B' => 'A/B', 'A/C' => 'A/C', 'A/D' => 'A/D', 'A/E' => 'A/E', ]]);
            ?>
        </div>
        <div class="large-1 medium-4 columns">
            <?php
            echo $this->Form->control('ud_cnh', ['label' => 'U.F.', 'options' => ['', 'AC' => 'AC', 'AL' => 'AL', 'AP' => 'AP', 'AM' => 'AM', 'BA' => 'BA', 'CE' => 'CE', 'DF' => 'DF', 'ES' => 'ES', 'GO' => 'GO', 'MA' => 'MA', 'MT' => 'MT', 'MS' => 'MS', 'MG' => 'MG', 'PA' => 'PA', 'PB' => 'PB', 'PR' => 'PR', 'PE' => 'PE', 'PI' => 'PI', 'RJ' => 'RJ', 'RN' => 'RN', 'RS' => 'RS', 'RO' => 'RO', 'RR' => 'RR', 'SC' => 'SC', 'SP' => 'SP', 'SE' => 'SE', 'TO' => 'TO']]);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('validade_cnh', ['empty' => true, 'label' => 'Validade da CNH']);
            ?>
        </div>
        <div class="large-3 medium-4 columns">
            <?php
            echo $this->Form->control('reservista', ['label' => 'Reservista']);
            ?>
        </div>
        <div class="large-2 medium-4 columns">
            <?php
            echo $this->Form->control('titulo_eleitor', ['label' => 'Título de Eleitor']);
            ?>
        </div>
        <div class="large-1 medium-4 columns">
            <?php
            echo $this->Form->control('titulo_zona', ['label' => 'Zona']);
            ?>
        </div>
        <div class="large-2 medium-4 columns">
            <?php
            echo $this->Form->control('titulo_secao', ['label' => 'Seção']);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('titulo_dt_emissao', ['type' => 'text', 'label' => 'Data de Emissão do Título de Eleitor']);
            ?>
        </div>
        <div class="large-6 medium-4 columns">
            <?php
            echo $this->Form->control('conjugue', ['label' => 'Nome do Cônjuge']);
            ?>
        </div>
        <div class="large-2 medium-4 columns">
            <?php
            echo $this->Form->control('conj_sexo', ['label' => 'Sexo', 'options' => ['F' => 'Feminino', 'M' => 'Masculino']]);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('conj_nascimento', ['empty' => true, 'label' => 'Data de Nascimento']);
            ?>
        </div>
        <div class="large-3 medium-4 columns">
            <?php
            echo $this->Form->control('conj_rg', ['label' => 'RG do Cônjuge']);
            ?>
        </div>
        <div class="large-1 medium-4 columns">
            <?php
            echo $this->Form->control('conj_uf_rg', ['label' => 'U.F.', 'options' => ['', 'AC' => 'AC', 'AL' => 'AL', 'AP' => 'AP', 'AM' => 'AM', 'BA' => 'BA', 'CE' => 'CE', 'DF' => 'DF', 'ES' => 'ES', 'GO' => 'GO', 'MA' => 'MA', 'MT' => 'MT', 'MS' => 'MS', 'MG' => 'MG', 'PA' => 'PA', 'PB' => 'PB', 'PR' => 'PR', 'PE' => 'PE', 'PI' => 'PI', 'RJ' => 'RJ', 'RN' => 'RN', 'RS' => 'RS', 'RO' => 'RO', 'RR' => 'RR', 'SC' => 'SC', 'SP' => 'SP', 'SE' => 'SE', 'TO' => 'TO']]);
            ?>
        </div>
        <div class="large-3 medium-4 columns">
            <?php
            echo $this->Form->control('conj_cpf', ['label' => 'CPF do Cônjuge']);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('conj_naturalidade', ['label' => 'Naturalidade Cônjuge']);
            ?>
        </div>
        <div class="large-1 medium-4 columns">
            <?php
            echo $this->Form->control('conj_uf_naturalidade', ['label' => 'U.F.', 'options' => ['', 'AC' => 'AC', 'AL' => 'AL', 'AP' => 'AP', 'AM' => 'AM', 'BA' => 'BA', 'CE' => 'CE', 'DF' => 'DF', 'ES' => 'ES', 'GO' => 'GO', 'MA' => 'MA', 'MT' => 'MT', 'MS' => 'MS', 'MG' => 'MG', 'PA' => 'PA', 'PB' => 'PB', 'PR' => 'PR', 'PE' => 'PE', 'PI' => 'PI', 'RJ' => 'RJ', 'RN' => 'RN', 'RS' => 'RS', 'RO' => 'RO', 'RR' => 'RR', 'SC' => 'SC', 'SP' => 'SP', 'SE' => 'SE', 'TO' => 'TO']]);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('conj_nascionalidade', ['label' => 'Nacionalidade do Cônjuge']);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('dt_cadamento', ['type' => 'text', 'label' => 'Data do Cadastramento']);
            ?>
        </div>
        <div class="large-4 medium-4 columns">
            <?php
            echo $this->Form->control('tipodeficiencias_id', ['options' => $tipodeficiencias, 'label' => 'Possui Deficiência?']);
            ?>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Alterar')) ?>
    <?= $this->Form->end() ?>
</div>

<?= $this->Html->script('https://code.jquery.com/jquery-3.5.1.js') ?>
<?php $this->Html->scriptStart(['block' => true]); ?>
$( document ).ready(function() {
    $('#dt-nascimento').attr('type', 'date');
    $('#dtcadastro').attr('type', 'date');
    $('#dt-emis-cart').attr('type', 'date');
    $('#dt-chg-br').attr('type', 'date');
    $('#dt-cad-pis').attr('type', 'date');
    $('#dt-emis-rg').attr('type', 'date');
    $('#titulo-dt-emissao').attr('type', 'date');
    $('#dt-cadamento').attr('type', 'date');
});
<?php $this->Html->scriptEnd(); ?>
<?= $this->fetch('script') ?>
