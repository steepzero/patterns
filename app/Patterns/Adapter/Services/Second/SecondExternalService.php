<?php


namespace App\Patterns\Adapter\Services\Second;

/**
 * Class SecondExternalService
 *
 * This service cannot be used by Business class without adapter
 *
 * @package App\Patterns\Adapter\Services\Second
 */
class SecondExternalService implements SecondExternalServiceInterface
{
    public function send(): string
    {
        return "second external service";
    }
}