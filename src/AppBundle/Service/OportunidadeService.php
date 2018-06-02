<?php
/**
 * Created by PhpStorm.
 * User: Lab05usuario32
 * Date: 19/05/2018
 * Time: 14:35
 */

namespace AppBundle\Service;


use Domain\Model\Oportunidade;
use Domain\Repository\OportunidadeRepositoryInterface;
use Domain\Service\OportunidadeServiceInterface;

class OportunidadeService implements OportunidadeServiceInterface
{
    /**
     * @var
     */
    private $oportunidadeRepository;

    /**
     * OportunidadeService constructor.
     * @param OportunidadeRepositoryInterface $oportunidadeRepository
     */
    public function __construct(OportunidadeRepositoryInterface $oportunidadeRepository)
    {
        $this->oportunidadeRepository = $oportunidadeRepository;
    }
    public function salvar(Oportunidade $oportunidade)
    {
        $this->oportunidadeRepository->salvar($oportunidade);
    }


}