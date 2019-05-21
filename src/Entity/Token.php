<?php

namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiProperty;

/**  
 * @ApiResource(
 *     collectionOperations={},
 *     itemOperations={
 *       "get_token"={
 *          {"route_name"="get_token"},
 *          "swagger_context" = {
 *              "operationId"="getToken",
 *              "parameters" = {
 *                  {
 *                      "name" = "username",
 *                      "required" = true,
 *                      "type" = "string",
 *                      "in" = "path",
 *                      "description" = "username of the user"
 *                  },
 *                  {
 *                      "name" = "password",
 *                      "required" = true,
 *                      "type" = "string",
 *                      "in" = "path",
 *                      "description" = "password of the user"
 *                  }
 *              },
 *              "produces" = {
 *                 "application/json"
 *               }
 *          }
 *      }
 *     }
 * )
 */

class Token
{
    /**
     * 
     * @ApiProperty(
     *      attributes={
     *         "swagger_context"={"type"="string"}
     *     }
     * )
     */
    protected $token;

    /** 
     *   Token constructor
     *   @param $token
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**  
     *   @param mixed $token
     */
    public function setToken($token): void
    {
        $this->token = $token;
    }
}