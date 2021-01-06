<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Jornadatrabalho Entity
 *
 * @property int $id
 * @property string|null $descricao
 * @property \Cake\I18n\FrozenTime|null $inicio
 * @property \Cake\I18n\FrozenTime|null $fim
 * @property \Cake\I18n\FrozenTime|null $almoco
 * @property string|null $descanco
 */
class Jornadatrabalho extends Entity
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
        'descricao' => true,
        'inicio' => true,
        'fim' => true,
        'almoco' => true,
        'descanco' => true,
    ];
}
