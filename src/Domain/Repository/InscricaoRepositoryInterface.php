<?php
/**
 * Created by PhpStorm.
 * User: Lab05usuario32
 * Date: 09/06/2018
 * Time: 11:49
 */

namespace Domain\Repository;


use Domain\Model\Inscricao;

interface InscricaoRepositoryInterface
{
    /**
     * @param Inscricao $inscricao
     * @return void
     */
    public function salvar(Inscricao $inscricao);


    public function buscarUmPorCpfOportunidade(Inscricao $inscricao);
}