<?php

namespace App;

use App\Commands\AdapterCommand;
use App\Infrastructure\CommandInterface;

class Kernel
{
    protected static $patterns = [
        'adapter' => AdapterCommand::class
    ];

    public static function run($cliArgs)
    {
        $pattern = $cliArgs[1] ?? null;
        if (!$pattern) {
            $message = <<<MES
Specify a pattern as an argument to the run.sh script

MES;
            die($message);

        }

        static::runPattern($pattern);
    }

    protected static function runPattern($pattern)
    {
        /** @var CommandInterface $command */
        $command = new static::$patterns[$pattern];
        $command->run();
    }
}