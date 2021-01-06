<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FuncoesHasSetore Entity
 *
 * @property int $id
 * @property int $funcoes_id
 * @property int $setores_id
 *
 * @property \App\Model\Entity\Funco $funco
 * @property \App\Model\Entity\Setore $setore
 */
class FuncoesHasSetore extends Entity
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
        'funco' => true,
        'setore' => true,
    ];
}
