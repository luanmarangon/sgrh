<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'SGRH - Sistema de Gerenciamento do RH';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <!-- <h1><a href=""><?= $this->fetch('title') ?></a></h1> -->
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><?php echo $this->Html->link(__('Home'), ['controller' => 'Principal', 'action' => 'index']); ?></li>
                <li><?php echo $this->Html->link(__('Empresa'), ['controller' => 'Empresas', 'action' => 'index']); ?></li>
                <li><?php echo $this->Html->link(__('Colaboradores'), ['controller' => 'Funcionarios', 'action' => 'index']); ?></li>
                <li><?php echo $this->Html->link(__('Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']); ?></li>
                <li><?php echo $this->Html->link(__('Setores'), ['controller' => 'Setores', 'action' => 'index']); ?></li>
                <li><?php echo $this->Html->link(__('Funções'), ['controller' => 'Funcoes', 'action' => 'index']); ?></li>
                <li><?php echo $this->Html->link(__('Escalas'), ['controller' => 'Escalas', 'action' => 'index']);?></li>           
				<li><?php echo $this->Html->link(__('Relatórios'), ['controller' => 'Relatorios', 'action' => 'index']); ?></li>
                <li><?php echo $this->Html->link(__('Usuários'), ['controller' => 'Users', 'action' => 'index']); ?></li>
                <li><?php echo $this->Html->link(__('Sair'), ['controller' => 'Users', 'action' => 'logout']); ?></li>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer style="background-color:#01545b; color: #FFF; text-align: center;">
		<?php
			if ($userInfo["username"] != "")
				echo "Usuário Logado: ".$userInfo["username"];
				echo " / Nível: ".$userInfo["role"];        
		?>
    </footer>
</body>
</html>
