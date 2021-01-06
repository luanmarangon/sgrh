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

        <?php if (!empty($laudo)) :?>
            <div class="row">
                    <div class="float-right">
                        <?= $this->Html->link('Imprimir Relatório',['controller' => 'Relatorios', 'action' => 'index'],['onclick' => 'window.print()']); ?>
                    </div>
                </div>
            <table cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <h3>Relatórios dos Laudos de Ocorrências</h3>
                        <hr>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><h5>Data do Laudo</h5></td>    
                        <td><h5>Ocorrência</h5></td>
                        <td><h5>Providências</h5></td>
                    </tr>
                    <?php foreach ($laudo as $c): ?>
                        <tr>
                            <td><h5><?= date_format(date_create($c['dt_laudo']),"d/m/Y")?></h5></td>
                            <td><h5><?= $c['oque_ocorreu'] ?></h5></td>
                            <td><h5><?= $c['providencias'] ?></h5></td>
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
#relatorio, #relatorio * {
visibility: visible;
}
#relatorio {
position: fixed;
left: 0;
top: 0;
}
}
</style>