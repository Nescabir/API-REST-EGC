<?php
/**
 * Created by PhpStorm.
 * User: ablyat
 * Date: 11/10/2018
 * Time: 11:24
 */

namespace App\Controller;

use App\Entity\Joueur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use \Symfony\Component\HttpFoundation\JsonResponse;

class JoueurController extends Controller
{
    /**
     * @Route(
     *     name="byPseudo",
     *     path="/joueurs/byPseudo/{pseudo}",
     *     methods="GET",
     *     defaults={
     *      "_api_resource_class"=Joueur::class,
     *     }
     * )
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function byPseudoAction(Request $request){

        $tab = explode("/",$request->getPathInfo());
            $em = $this->getDoctrine()->getManager();
        $entitie = $em->getRepository("App\Entity\Joueur")->findOneByPseudo($tab[3]);

        $serializer = $this->get("serializer");
        return JsonResponse::fromJsonString($serializer->serialize($entitie,"json"));
    }

    /**
     * @Route(
     *      name="byIdjoueur",
     *      path="/joueurs/byIdjoueur/{idjoueur}",
     *      methods="GET",
     *      defaults={
     *       "_api_resource_class"=Joueur::class,
     *      }
     * )
     * 
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function byIdjoueurAction(Request $request)
    {
        $tab = explode("/",$request->getPathInfo());
            $em = $this->getDoctrine()->getManager();
        $entitie = $em->getRepository("App\Entity\Joueur")->findOneByIdjoueur($tab[3]);

        $serializer = $this->get("serializer");
        return JsonResponse::fromJsonString($serializer->serialize($entitie,"json"));
    }
}