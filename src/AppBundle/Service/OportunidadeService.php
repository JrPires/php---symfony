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
  //  public function salvar(Oportunidade $oportunidade)
  //   {
  //      $this->oportunidadeRepository->salvar($oportunidade);
   // }

    public function salvar(Oportunidade $oportunidade)
    {
        if ($this->oportunidadeRepository->findBy(['descricao'=> $oportunidade->getDescricao()])){
            throw new \Exception("Oportunidade com está descrição já existe.");
        }
        $this->oportunidadeRepository->salvar($oportunidade);
    }


    /**
     * @return array
     */
    public function listarTudo()
    {
        return $this->oportunidadeRepository->findAll();
    }
}