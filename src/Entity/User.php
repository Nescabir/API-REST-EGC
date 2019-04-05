<?php

namespace App\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use FOS\UserBundle\Model\UserInterface;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * User
 *
 * @ApiResource(
 *     collectionOperations={
 *     },
 *     itemOperations={
 *      "get",
 *      "byUsername"={
 *          {"route_name"="byUsername"},
 *          "swagger_context" = {
 *              "operationId"="getByUsername",
 *              "parameters" = {
 *                  {
 *                      "name" = "username",
 *                      "required" = true,
 *                      "type" = "string",
 *                      "in" = "path"
 *                  }
 *              },
 *              "produces" = {
 *                 "application/json"
 *               }
 *          }
 *      }
 *     }
 * )
 * 
 * @ORM\Table(name="fos_user")
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
  protected $id;

  public function __contrust()
  {
    parent::__construct();
  }

  public function getId(): ?int
  {
      return $this->id;
  }
}
