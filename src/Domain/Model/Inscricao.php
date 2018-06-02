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
}