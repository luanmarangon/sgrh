<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contrato $contrato
 */
$this->Form->templates(['dateWidget' => '{{day}}{{month}}{{year}}']);
?>
<br />
<h1 style="text-align: center;"> Sistema de Gerenciamento de Recursos Humanos</h1>

<div class="large-12 medium-6 columns">
    <h3 style="text-align: center;"> Colaboradores!</h1>
        <br>
        <div class="large-3 medium-3 columns" style="text-align-last: center;">
            <h1><?php if (!empty($funcionarios)) : ?>
                    <h4>Colaboradores</h4>
                    <h1><?php foreach ($funcionarios as $f) :
                            echo $f['funcionarios'];
                        endforeach;
                        ?></h1>
                <?php endif; ?>
            </h1>
        </div>
        <div class="large-3 medium-3 columns" style="text-align-last: center;">
            <h1><?php if (!empty($contratos)) : ?>
                    <h4>Contratos</h4>
                    <h1><?php foreach ($contratos as $f) :
                            echo $f['contratos'];
                        endforeach;
                        ?></h1>
                <?php endif; ?>
            </h1>
        </div>
        <div class="large-3 medium-3 columns" style="text-align-last: center;">
            <h1><?php if (!empty($asos)) : ?>
                    <h4>Atestado de Saúde Ocupacional</h4>
                    <h1><?php foreach ($asos as $f) :
                            echo $f['asos'];
                        endforeach;
                        ?></h1>
                <?php endif; ?>
            </h1>
        </div>

        <div class="large-3 medium-3 columns" style="text-align-last: center;">
            <h1><?php if (!empty($atestados)) : ?>
                    <h4>Atestado Médicos</h4>
                    <h1><?php foreach ($atestados as $f) :
                            echo $f['atestados'];
                        endforeach;
                        ?></h1>
                <?php endif; ?>
            </h1>
        </div>
</div>
<hr>
<br>
<br>

<h3 style="text-align: center;"> Ocorrências</h1>
    <br>
    <div class="large-3 medium-3 columns" style="text-align-last: center;">
        <h1><?php if (!empty($irrinicioexpedientes)) : ?>
                <h4>Início de Expedientes </h4>
                <h1><?php foreach ($irrinicioexpedientes as $f) :
                        echo $f['irrinicioexpedientes'];
                    endforeach;
                    ?></h1>
            <?php endif; ?>
        </h1>
    </div>

    <div class="large-3 medium-3 columns" style="text-align-last: center;">
        <h1><?php if (!empty($irrintervalorefeicoes)) : ?>
                <h4>Intervalo de Refeições</h4>
                <h1><?php foreach ($irrintervalorefeicoes as $f) :
                        echo $f['irrintervalorefeicoes'];
                    endforeach;
                    ?></h1>
            <?php endif; ?>
        </h1>
    </div>

    <div class="large-3 medium-3 columns" style="text-align-last: center;">
        <h1><?php if (!empty($irrjornadatrabalhos)) : ?>
                <h4>Jornada de Trabalhos</h4>
                <h1><?php foreach ($irrjornadatrabalhos as $f) :
                        echo $f['irrjornadatrabalhos'];
                    endforeach;
                    ?></h1>
            <?php endif; ?>
        </h1>
    </div>

    <div class="large-3 medium-3 columns" style="text-align-last: center;">
        <h1><?php if (!empty($irrmarcacaopontos)) : ?>
                <h4>Falta de Marcação</h4>
                <h1><?php foreach ($irrmarcacaopontos as $f) :
                        echo $f['irrmarcacaopontos'];
                    endforeach;
                    ?></h1>
            <?php endif; ?>
        </h1>
    </div>

    <!-- <h3 style="text-align: center;"> Ocorrências</h1>
    <br>
    <div class="large-6 medium-3 columns" style="text-align-last: center;">
        <h1><?php if (!empty($laudoocorrencias)) : ?>
                <h4>Laudo de Ocorrências</h4>
                <h1><?php foreach ($laudoocorrencias as $f) :
                        echo $f['laudoocorrencias'];
                    endforeach;
                    ?></h1>
            <?php endif; ?>
        </h1>
    </div>
    <div class="large-6 medium-3 columns" style="text-align-last: center;">
        <h1><?php if (!empty($medidadisciplinares)) : ?>
                <h4>Medida Disciplinar</h4>
                <h1><?php foreach ($medidadisciplinares as $f) :
                        echo $f['medidadisciplinares'];
                    endforeach;
                    ?></h1>
            <?php endif; ?>
        </h1>
    </div> -->
    </div>
