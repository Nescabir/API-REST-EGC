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
    public function logAction($username, $password)
    {
        $userManager = $this->container->get('fos_user.user_manager');
        $user = $userManager->findUserByUsername($username);
        $serializer = $this->get('serializer');

        if ($user != null) {
            $encoder = \Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder();
            if ($encoder->isPasswordValid($user->getPassword(), $password, $user->getSalt())) {
                $jwtManager = $this->container->get('lexit_jwt_authentication.jwt_manager');
                $token = new Token($jwtManager->create($user));
            } else {
                $token = new Token("Bad Password");
            }
        } else {
            $token = new Token("Bad User");
        }

        return JsonResponse::fromJsonString($serializer->serialize($token, "json"));
    }
}