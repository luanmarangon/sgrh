<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Aso Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate|null $dt_exame
 * @property string|null $exame
 * @property string|null $descricao
 * @property \Cake\I18n\FrozenDate|null $proximo_exame
 * @property string|null $anexo
 * @property int $funcionarios_id
 *
 * @property \App\Model\Entity\Funcionario $funcionario
 */
class Aso extends Entity
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
        'dt_exame' => true,
        'exame' => true,
        'descricao' => true,
        'proximo_exame' => true,
        'anexo' => true,
        'funcionarios_id' => true,
        'funcionario' => true,
    ];
}
