<?php

declare(strict_types = 1);

namespace App\Pulse\Recorders;

use Illuminate\Config\Repository;
use Illuminate\Support\Facades\Process;
use Laravel\Pulse\Events\SharedBeat;
use Laravel\Pulse\Pulse;

final class ComposerOutdated
{
    public string $listen = SharedBeat::class;

    public function __construct(protected Pulse $pulse, protected Repository $config)
    {
        //
    }

    public function record(SharedBeat $event): void
    {
//        if($event->time !== $event->time->startOfDay()){
//            return;
//        }

        $outdated = Process::run('composer outdated -D -f json');


        $this->pulse->set('composer_outdated', 'output', $outdated->output());
    }
}
