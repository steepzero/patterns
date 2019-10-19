<?php


namespace App\Patterns\Adapter\Services\Second;


use App\Patterns\Adapter\Services\ExternalServiceInterface;

class SecondExternalServiceAdapter implements ExternalServiceInterface
{
    /**
     * @var SecondExternalServiceInterface
     */
    protected $secondExternalService;

    /**
     * SecondExternalServiceAdapter constructor.
     *
     * @param SecondExternalServiceInterface $secondExternalService
     */
    public function __construct(SecondExternalServiceInterface $secondExternalService)
    {
        $this->secondExternalService = $secondExternalService;
    }

    public function doServiceLogic(): string
    {
        return $this->secondExternalService->send();
    }
}