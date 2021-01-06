<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Afastamento Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate|null $dt_inicio
 * @property \Cake\I18n\FrozenDate|null $dt_retorno
 * @property string|null $crm
 * @property string|null $cid
 * @property string|null $motivo
 * @property int $contratos_id
 *
 * @property \App\Model\Entity\Contrato $contrato
 */
class Afastamento extends Entity
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
        'dt_inicio' => true,
        'dt_retorno' => true,
        'crm' => true,
        'cid' => true,
        'motivo' => true,
        'contratos_id' => true,
        'contrato' => true,
    ];
}
