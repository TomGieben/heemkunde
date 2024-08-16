<?php

namespace App\View\Components;

use App\Helpers\Breadcrumb;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BreadCrumbs extends Component
{
    public array $breadcrumbs;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->breadcrumbs = Breadcrumb::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.bread-crumbs', [
            'breadcrumbs' => $this->breadcrumbs,
        ]);
    }
}
