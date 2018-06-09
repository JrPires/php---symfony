<?php
/**
 * Created by PhpStorm.
 * User: Lab05usuario32
 * Date: 09/06/2018
 * Time: 10:16
 */

namespace Presentation\DataTransferObject;


use Domain\Model\Candidato;
use Domain\Model\Oportunidade;

class InscricaoDTO
{
    /**
     * @var Candidato
     */
    private $candidato;

    /**
     * @var Oportunidade
     */
    private $oportunidade;

    /**
     * @return Candidato
     */
    public function getCandidato()
    {
        return $this->candidato;
    }

    /**
     * @return Oportunidade
     */
    public function getOportunidade()
    {
        return $this->oportunidade;
    }


}