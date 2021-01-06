<div class="row">
    <div class="columns content" id="relatorio">
    

        <?php if (!empty($asos)) :?>
            <div class="row">
                    <div class="float-right">
                        <?= $this->Html->link('Imprimir Relatório',['controller' => 'Relatorios', 'action' => 'index'],['onclick' => 'window.print()']); ?>
                    </div>
                </div>
            <table cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <h3>Relatórios dos Próximos Exames Ocupacionais</h3>
                        <hr>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><h5>Proximo Exame</h5></td>
                        <td><h5>Descrição</h5></td>
                        <td><h5>Nome</h5></td>
                        <!-- <td><h5>Data de Nascimento</h5></td> -->
                    </tr>
                    <?php foreach ($asos as $c): ?>
                        <tr>
                        <td><h5><?= date_format(date_create($c['proximo_exame']),"d/m/Y")?></h5></td>   
                        <td><h5><?= $c['descricao']?></h5></td>    
                        <td><h5><?= $c['nome']?></h5></td>

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