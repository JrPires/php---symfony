<?php
/**
 * Created by PhpStorm.
 * User: Lab05usuario32
 * Date: 09/06/2018
 * Time: 14:34
 */

namespace AppBundle\Event;


use Domain\Model\Inscricao;
use Symfony\Component\EventDispatcher\Event;


class InscricaoEvent extends Event
{
    /**
     * @Event("AppBundle\Event\InscricaoEvent")
     */
    const INSCRICAO = 'inscricao';

    /**
     * @var Inscricao
     */
    private $inscricao;

    /**
     * InscricaoEvent constructor.
     * @param Inscricao $inscricao
     */
    public function __construct(Inscricao $inscricao)
    {
        $this->inscricao = $inscricao;
    }

    /**
     * @return Inscricao
     */
    public function getInscricao()
    {
        return $this->inscricao;
    }


}