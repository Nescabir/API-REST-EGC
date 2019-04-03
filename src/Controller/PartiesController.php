<?php
/**
 * Created by PhpStorm.
 * User: a
 * Date: 18/10/2018
 * Time: 09:27
 */

namespace App\Controller;


use App\Entity\Parties;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use \Symfony\Component\HttpFoundation\JsonResponse;

class PartiesController extends Controller
{
    /**
     * @Route(
     *     name="byDate",
     *     path="/parties/byDate/{date}",
     *     methods="GET",
     *     defaults={
     *      "_api_resource_class"=Parties::class,
     *     }
     * )
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function ByDateAction(Request $request){

        $tab = explode("/",$request->getPathInfo());
        //     $em = $this->getDoctrine()->getManager();
        // $entitie = $em ->getRepository("App\Entity\Parties")->findPartiesByDate($tab[3]);
        //
        $serializer = $this->get("serializer");
        // return JsonResponse::fromJsonString($serializer->serialize($entitie,"json"));
        $parties = $this->getDoctrine()
            ->getRepository(Parties::class)
            ->findPartiesByDate($tab[3]);

        return JsonResponse::fromJsonString($serializer->serialize($parties,"json"));
    }
}
