<?php
/**
 * Created by PhpStorm.
 * User: Lab05usuario32
 * Date: 02/06/2018
 * Time: 11:34
 */

namespace Domain\Model;


class Candidato
{
    /**
     * @var integer
     */
    private $idCandidato;

    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */

    private $telefone;


    private $curriculo;

    private $cpf;

    /**
     * @var collection
     */
    private $habilidadesTecnicas;

    /**
     * @var collection
     */
    private $experienciasProficionais;

    /**
     * @return string
     */
    public function getCpf()
    {
        return $this->cpf;
    }


}