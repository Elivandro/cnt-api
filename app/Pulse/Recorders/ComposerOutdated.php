<?php

namespace App\Pulse\Recorders;

use Illuminate\Config\Repository;
use Illuminate\Support\Facades\Process;
use Laravel\Pulse\Events\SharedBeat;

final class ComposerOutdated
{
    public string $listen = SharedBeat::class;

    public function __construct(protected $pulse, protected Repository $config)
    {
        //
    }

    public function record(SharedBeat $event): void
    {

        $outdated = Process::run('composer outdated -D -f json');


        $this->pulse->set('composer_outdated', 'output', $outdated->output());
    }
}
