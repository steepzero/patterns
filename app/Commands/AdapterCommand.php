<?php


namespace App\Commands;


use App\Infrastructure\CommandInterface;
use App\Patterns\Adapter\Adapter;
use App\Patterns\Adapter\Business;
use App\Patterns\Adapter\ContactService;
use App\Patterns\Adapter\Services\First\FirstExternalService;
use App\Patterns\Adapter\Services\Second\SecondExternalService;
use App\Patterns\Adapter\Services\Second\SecondExternalServiceAdapter;
use App\Patterns\Adapter\TelegramService;

class AdapterCommand implements CommandInterface
{

    public function run()
    {
        echo "adapter\n\n";
        echo "service one\n\n";
        $serviceOne = new FirstExternalService();
        $businessOne = new Business($serviceOne);
        $businessOne->doBusinessLogic();

        echo "service two\n\n";
        $serviceTwo = new SecondExternalService();
        $adapter = new SecondExternalServiceAdapter($serviceTwo);
        $businessTwo = new Business($adapter);
        $businessTwo->doBusinessLogic();
    }
}