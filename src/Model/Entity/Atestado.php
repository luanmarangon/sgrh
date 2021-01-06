<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Atestado Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate|null $dt_atestado
 * @property string|null $justificativa
 * @property string|null $medico
 * @property string|null $cid
 * @property int|null $afastamento
 * @property string|null $img
 * @property int $contratos_id
 *
 * @property \App\Model\Entity\Contrato $contrato
 */
class Atestado extends Entity
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
        'dt_atestado' => true,
        'justificativa' => true,
        'medico' => true,
        'cid' => true,
        'afastamento' => true,
        'img' => true,
        'contratos_id' => true,
        'contrato' => true,
    ];
}
