<?php


namespace App\Patterns\Adapter\Services\First;


use App\Patterns\Adapter\Services\ExternalServiceInterface;

class FirstExternalService implements ExternalServiceInterface
{
    public function doServiceLogic(): string
    {
        return "first external service";
    }
}