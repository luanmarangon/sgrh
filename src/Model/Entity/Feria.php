<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Feria Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate|null $aq_inicio
 * @property \Cake\I18n\FrozenDate|null $aq_fim
 * @property \Cake\I18n\FrozenDate|null $gozo_inicio
 * @property \Cake\I18n\FrozenDate|null $gozo_fim
 * @property \Cake\I18n\FrozenDate|null $abono_inicio
 * @property \Cake\I18n\FrozenDate|null $abono_fim
 * @property int $contratos_id
 *
 * @property \App\Model\Entity\Contrato $contrato
 */
class Feria extends Entity
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
        'aq_inicio' => true,
        'aq_fim' => true,
        'gozo_inicio' => true,
        'gozo_fim' => true,
        'abono_inicio' => true,
        'abono_fim' => true,
        'contratos_id' => true,
        'contrato' => true,
    ];
}
