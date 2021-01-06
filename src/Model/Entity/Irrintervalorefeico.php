<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Irrintervalorefeico Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate|null $data
 * @property \Cake\I18n\FrozenTime|null $saida
 * @property \Cake\I18n\FrozenTime|null $retorno
 * @property \Cake\I18n\FrozenTime|null $intervalo
 * @property string|null $justificativa
 * @property int $contratos_id
 *
 * @property \App\Model\Entity\Contrato $contrato
 */
class Irrintervalorefeico extends Entity
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
        'saida' => true,
        'retorno' => true,
        'intervalo' => true,
        'justificativa' => true,
        'contratos_id' => true,
        'contrato' => true,
    ];
}
