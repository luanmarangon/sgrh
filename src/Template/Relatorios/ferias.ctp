<div class="row">
    <div class="columns content" id="relatorio">
        <?php if (!empty($funcionarios)) : ?>
            <div class="row">
                <div class="float-right">
                    <?php
                    echo $this->Form->create();
                    echo $this->Form->control("funcionarios", [
                        'label' => 'Selecione o Funcionario:',
                        'options' => $funcionarios
                    ]);
                    echo $this->Form->button(__('Selecionar'));
                    echo $this->Form->end();
                    ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if (!empty($ferias)) : ?>
            <div class="row">
                <div class="float-right">
                    <?= $this->Html->link('Imprimir Relatório', ['controller' => 'Relatorios', 'action' => 'index'], ['onclick' => 'window.print()']); ?>
                </div>
            </div>
            <table cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <h3>Relatórios de Férias</h3>
                        <hr>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <!-- <td><h5>Colaborador</h5></td> -->
                        <td>
                            <h5>Inicio da Aquisição</h5>
                        </td>
                        <td>
                            <h5>Final da Aquisição</h5>
                        </td>
                        <td>
                            <h5>Inicio das Férias</h5>
                        </td>
                        <td>
                            <h5>Final das Férias</h5>
                        </td>
                    </tr>
                    <?php foreach ($ferias as $c) : ?>
                        <tr>
                            <!-- <td><h5><?= $c['contratos_id'] ?></h5></td> -->
                            <td>
                                <h5><?= date_format(date_create($c['aq_inicio']),"d/m/Y") ?></h5>
                            </td>
                            <td>
                                <h5><?= date_format(date_create($c['aq_fim']),"d/m/Y") ?></h5>
                            </td>
                            <td>
                                <h5><?= date_format(date_create($c['gozo_inicio']),"d/m/Y") ?></h5>
                            </td>
                            <td>
                                <h5><?= date_format(date_create($c['gozo_fim']),"d/m/Y") ?></h5>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</div>


<style>
    @media print {
        body * {
            visibility: hidden;
        }

        #relatorio,
        #relatorio * {
            visibility: visible;
        }

        #relatorio {
            position: fixed;
            left: 0;
            top: 0;
        }
    }
</style>