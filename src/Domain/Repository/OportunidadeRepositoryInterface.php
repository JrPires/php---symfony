<?php
/**
 * Created by PhpStorm.
 * User: Lab05usuario32
 * Date: 19/05/2018
 * Time: 14:17
 */

namespace Domain\Repository;


use Domain\Model\Oportunidade;

interface OportunidadeRepositoryInterface
{
    /**
     * @param Oportunidade $oportunidade
     * @return void
     */

    public function salvar(Oportunidade $oportunidade);

}