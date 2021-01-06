<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Dependente Entity
 *
 * @property int $id
 * @property string|null $nome
 * @property string|null $mae
 * @property string|null $parentesco
 * @property \Cake\I18n\FrozenDate|null $nascimento
 * @property string|null $naturalidade
 * @property string|null $uf_naturalidade
 * @property string|null $nacionalidade
 * @property string|null $cpf
 * @property string|null $nascido_vivo
 * @property int $funcionarios_id
 *
 * @property \App\Model\Entity\Funcionario $funcionario
 */
class Dependente extends Entity
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
        'nome' => true,
        'mae' => true,
        'parentesco' => true,
        'nascimento' => true,
        'naturalidade' => true,
        'uf_naturalidade' => true,
        'nacionalidade' => true,
        'cpf' => true,
        'nascido_vivo' => true,
        'funcionarios_id' => true,
        'funcionario' => true,
    ];
}
