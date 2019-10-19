<?php


namespace App\Patterns\Adapter;


use App\Patterns\Adapter\Services\ExternalServiceInterface;

class Business
{
    /**
     * @var ExternalServiceInterface
     */
    protected $service;

    /**
     * Business constructor.
     *
     * @param ExternalServiceInterface $service
     */
    public function __construct(ExternalServiceInterface $service)
    {
        $this->service = $service;
    }

    public function doBusinessLogic()
    {
        echo "Try to do a business logic\n";

        echo $this->service->doServiceLogic()."\n";
    }
}