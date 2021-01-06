<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contatoempresa Entity
 *
 * @property int $id
 * @property string|null $telefone
 * @property string|null $responsavel
 * @property string|null $email
 * @property string|null $ramal
 * @property string|null $celular
 * @property int $empresa_id
 *
 * @property \App\Model\Entity\Empresa $empresa
 */
class Contatoempresa extends Entity
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
        'telefone' => true,
        'responsavel' => true,
        'email' => true,
        'ramal' => true,
        'celular' => true,
        'empresa_id' => true,
        'empresa' => true,
    ];
}
