<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FuncoesSetore Entity
 *
 * @property int $id
 * @property int $funcoes_id
 * @property int $setores_id
 * @property int $contratos_id
 *
 * @property \App\Model\Entity\Funco $funco
 * @property \App\Model\Entity\Setore $setore
 * @property \App\Model\Entity\Contrato $contrato
 */
class FuncoesSetore extends Entity
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
        'funcoes_id' => true,
        'setores_id' => true,
        'contratos_id' => true,
        'funco' => true,
        'setore' => true,
        'contrato' => true,
    ];
}
