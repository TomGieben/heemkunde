<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ImageInput extends Component
{
    private ?string $url;
    /**
     * Create a new component instance.
     */
    public function __construct(?string $url = null)
    {
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.image-input', [
            'url' => $this->url,
        ]);
    }
}
