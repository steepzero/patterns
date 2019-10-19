<?php


namespace App\Patterns\Adapter\Services\Second;


interface SecondExternalServiceInterface
{
    public function send(): string;
}