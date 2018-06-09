<?php
/**
 * Created by PhpStorm.
 * User: Lab05usuario32
 * Date: 09/06/2018
 * Time: 14:39
 */

namespace AppBundle\EventListener;


use AppBundle\Event\InscricaoEvent;
use Domain\Model\Inscricao;
use Infrastructure\Service\EmailService;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class EnviarEmailSubscriber implements EventSubscriberInterface
{

    /**
     * Returns an array of event names this subscriber wants to listen to.
     *
     * The array keys are event names and the value can be:
     *
     *  * The method name to call (priority defaults to 0)
     *  * An array composed of the method name to call and the priority
     *  * An array of arrays composed of the method names to call and respective
     *    priorities, or 0 if unset
     *
     * For instance:
     *
     *  * array('eventName' => 'methodName')
     *  * array('eventName' => array('methodName', $priority))
     *  * array('eventName' => array(array('methodName1', $priority), array('methodName2')))
     *
     * @return array The event names to listen to
     */

    /**
     * @var EmailService
     */
    private $emailService;
    public static function getSubscribedEvents()
    {
        return [
            InscricaoEvent::INSCRICAO => [['onInscricao', 200]]
        ];
    }

    public function onInscricao(InscricaoEvent $inscricaoEvent)
    {
        $inscricao = $inscricaoEvent->getInscricao();
        $this->emailService->enviarNotificacaoInscricao($inscricao);
    }
}