<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Escala Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate|null $data
 * @property \Cake\I18n\FrozenTime|null $inicio
 * @property \Cake\I18n\FrozenTime|null $saida
 * @property \Cake\I18n\FrozenTime|null $retorno
 * @property \Cake\I18n\FrozenTime|null $fim
 * @property int $contratos_id
 *
 * @property \App\Model\Entity\Contrato $contrato
 */
class Escala extends Entity
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
        'inicio' => true,
        'saida' => true,
        'retorno' => true,
        'fim' => true,
        'contratos_id' => true,
        'contrato' => true,
    ];
}
