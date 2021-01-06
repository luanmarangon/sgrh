<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Salario Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate|null $data
 * @property string|null $justificativa
 * @property float|null $salario
 * @property string|null $extenso
 * @property string|null $formapgto
 * @property int $contratos_id
 *
 * @property \App\Model\Entity\Contrato $contrato
 */
class Salario extends Entity
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
        'data' => true,
        'justificativa' => true,
        'salario' => true,
        'extenso' => true,
        'formapgto' => true,
        'contratos_id' => true,
        'contrato' => true,
    ];
}
