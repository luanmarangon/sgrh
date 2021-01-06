<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Dadosbancario Entity
 *
 * @property int $id
 * @property string|null $banco
 * @property string|null $tipo_conta
 * @property string|null $agencia
 * @property string|null $conta
 * @property string|null $ativo
 * @property int $funcionarios_id
 *
 * @property \App\Model\Entity\Funcionario $funcionario
 */
class Dadosbancario extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'banco' => true,
        'tipo_conta' => true,
        'agencia' => true,
        'conta' => true,
        'ativo' => true,
        'funcionarios_id' => true,
        'funcionario' => true,
    ];
}
