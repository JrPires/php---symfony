<?php
/**
 * Created by PhpStorm.
 * User: Lab05usuario32
 * Date: 09/06/2018
 * Time: 11:44
 */

namespace Domain\Service;


use Presentation\DataTransferObject\InscricaoDTO;

interface InscricaoServiceInterface
{
    /**
     * @param InscricaoDTO $inscricaoDTO
     * @return int
     */
    public function inscrever(InscricaoDTO $inscricaoDTO);

}