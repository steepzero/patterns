<?php


namespace App\Patterns\Adapter\Services;


interface ExternalServiceInterface
{
    public function doServiceLogic(): string;
}