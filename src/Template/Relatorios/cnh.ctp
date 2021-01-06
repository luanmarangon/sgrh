<div class="row">
    <div class="columns content" id="relatorio">
    <!-- <?php echo date('d/m/y'); ?> -->
        <?php if (!empty($cnh)) :?>
            <div class="row">
                    <div class="float-right">
                        <?= $this->Html->link('Imprimir Relatório',['controller' => 'Relatorios', 'action' => 'index'],['onclick' => 'window.print()']); ?>
                    </div>
                </div>
            <table cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <h3>Relatórios dos Vencimentos das CNH's</h3>
                      
                        <hr>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><h5>Colaborador</h5></td>
                        <td><h5>Vencimento da CNH</h5></td>
                    </tr>
                    <?php foreach ($cnh as $c): ?>
                        <tr>
                            <td><h5><?= $c['nome'] ?></h5></td>
                            <td><h5><?= date_format(date_create($c['validade_cnh']),"d/m/Y") ?></h5></td>
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