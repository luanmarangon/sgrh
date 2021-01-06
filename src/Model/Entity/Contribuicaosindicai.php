<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contribuicaosindicai Entity
 *
 * @property int $id
 * @property string|null $ano
 * @property float|null $valor
 * @property string|null $sindicato
 * @property int $funcionarios_id
 *
 * @property \App\Model\Entity\Funcionario $funcionario
 */
class Contribuicaosindicai extends Entity
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
        'ano' => true,
        'valor' => true,
        'sindicato' => true,
        'funcionarios_id' => true,
        'funcionario' => true,
    ];
}
