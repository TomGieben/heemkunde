<?php

namespace App\View\Components;

use App\Models\ContactMessage;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ContactMessageAdminCard extends Component
{
    private ContactMessage $message;

    /**
     * Create a new component instance.
     */
    public function __construct(ContactMessage $message)
    {
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.contact-message-admin-card', [
            'message' => $this->message,
        ]);
    }
}
