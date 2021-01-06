<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Funcionario Entity
 *
 * @property int $id
 * @property string|null $nome
 * @property string|null $sexo
 * @property string|null $etinia
 * @property string|null $cabelo
 * @property string|null $olhos
 * @property \Cake\I18n\FrozenDate|null $dt_nascimento
 * @property string|null $est_civil
 * @property string|null $naturalidade
 * @property string|null $uf_naturalidade
 * @property string|null $nacionalidade
 * @property string|null $escolaridade
 * @property string|null $mail_pessoal
 * @property string|null $pai
 * @property string|null $mae
 * @property string|null $ativo
 * @property \Cake\I18n\FrozenDate|null $dtcadastro
 * @property string|null $num_carteira
 * @property string|null $registro_geral
 * @property string|null $naturalizado
 * @property \Cake\I18n\FrozenDate|null $dt_chg_br
 * @property string|null $casado_brasileiro
 * @property string|null $cpf
 * @property string|null $cart_trabalho
 * @property string|null $serie
 * @property string|null $cidade
 * @property \Cake\I18n\FrozenDate|null $dt_emis_cart
 * @property string|null $pis
 * @property \Cake\I18n\FrozenDate|null $dt_cad_pis
 * @property string|null $rg
 * @property string|null $orgao
 * @property string|null $uf_rg
 * @property \Cake\I18n\FrozenDate|null $dt_emis_rg
 * @property string|null $habilitacao
 * @property string|null $categoria
 * @property string|null $uf_cnh
 * @property \Cake\I18n\FrozenDate|null $validade_cnh
 * @property string|null $reservista
 * @property string|null $titulo_eleitor
 * @property string|null $titulo_zona
 * @property string|null $titulo_secao
 * @property \Cake\I18n\FrozenDate|null $titulo_dt_emissao
 * @property string|null $conjugue
 * @property string|null $conj_sexo
 * @property \Cake\I18n\FrozenDate|null $conj_nascimento
 * @property string|null $conj_rg
 * @property string|null $conj_uf_rg
 * @property string|null $conj_cpf
 * @property string|null $conj_naturalidade
 * @property string|null $conj_uf_naturalidade
 * @property string|null $conj_nascionalidade
 * @property \Cake\I18n\FrozenDate|null $dt_cadamento
 * @property int $tipodeficiencias_id
 *
 * @property \App\Model\Entity\Tipodeficiencia $tipodeficiencia
 */
class Funcionario extends Entity
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
        'sexo' => true,
        'etinia' => true,
        'cabelo' => true,
        'olhos' => true,
        'dt_nascimento' => true,
        'est_civil' => true,
        'naturalidade' => true,
        'uf_naturalidade' => true,
        'nacionalidade' => true,
        'escolaridade' => true,
        'mail_pessoal' => true,
        'pai' => true,
        'mae' => true,
        'ativo' => true,
        'dtcadastro' => true,
        'num_carteira' => true,
        'registro_geral' => true,
        'naturalizado' => true,
        'dt_chg_br' => true,
        'casado_brasileiro' => true,
        'cpf' => true,
        'cart_trabalho' => true,
        'serie' => true,
        'cidade' => true,
        'dt_emis_cart' => true,
        'pis' => true,
        'dt_cad_pis' => true,
        'rg' => true,
        'orgao' => true,
        'uf_rg' => true,
        'dt_emis_rg' => true,
        'habilitacao' => true,
        'categoria' => true,
        'uf_cnh' => true,
        'validade_cnh' => true,
        'reservista' => true,
        'titulo_eleitor' => true,
        'titulo_zona' => true,
        'titulo_secao' => true,
        'titulo_dt_emissao' => true,
        'conjugue' => true,
        'conj_sexo' => true,
        'conj_nascimento' => true,
        'conj_rg' => true,
        'conj_uf_rg' => true,
        'conj_cpf' => true,
        'conj_naturalidade' => true,
        'conj_uf_naturalidade' => true,
        'conj_nascionalidade' => true,
        'dt_cadamento' => true,
        'tipodeficiencias_id' => true,
        'tipodeficiencia' => true,
    ];
}
