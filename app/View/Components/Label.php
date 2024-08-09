<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Label extends Component
{
    public string $titulo;
    public string $for;
    /**
     * Create a new component instance.
     */
    public function __construct(string $for, string $titulo)
    {
        $this->for = $for;
        $this->titulo = $titulo;
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.label');
    }
}
