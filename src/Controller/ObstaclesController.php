<?php

namespace App\Controller;


use App\Entity\Obstacles;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use \Symfony\Component\HttpFoundation\JsonResponse;

class ObstaclesController extends Controller
{
    /**
     * @Route(
     *     name="byPartie",
     *     path="/obstacles/byPartie/{idPartie}",
     *     methods="GET",
     *     defaults={
     *      "_api_resource_class"=Obstacles::class,
     *     }
     * )
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function ByPartieAction(Request $request){

        $tab = explode("/",$request->getPathInfo());
        //     $em = $this->getDoctrine()->getManager();
        // $entitie = $em ->getRepository("App\Entity\Parties")->findPartiesByDate($tab[3]);
        //
        $serializer = $this->get("serializer");
        // return JsonResponse::fromJsonString($serializer->serialize($entitie,"json"));
        $parties = $this->getDoctrine()
            ->getRepository(Obstacles::class)
            ->findObstaclesByPartie($tab[3]);

        return JsonResponse::fromJsonString($serializer->serialize($parties,"json"));
    }
}
