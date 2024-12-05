<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardDistinctions extends Component
{
    public $img;
    public $title;
    public $text;
    
    public function __construct($img, $title, $text)
    {
        $this->img = $img;
        $this->title = $title;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-distinctions');
    }
}
