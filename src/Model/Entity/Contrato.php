<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contrato Entity
 *
 * @property int $id
 * @property int|null $matricula
 * @property \Cake\I18n\FrozenDate|null $admissao
 * @property \Cake\I18n\FrozenDate|null $exadmissional
 * @property \Cake\I18n\FrozenDate|null $exp_inicio
 * @property \Cake\I18n\FrozenDate|null $exp_fim
 * @property string|null $nomeuser
 * @property int|null $ramal
 * @property string|null $mailprof
 * @property string|null $optante
 * @property \Cake\I18n\FrozenDate|null $dtopcao
 * @property \Cake\I18n\FrozenDate|null $dtretencao
 * @property string|null $bco_depositario
 * @property string|null $bco_banco
 * @property string|null $bco_agencia
 * @property int $empresas_id
 * @property int $funcionarios_id
 * @property int $jornadatrabalhos_id
 *
 * @property \App\Model\Entity\Empresa $empresa
 * @property \App\Model\Entity\Funcionario $funcionario
 * @property \App\Model\Entity\Jornadatrabalho $jornadatrabalho
 */
class Contrato extends Entity
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
        'matricula' => true,
        'admissao' => true,
        'exadmissional' => true,
        'exp_inicio' => true,
        'exp_fim' => true,
        'nomeuser' => true,
        'ramal' => true,
        'mailprof' => true,
        'optante' => true,
        'dtopcao' => true,
        'dtretencao' => true,
        'bco_depositario' => true,
        'bco_banco' => true,
        'bco_agencia' => true,
        'empresas_id' => true,
        'funcionarios_id' => true,
        'jornadatrabalhos_id' => true,
        'empresa' => true,
        'funcionario' => true,
        'jornadatrabalho' => true,
    ];
}
