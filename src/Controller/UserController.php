<?php
/**
 * Created by PhpStorm.
 * User: ablyat
 * Date: 11/10/2018
 * Time: 11:24
 */

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use \Symfony\Component\HttpFoundation\JsonResponse;

class UserController extends Controller
{
    /**
     * @Route(
     *     name="byUsername",
     *     path="/users/byUsername/{username}",
     *     methods="GET",
     *     defaults={
     *      "_api_resource_class"=User::class,
     *     }
     * )
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function byUsernameAction(Request $request){

        $tab = explode("/",$request->getPathInfo());
            $em = $this->getDoctrine()->getManager();
        $entitie = $em->getRepository("App\Entity\User")->findOneByUsername($tab[3]);

        $serializer = $this->get("serializer");
        return JsonResponse::fromJsonString($serializer->serialize($entitie,"json"));
    }
}