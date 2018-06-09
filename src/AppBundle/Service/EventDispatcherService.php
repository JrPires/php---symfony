<?php
/**
 * Created by PhpStorm.
 * User: Lab05usuario32
 * Date: 09/06/2018
 * Time: 14:28
 */

namespace AppBundle\Service;


use AppBundle\Event\InscricaoEvent;
use Domain\Model\Inscricao;

class EventDispatcherService
{
    /**
     * @var EventDispatcherInterface $eventDispatcher
     */
    private $eventDispatcher;

    /**
     * EventDispatcherService constructor.
     * @param EventDispatcherInterface $eventDispatcher
     */
    public function __construct(EventDispatcherInterface $eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    public function dispatcherInscricaoEvent(Inscricao $inscricao){

        $inscricaoEvent = new InscricaoEvent($inscricao);
        $this->eventDispatcher->dispatch(InscricaoEvent::INSCRICAO, $inscricaoEvent);
    }
}