<?php
/**
 * Created by PhpStorm.
 * User: Lab05usuario32
 * Date: 02/06/2018
 * Time: 14:16
 */

namespace Domain\Model;


class Inscricao
{
    /**
     * @var int
     */
    private $idInscricao;

    /**
     * @var string
     */
    private $candidato;

    /**
     * @var string
     */
    private $oportunidade;

    /**
     * @var string
     */
    private $codigoConfirmacao;

    /**
     * @var boolean
     */
    private $ativa;

    /**
     * Inscricao constructor.
     * @param string $candidato
     * @param string $oportunidade
     */
    public function __construct($candidato, $oportunidade)
    {
        $this->candidato = $candidato;
        $this->oportunidade = $oportunidade;
    }

    /**
     * @return string
     */
    public function getCandidato()
    {
        return $this->candidato;
    }

    /**
     * @return string
     */
    public function getOportunidade()
    {
        return $this->oportunidade;
    }

    /**
     * @return int
     */
    public function getIdInscricao()
    {
        return $this->idInscricao;
    }


    /**
     * @return string
     */
    public function getCodigoConfirmacao()
    {
        $this->codigoConfirmacao = substr(uniqid(rand(),true), -6,6);
    }
}