<?php

namespace AppBundle\Service;

use Domain\Model\Inscricao;
use Domain\Repository\InscricaoRepositoryInterface;
use Domain\Service\InscricaoServiceInterface;
use Presentation\DataTransferObject\InscricaoDTO;

class InscricaoService implements InscricaoServiceInterface
{
    /**
     * @var EventDispatcherService
     */
    private $eventDispatcherService;

    /**
     * @var InscricaoRepositoryInterface
     */
    private $inscricaoRepository;

    /**
     * InscricaoService constructor.
     * @param EventDispatcherService $eventDispatcherService
     * @param InscricaoRepositoryInterface $inscricaoRepository
     */
    public function __construct(
        EventDispatcherService $eventDispatcherService,
        InscricaoRepositoryInterface $inscricaoRepository
    ) {
        $this->eventDispatcherService = $eventDispatcherService;
        $this->inscricaoRepository = $inscricaoRepository;
    }

    /**
     * @param InscricaoDTO $inscricaoDTO
     * @return int
     * @throws \Exception
     */
    public function inscrever(InscricaoDTO $inscricaoDTO)
    {
        $inscricao = new Inscricao(
            $inscricaoDTO->getCandidato(),
            $inscricaoDTO->getOportunidade()
        );

        if ($this->inscricaoRepository->buscarUmPorCpfOportunidade($inscricao)) {
            throw new \Exception("Você já se inscreveu nesta oportunidade");
        }

        $inscricao->gerarCodigoConfirmacao();

        $this->inscricaoRepository->salvar($inscricao);
        $this->eventDispatcherService->dispatcherInscricaoEvent($inscricao);

        return $inscricao->getIdInscricao();
    }
}
