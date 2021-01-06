<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Decsalario Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate|null $primeira_parc
 * @property float|null $valor_primeira
 * @property \Cake\I18n\FrozenDate|null $segunda_parc
 * @property float|null $valor_segunda
 * @property int $contratos_id
 *
 * @property \App\Model\Entity\Contrato $contrato
 */
class Decsalario extends Entity
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
        'primeira_parc' => true,
        'valor_primeira' => true,
        'segunda_parc' => true,
        'valor_segunda' => true,
        'contratos_id' => true,
        'contrato' => true,
    ];
}
