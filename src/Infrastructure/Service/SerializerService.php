<?php
/**
 * Created by PhpStorm.
 * User: Lab05usuario32
 * Date: 12/05/2018
 * Time: 15:57
 */

namespace Infrastructure\Service;


use JMS\Serializer\Serializer;

class SerializerService
{
    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * SerializerService constructor.
     * @param Serializer $serializer
     */
    public function __construct(Serializer $serializer)
    {
        $this->serializer = $serializer;
    }
    public function converter($json, $tipo){
        try{
            return $this->serializer->deserialize($json, $tipo, 'json');
            dump($oportunidade); die;
        }catch (\Exception $exception){
            dump($exception->getMessage()); die;
        }
    }
}