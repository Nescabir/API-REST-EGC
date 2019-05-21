<?php
/**
 * Created by PhpStorm.
 * User: bruel
 * Date: 16/10/2018
 * Time: 00:19
 */

namespace App\Controller;

use App\Entity\Avis;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use \Symfony\Component\HttpFoundation\JsonResponse;

class AvisController extends Controller
{
    /**
     * @Route(
     *     name="byPseudojoueurAvis",
     *     path="/avis/byPseudojoueur/{pseudojoueur}",
     *     methods="GET",
     *     defaults={
     *      "_api_resource_class"=Avis::class,
     *     }
     * )
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function byPseudojoueurAction(Request $request){

        $tab = explode("/",$request->getPathInfo());
            $em = $this->getDoctrine()->getManager();
        $entitie = $em ->getRepository("App\Entity\Avis")->findByPseudojoueur($tab[3]);

        $serializer = $this->get("serializer");
        return JsonResponse::fromJsonString($serializer->serialize($entitie,"json"));
    }

    /**
     * @Route(
     *     name="bySalleAvis",
     *     path="/avis/BySalle/{idsalle}",
     *     methods="GET",
     *     defaults={
     *      "_api_resource_class"=Avis::class,
     *     }
     * )
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function bySalleAction(Request $request){

        $tab = explode("/",$request->getPathInfo());
        $em = $this->getDoctrine()->getManager();
        $entitie = $em ->getRepository("App\Entity\Avis")->findByIdsalle($tab[3]);

        $serializer = $this->get("serializer");
        return JsonResponse::fromJsonString($serializer->serialize($entitie,"json"));
    }
}
