<div class="row">
    <div class="columns content" id="relatorio">
        <?php if (!empty($funcionarios)) :?>
            <div class="row">
                    <div class="float-right">
                        <?= $this->Html->link('Imprimir Relatório',['controller' => 'Relatorios', 'action' => 'index'],['onclick' => 'window.print()']); ?>
                    </div>
                </div>
            <table cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <h3>Relatórios dos Colaboradores</h3>
                        <hr>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><h5>Nome</h5></td>
                        <td><h5>CPF</h5></td>
                        <td><h5>Data de Nascimento</h5></td>
                    </tr>
                    <?php foreach ($funcionarios as $c): ?>
                        <tr>
                            <td><h5><?= $c->nome ?></h5></td>
                            <td><h5><?= $c->cpf ?></h5></td>
                            <td><h5><?= $c->dt_nascimento ?></h5></td>
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