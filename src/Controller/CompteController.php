<?php
/**
 * Created by PhpStorm.
 * User: bruel
 * Date: 14/10/2018
 * Time: 20:26
 */

namespace App\Controller;

use App\Entity\Compte;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use \Symfony\Component\HttpFoundation\JsonResponse;

class CompteController extends Controller
{
    /**
     * @Route(
     *     name="byPseudojoueur",
     *     path="/comptes/byPseudojoueur/{pseudojoueur}",
     *     methods="GET",
     *     defaults={
     *      "_api_resource_class"=Compte::class,
     *     }
     * )
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function ByPseudojoueurAction(Request $request){

        $tab = explode("/",$request->getPathInfo());
        $em = $this->getDoctrine()->getManager();
        $entitie = $em ->getRepository("App\Entity\Compte")->findOneByPseudojoueur($tab[3]);

        $serializer = $this->get("serializer");
        return JsonResponse::fromJsonString($serializer->serialize($entitie,"json"));
    }
}