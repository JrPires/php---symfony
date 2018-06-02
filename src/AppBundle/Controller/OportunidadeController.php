<?php
/**
 * Created by PhpStorm.
 * User: Lab05usuario32
 * Date: 12/05/2018
 * Time: 15:06
 */

namespace AppBundle\Controller;



use Domain\Model\Oportunidade;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OportunidadeController extends Controller
{
    /**
     * @Route("/oportunidade/salvar")
     * @Method("POST")
     * @param Request $request
     */
    public function salvarAction(Request $request){

        $serializerService = $this->get('infra.serializer.service');
        $oportunidadeService = $this->get('app.oportunidade.service');

        try{
            $oportunidade = $serializerService->converter($request->getContent(), Oportunidade::class);
            $oportunidadeService->salvar($oportunidade);
        }
        catch (\Exception $exception){
            return Response($exception->getMessage(), 400);
    }
        return new Response("Operação Concluida com Sucesso !!");
    }

    /**
     * @Route("/oportunidade/listar")
     */
    public function getOportunidade()
    {
        $oportunidadeService = $this->get('app.oportunidade.service');
        $serializerService = $this->get('infra.serializer.service');

        try{
           $oportunidades = $oportunidadeService->listarTudo();
        }catch (\Exception $exception){
            return new Response($exception->getMessage(), 400);
        }
        return new Response($serializerService->toJsonByGroups($oportunidades));
    }
}




