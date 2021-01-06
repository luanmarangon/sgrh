<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Medidadisciplinare Entity
 *
 * @property int $id
 * @property string|null $advertencia
 * @property string|null $observacao
 * @property int $contratos_id
 *
 * @property \App\Model\Entity\Contrato $contrato
 */
class Medidadisciplinare extends Entity
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
        'advertencia' => true,
        'observacao' => true,
        'contratos_id' => true,
        'contrato' => true,
    ];
}
