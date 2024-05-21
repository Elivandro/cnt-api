<?php

declare(strict_types = 1);

namespace App\Livewire\Pulse;

use Illuminate\Contracts\View\View;
use Laravel\Pulse\Facades\Pulse;
use Laravel\Pulse\Livewire\Card;
use Livewire\Attributes\Lazy;

#[Lazy()]
class ComposerOutdated extends Card
{
    public function render(): View
    {
        $packages = Pulse::values('composer_outdated', ['output'])->first();

        $packages = json_decode($packages?->value, true)['installed'];

        return view('livewire.pulse.composer-outdated', compact('packages'));
    }
}
