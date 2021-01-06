<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Enderecofuncionario Entity
 *
 * @property int $id
 * @property string|null $logradouro
 * @property string|null $numero
 * @property string|null $complemento
 * @property string|null $bairro
 * @property string|null $cep
 * @property string|null $cidade
 * @property string|null $uf_cidade
 * @property int $funcionarios_id
 *
 * @property \App\Model\Entity\Funcionario $funcionario
 */
class Enderecofuncionario extends Entity
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
        'logradouro' => true,
        'numero' => true,
        'complemento' => true,
        'bairro' => true,
        'cep' => true,
        'cidade' => true,
        'uf_cidade' => true,
        'funcionarios_id' => true,
        'funcionario' => true,
    ];
}
