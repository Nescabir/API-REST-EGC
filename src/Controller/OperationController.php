<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 18/10/2018
 * Time: 11:00
 */

namespace App\Controller;


use App\Entity\Operations;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use \Symfony\Component\HttpFoundation\JsonResponse;

class OperationController extends Controller
{
    /**
     * @Route(
     *     name="byNumerocompteJoueur",
     *     path="/operations/byNumerocompte/{numerocompte}",
     *     methods="GET",
     *     defaults={
     *      "_api_resource_class"=Operations::class,
     *     }
     * )
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function byNumerocompteAction(Request $request){

        $tab = explode("/",$request->getPathInfo());
        $serializer = $this->get("serializer");
        $parties = $this->getDoctrine()
            ->getRepository(Operations::class)
            ->findOperationsByNumCompte($tab[3]);

        return JsonResponse::fromJsonString($serializer->serialize($parties,"json"));
    }

    /**
     * @Route(
     *     name="operationsByDate",
     *     path="/operations/byDate/{date}",
     *     methods="GET",
     *     defaults={
     *      "_api_resource_class"=Operations::class,
     *     }
     * )
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function byDateAction(Request $request){

        $tab = explode("/",$request->getPathInfo());
        $serializer = $this->get("serializer");
        $parties = $this->getDoctrine()
            ->getRepository(Operations::class)
            ->findOperationsByDate($tab[3]);

        return JsonResponse::fromJsonString($serializer->serialize($parties,"json"));
    }


    // public function byNumerocompteAction(Request $request){
    //
    //     $tab = explode("/",$request->getPathInfo());
    //     $em = $this->getDoctrine()->getManager();
    //     $entitie = $em ->getRepository("App\Entity\Operations")->findByNumerocompte($tab[3]);
    //
    //     $serializer = $this->get("serializer");
    //     return JsonResponse::fromJsonString($serializer->serialize($entitie,"json"));
    // }
}
