<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Laudoocorrencia Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate|null $dt_laudo
 * @property \Cake\I18n\FrozenTime|null $hora
 * @property string|null $ocorrencia
 * @property string|null $tp_acao
 * @property string|null $incidencia
 * @property string|null $onde_ocorreu
 * @property int|null $quem_verificou
 * @property string|null $oque_ocorreu
 * @property string|null $relator
 * @property string|null $pq_ocorreu
 * @property string|null $providencias
 * @property int|null $supervisor
 * @property string|null $possui_anexo
 * @property string|null $anexo
 * @property string|null $rh_parecer
 * @property int|null $rh_supervisor
 * @property string|null $ger_parecer
 * @property int|null $gerente
 * @property int $contratos_id
 *
 * @property \App\Model\Entity\Contrato $contrato
 */
class Laudoocorrencia extends Entity
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
        'dt_laudo' => true,
        'hora' => true,
        'ocorrencia' => true,
        'tp_acao' => true,
        'incidencia' => true,
        'onde_ocorreu' => true,
        'quem_verificou' => true,
        'oque_ocorreu' => true,
        'relator' => true,
        'pq_ocorreu' => true,
        'providencias' => true,
        'supervisor' => true,
        'possui_anexo' => true,
        'anexo' => true,
        'rh_parecer' => true,
        'rh_supervisor' => true,
        'ger_parecer' => true,
        'gerente' => true,
        'contratos_id' => true,
        'contrato' => true,
    ];
}
