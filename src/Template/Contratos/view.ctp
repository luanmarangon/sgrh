<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contrato $contrato
 */
$this->Form->templates(['dateWidget' => '{{day}}{{month}}{{year}}']);
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Colaboradores'),  ['controller' => 'Funcionarios', 'action' => 'index']) ?></li>
        <!-- <li><?= $this->Html->link(__('VOLTAR '), ['controller' => 'Funcionarios', 'contratos' => 'view', $id]) ?></li> -->
    </ul>
</nav>
<div class="contratos view large-9 medium-8 columns content">
    <h3><?= h($contrato->funcionario->nome) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Colaborador') ?></th>
            <td><?= $contrato->has('funcionario') ? $this->Html->link($contrato->funcionario->nome, ['controller' => 'Funcionarios', 'action' => 'view', $contrato->funcionario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empresa de Registro') ?></th>
            <td><?= $contrato->has('empresa') ? $this->Html->link($contrato->empresa->rzsocial, ['controller' => 'Empresas', 'action' => 'view', $contrato->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Matrícula') ?></th>
            <td><?= $this->Number->format($contrato->matricula) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data de Admissão') ?></th>
            <td><?= h($contrato->admissao) ?></td>
        </tr>
    </table>

    <?= $this->Html->link(__('Novo Afastamento'), ['controller' => 'afastamentos', 'action' => 'add', $contrato->id], ['class' => 'form button']) ?></td>
    <h5>Dados dos Afastamento</h5>
    <table class="vertical-table">
        <tr>
            <th>Motivo</th>
            <th>Início</th>
            <th>Retorno</th>
            <th></th>
        </tr>
        <?php foreach ($afastamentos as $afastamento) : ?>
            <tr>
                <td style="text-align: left;"><?= $afastamento->motivo ?></td>
                <td style="text-align: left;"><?= h($afastamento->dt_inicio) ?></td>
                <td style="text-align: left;"><?= h($afastamento->dt_retorno) ?></td>
                <td style="text-align: left;"><?= $this->Html->link(__('Alterar'), ['controller' => 'afastamentos', 'action' => 'edit', $afastamento->id]) ?>
                    <?= $this->Form->postLink(
                        __('Excluir'),
                        ['controller' => 'afastamentos', 'action' => 'delete', $afastamento->id],
                        ['confirm' => __('Deseja realmente excluir o afastamento?', $afastamento->id)]
                    )
                    ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <?= $this->Html->link(__('Novo Salário'), ['controller' => 'salarios', 'action' => 'add', $contrato->id], ['class' => 'form button']) ?></td>
    <h5>Dados dos Salários</h5>
    <table class="vertical-table">
        <tr>
            <th>Data</th>
            <th>Justificativa</th>
            <th>salario</th>
            <th></th>
        </tr>
        <?php foreach ($salarios as $salario) : ?>
            <tr>
                <td style="text-align: left;"><?= $salario->data ?></td>
                <td style="text-align: left;"><?= h($salario->justificativa) ?></td>
                <td style="text-align: left;"><?= h($this->Number->currency($salario->salario, 'BRL', ['locale' => 'pt_BR'])) ?></td>
                <td style="text-align: left;"><?= $this->Html->link(__('Alterar'), ['controller' => 'salarios', 'action' => 'edit', $salario->id]) ?>
                    <?= $this->Form->postLink(
                        __('Excluir'),
                        ['controller' => 'salarios', 'action' => 'delete', $salario->id],
                        ['confirm' => __('Deseja realmente excluir o salário?', $salario->id)]
                    )
                    ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <?= $this->Html->link(__('Férias'), ['controller' => 'ferias', 'action' => 'add', $contrato->id], ['class' => 'form button']) ?></td>
    <h5>Dados das Férias</h5>
    <table class="vertical-table">
        <tr>
            <th>Início</th>
            <th>Fim</th>
            <th>Início Abono</th>
            <th>Fim Abono</th>
            <th></th>
        </tr>
        <?php foreach ($ferias as $feria) : ?>
            <tr>
                <td style="text-align: left;"><?= $feria->gozo_inicio ?></td>
                <td style="text-align: left;"><?= h($feria->gozo_fim) ?></td>
                <td style="text-align: left;"><?= $feria->abono_inicio ?></td>
                <td style="text-align: left;"><?= h($feria->abono_fim) ?></td>
                <td style="text-align: left;"><?= $this->Html->link(__('Alterar'), ['controller' => 'ferias', 'action' => 'edit', $feria->id]) ?>
                    <?= $this->Form->postLink(
                        __('Excluir'),
                        ['controller' => 'ferias', 'action' => 'delete', $feria->id],
                        ['confirm' => __('Deseja realmente excluir o Férias?', $feria->id)]
                    )
                    ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <?= $this->Html->link(__('Novo 13° Salário'), ['controller' => 'decsalarios', 'action' => 'add', $contrato->id], ['class' => 'form button']) ?></td>
    <h5>Dados dos 13° Salários</h5>
    <table class="vertical-table">
        <tr>
            <th>Primeira Parcela</th>
            <th>Valor</th>
            <th>Segunda Parcela</th>
            <th>Valor</th>
            <th></th>
        </tr>
        <?php foreach ($decsalarios as $decsalario) : ?>
            <tr>
                <td style="text-align: left;"><?= $decsalario->primeira_parc ?></td>
                <td style="text-align: left;"><?= h($this->Number->currency($decsalario->valor_primeira, 'BRL', ['locale' => 'pt_BR'])) ?></td>
                <td style="text-align: left;"><?= h($decsalario->segunda_parc) ?></td>
                <td style="text-align: left;"><?= h($this->Number->currency($decsalario->valor_segunda, 'BRL', ['locale' => 'pt_BR'])) ?></td>
                <td style="text-align: left;"><?= $this->Html->link(__('Alterar'), ['controller' => 'decsalarios', 'action' => 'edit', $decsalario->id]) ?>
                    <?= $this->Form->postLink(
                        __('Excluir'),
                        ['controller' => 'decsalarios', 'action' => 'delete', $decsalario->id],
                        ['confirm' => __('Deseja realmente excluir o 13° Salário?', $decsalario->id)]
                    )
                    ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <?= $this->Html->link(__('Novo Atestado'), ['controller' => 'atestados', 'action' => 'add', $contrato->id], ['class' => 'form button']) ?></td>
    <h5>Dados dos Atestados</h5>
    <table class="vertical-table">
        <tr>
            <th>Data</th>
            <th>Justificativa</th>
            <th>C.I.D.</th>
            <th></th>
        </tr>
        <?php foreach ($atestados as $atestado) : ?>
            <tr>
                <td style="text-align: left;"><?= $atestado->dt_atestado ?></td>
                <td style="text-align: left;"><?= h($atestado->justificativa) ?></td>
                <td style="text-align: left;"><?= h($atestado->cid) ?></td>
                <td style="text-align: left;"><?= $this->Html->link(__('Alterar'), ['controller' => 'atestados', 'action' => 'edit', $atestado->id]) ?>
                    <?= $this->Form->postLink(
                        __('Excluir'),
                        ['controller' => 'atestados', 'action' => 'delete', $atestado->id],
                        ['confirm' => __('Deseja realmente excluir o Atestado?', $atestado->id)]
                    )
                    ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <?= $this->Html->link(__('Nova Escala'), ['controller' => 'escalas', 'action' => 'add', $contrato->id], ['class' => 'form button']) ?></td>
    <h5>Dados das Escalas</h5>
    <table class="vertical-table">
        <tr>
            <th>Data</th>
            <th>Início de Expediente</th>
            <th>Saída do Almoço</th>
            <th>Retorno do Almoço</th>
            <th>Saída de Expediente</th>
            <th></th>
        </tr>
        <?php foreach ($escalas as $escala) : ?>
            <tr>
                <td style="text-align: left;"><?= $escala->data ?></td>
                <td style="text-align: left;"><?= setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8');
                                                date_default_timezone_set('America/Sao_Paulo');
                                                echo strftime('%H:%M:%S', strtotime(date_format($escala->inicio, 'Y-m-d H:i:s'))); ?></td>
                <td style="text-align: left;"><?= setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8');
                                                date_default_timezone_set('America/Sao_Paulo');
                                                echo strftime('%H:%M:%S', strtotime(date_format($escala->saida, 'Y-m-d H:i:s'))); ?></td>
                <td style="text-align: left;"><?= setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8');
                                                date_default_timezone_set('America/Sao_Paulo');
                                                echo strftime('%H:%M:%S', strtotime(date_format($escala->retorno, 'Y-m-d H:i:s'))); ?></td>
                <td style="text-align: left;"><?= setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8');
                                                date_default_timezone_set('America/Sao_Paulo');
                                                echo strftime('%H:%M:%S', strtotime(date_format($escala->fim, 'Y-m-d H:i:s'))); ?>
                </td>
                <td style="text-align: left;"><?= $this->Html->link(__('Alterar'), ['controller' => 'escalas', 'action' => 'edit', $escala->id]) ?>
                    <?= $this->Form->postLink(
                        __('Excluir'),
                        ['controller' => 'escalas', 'action' => 'delete', $escala->id],
                        ['confirm' => __('Deseja realmente excluir a Escala?', $escala->id)]
                    )
                    ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <?= $this->Html->link(__('Mudança de Função'), ['controller' => 'funcoes_setores', 'action' => 'add', $contrato->id], ['class' => 'form button']) ?></td>
    <h5>Dados das Funções/Setores</h5>
    <table class="vertical-table">
        <tr>
            <th>Função</th>
            <th>Setor</th>
            <th></th>
        </tr>
        <?php foreach ($funcoes_setores as $funcoes_setore) : ?>
            <tr>
                <td style="text-align: left;"><?= $funcoes_setore['nome_funcao'] ?></td>
                <td style="text-align: left;"><?= h($funcoes_setore['nome_setor']) ?></td>
                <td style="text-align: left;"><?= $this->Html->link(__('Alterar'), ['controller' => 'funcoes_setores', 'action' => 'edit', $funcoes_setore['id']]) ?>
                    <?= $this->Form->postLink(
                        __('Excluir'),
                        ['controller' => 'funcoessetores', 'action' => 'delete', $funcoes_setore['id']],
                        ['confirm' => __('Deseja realmente excluir a Mudança de Função/Setor?', $funcoes_setore['id'])]
                    )
                    ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <?= $this->Html->link(__('Início de Expediente'), ['controller' => 'irrinicioexpedientes', 'action' => 'add', $contrato->id], ['class' => 'form button']) ?></td>
    <h5>Irregularidade Início Expediente</h5>
    <table class="vertical-table">
        <tr>
            <th>Data</th>
            <th>Registro</th>
            <th>Justificativa</th>
            <th></th>
        </tr>
        <?php foreach ($irrinicioexpedientes as $irrinicioexpediente) : ?>
            <tr>
                <td style="text-align: left;"><?= $irrinicioexpediente->data ?></td>
                <td style="text-align: left;"><?= setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8');
                                                date_default_timezone_set('America/Sao_Paulo');
                                                echo strftime('%H:%M:%S', strtotime(date_format($irrinicioexpediente->registro, 'Y-m-d H:i:s')));  ?></td>
                <td style="text-align: left;"><?= h($irrinicioexpediente->justificativa) ?></td>
                <td style="text-align: left;"><?= $this->Html->link(__('Alterar'), ['controller' => 'irrinicioexpedientes', 'action' => 'edit', $irrinicioexpediente->id]) ?>
                    <?= $this->Form->postLink(
                        __('Excluir'),
                        ['controller' => 'irrinicioexpedientes', 'action' => 'delete', $irrinicioexpediente->id],
                        ['confirm' => __('Deseja realmente excluir o Irregularidade?', $irrinicioexpediente->id)]
                    )
                    ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <?= $this->Html->link(__('Interjornada'), ['controller' => 'irrinterjornadas', 'action' => 'add', $contrato->id], ['class' => 'form button']) ?></td>
    <h5>Irregularidade Interjornadas</h5>
    <table class="vertical-table">
        <tr>
            <th>Data</th>
            <th>Fim do Expediente</th>
            <th>Início do Expediente</th>
            <th>Justificativa</th>
            <th></th>
        </tr>
        <?php foreach ($irrinterjornadas as $irrinterjornada) : ?>
            <tr>
                <td style="text-align: left;"><?= $irrinterjornada->data ?></td>
                <td style="text-align: left;"><?= setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8');
                                                date_default_timezone_set('America/Sao_Paulo');
                                                echo strftime('%H:%M:%S', strtotime(date_format($irrinterjornada->fim_exp, 'Y-m-d H:i:s'))); ?></td>
                <td style="text-align: left;"><?= setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8');
                                                date_default_timezone_set('America/Sao_Paulo');
                                                echo strftime('%H:%M:%S', strtotime(date_format($irrinterjornada->inic_exp, 'Y-m-d H:i:s')));  ?></td>
                <td style="text-align: left;"><?= h($irrinterjornada->justificativa) ?></td>
                <td style="text-align: left;"><?= $this->Html->link(__('Alterar'), ['controller' => 'irrinterjornadas', 'action' => 'edit', $irrinterjornada->id]) ?>
                    <?= $this->Form->postLink(
                        __('Excluir'),
                        ['controller' => 'irrinterjornadas', 'action' => 'delete', $irrinterjornada->id],
                        ['confirm' => __('Deseja realmente excluir o Irregularidade?', $irrinterjornada->id)]
                    )
                    ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <?= $this->Html->link(__('Intervalo de Refeição'), ['controller' => 'irrintervalorefeicoes', 'action' => 'add', $contrato->id], ['class' => 'form button']) ?></td>
    <h5>Irregularidade Intervalo Refeições</h5>
    <table class="vertical-table">
        <tr>
            <th>Data</th>
            <th>Saída </th>
            <th>Retorno</th>
            <th>Intervalo</th>
            <th></th>
        </tr>
        <?php foreach ($irrintervalorefeicoes as $irrintervalorefeicoe) : ?>
            <tr>
                <td style="text-align: left;"><?= $irrintervalorefeicoe->data ?></td>
                <td style="text-align: left;"><?= setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8');
                                                date_default_timezone_set('America/Sao_Paulo');
                                                echo strftime('%H:%M:%S', strtotime(date_format($irrintervalorefeicoe->saida, 'Y-m-d H:i:s'))); ?></td>
                <td style="text-align: left;"><?= setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8');
                                                date_default_timezone_set('America/Sao_Paulo');
                                                echo strftime('%H:%M:%S', strtotime(date_format($irrintervalorefeicoe->retorno, 'Y-m-d H:i:s'))); ?></td>
                <td style="text-align: left;"><?= setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8');
                                                date_default_timezone_set('America/Sao_Paulo');
                                                echo strftime('%H:%M:%S', strtotime(date_format($irrintervalorefeicoe->intervalo, 'Y-m-d H:i:s')));  ?></td>
                <td style="text-align: left;"><?= h($irrinterjornada->justificativa) ?></td>
                <td style="text-align: left;"><?= $this->Html->link(__('Alterar'), ['controller' => 'irrintervalorefeicoes', 'action' => 'edit', $irrintervalorefeicoe->id]) ?>
                    <?= $this->Form->postLink(
                        __('Excluir'),
                        ['controller' => 'irrintervalorefeicoes', 'action' => 'delete', $irrintervalorefeicoe->id],
                        ['confirm' => __('Deseja realmente excluir o Irregularidade?', $irrintervalorefeicoe->id)]
                    )
                    ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <?= $this->Html->link(__('Jornada de Trabalho'), ['controller' => 'irrjornadatrabalhos', 'action' => 'add', $contrato->id], ['class' => 'form button']) ?></td>
    <h5>Irregularidade Jornada de Trabalhos</h5>
    <table class="vertical-table">
        <tr>
            <th>Data</th>
            <th>Início</th>
            <th>Saída do Almoço</th>
            <th>Justificativa</th>
            <th></th>
        </tr>
        <?php foreach ($irrjornadatrabalhos as $irrjornadatrabalho) : ?>
            <tr>
                <td style="text-align: left;"><?= $irrjornadatrabalho->data ?></td>
                <td style="text-align: left;"><?= setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8');
                                                date_default_timezone_set('America/Sao_Paulo');
                                                echo strftime('%H:%M:%S', strtotime(date_format($irrjornadatrabalho->inicio, 'Y-m-d H:i:s')));  ?></td>
                <td style="text-align: left;"><?= setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8');
                                                date_default_timezone_set('America/Sao_Paulo');
                                                echo strftime('%H:%M:%S', strtotime(date_format($irrjornadatrabalho->saida, 'Y-m-d H:i:s')));  ?></td>
                <td style="text-align: left;"><?= h($irrjornadatrabalho->justificativa) ?></td>
                <td style="text-align: left;"><?= $this->Html->link(__('Alterar'), ['controller' => 'irrjornadatrabalhos', 'action' => 'edit', $irrjornadatrabalho->id]) ?>
                    <?= $this->Form->postLink(
                        __('Excluir'),
                        ['controller' => 'irrjornadatrabalhos', 'action' => 'delete', $irrjornadatrabalho->id],
                        ['confirm' => __('Deseja realmente excluir o Irregularidade?', $irrjornadatrabalho->id)]
                    )
                    ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <?= $this->Html->link(__('Falta de Marcação'), ['controller' => 'irrmarcacaopontos', 'action' => 'add', $contrato->id], ['class' => 'form button']) ?></td>
    <h5>Irregularidade Falta de Marcação Ponto</h5>
    <table class="vertical-table">
        <tr>
            <th>Data</th>
            <th>Motivo</th>
            <th>Justificativa</th>
            <th></th>
        </tr>
        <?php foreach ($irrmarcacaopontos as $irrmarcacaoponto) : ?>
            <tr>
                <td style="text-align: left;"><?= $irrmarcacaoponto->data ?></td>
                <td style="text-align: left;"><?= h($irrmarcacaoponto->motivo) ?></td>
                <td style="text-align: left;"><?= h($irrmarcacaoponto->justificativa) ?></td>
                <td style="text-align: left;"><?= $this->Html->link(__('Alterar'), ['controller' => 'irrmarcacaopontos', 'action' => 'edit', $irrmarcacaoponto->id]) ?>
                    <?= $this->Form->postLink(
                        __('Excluir'),
                        ['controller' => 'irrmarcacaopontos', 'action' => 'delete', $irrmarcacaoponto->id],
                        ['confirm' => __('Deseja realmente excluir o Irregularidade?', $irrmarcacaoponto->id)]
                    )
                    ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <?= $this->Html->link(__('Laudo de Ocorência'), ['controller' => 'laudoocorrencias', 'action' => 'add', $contrato->id], ['class' => 'form button']) ?></td>
    <h5>Laudos de Ocorrências</h5>
    <table class="vertical-table">
        <tr>
            <th>Data</th>
            <th>Ocorrência</th>
            <th>Relator</th>
            <th></th>
        </tr>
        <?php foreach ($laudoocorrencias as $laudoocorrencia) : ?>
            <tr>
                <td style="text-align: left;"><?= $laudoocorrencia->data ?></td>
                <td style="text-align: left;"><?= h($laudoocorrencia->ocorrencia) ?></td>
                <td style="text-align: left;"><?= h($laudoocorrencia->relator) ?></td>
                <td style="text-align: left;"><?= $this->Html->link(__('Alterar'), ['controller' => 'laudoocorrencias', 'action' => 'edit', $laudoocorrencia->id]) ?>
                    <?= $this->Form->postLink(
                        __('Excluir'),
                        ['controller' => 'laudoocorrencias', 'action' => 'delete', $laudoocorrencia->id],
                        ['confirm' => __('Deseja realmente excluir o Irregularidade?', $laudoocorrencia->id)]
                    )
                    ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <?= $this->Html->link(__('Medida Disciplinares'), ['controller' => 'medidadisciplinares', 'action' => 'add', $contrato->id], ['class' => 'form button']) ?></td>
    <h5>Medidas Disciplinares</h5>
    <table class="vertical-table">
        <tr>
            <th scope="col" class="large-6">Advertência</th>
            <th scope="col" class="large-4">Observação</th>
            <th></th>
        </tr>
        <?php foreach ($medidadisciplinares as $medidadisciplinare) : ?>
            <tr>
                <td style="text-align: left;"><?= $medidadisciplinare->advertencia ?></td>
                <td style="text-align: left;"><?= h($medidadisciplinare->observacao) ?></td>
                <td style="text-align: left;"><?= $this->Html->link(__('Alterar'), ['controller' => 'medidadisciplinares', 'action' => 'edit', $medidadisciplinare->id]) ?>
                    <?= $this->Form->postLink(
                        __('Excluir'),
                        ['controller' => 'medidadisciplinares', 'action' => 'delete', $medidadisciplinare->id],
                        ['confirm' => __('Deseja realmente excluir o Medida Disciplinar?', $medidadisciplinare->id)]
                    )
                    ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>