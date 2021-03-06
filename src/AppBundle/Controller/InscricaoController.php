<?php
/**
 * Created by PhpStorm.
 * User: Lab05usuario32
 * Date: 02/06/2018
 * Time: 14:12
 */

namespace AppBundle\Controller;


use Domain\Model\Inscricao;
use Presentation\DataTransferObject\InscricaoDTO;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InscricaoController extends Controller
{
    /**
     * @Route("inscricao/inscrever")
     * @param Request $request
     */
    public function inscreverAction(Request $request)
    {
        $serializerService = $this->get('infra.serializer.service');
        $inscricaoService = $this->get('app.inscricao.service');

        try{
            $incricao = $serializerService->converter($request->getContent(), InscricaoDTO::class);
            $resultado = $inscricaoService->inscrever($incricao);
        }catch (\Exception $exception){
            return new Response($exception->getMessage(),400);
        }
        return new Response("Inscrição realizada com sucesse !!");
    }

}