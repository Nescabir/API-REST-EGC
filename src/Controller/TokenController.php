<?php
namespace App\Controller;

use App\Entity\User;
use App\Entity\Token;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use \Symfony\Component\HttpFoundation\JsonResponse;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;

class TokenController extends Controller
{
    // @Route("/log/{username}/{password}", name="get_token")

    /**
     * @Route(
     *     name="get_token",
     *     path="/tokens/log/{username}/{password}",
     *     methods="GET",
     *     defaults={
     *      "_api_resource_class"=Token::class,
     *     }
     * )
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getTokenAction($username,$password)
    {
        $userManager = $this->container->get('fos_user.user_manager');
        $user = $userManager->findUserByUsername($username);
        $serializer = $this->get('serializer');
        if ($user!=null) {
            $encoder = new \Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder();
            // on va encoder à la main et vérifier par rapport à celui en base
            if ($encoder->isPasswordValid($user->getPassword(),$password,$user->getSalt())) {
                $jwtManager = $this->container->get('lexik_jwt_authentication.jwt_manager');
                $token = new Token($jwtManager->create($user));
            }else $token = new Token("Bad Mdp");
        } else $token = new Token("Bad User");
        return JsonResponse::fromJsonString($serializer->serialize($token,"json"));
    }
}