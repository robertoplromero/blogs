<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert2 extends Component
{

    public $class;
    /**
     * Create a new component instance.
     */
    public function __construct($type = 'info')
    {
            $class = '';
            switch($type){
                case 'info':
                $class = 'bg-blue-500';
                break;
                case 'danger':
                    $class = 'bg-red-500';
                break;
                case 'success':
                    $class = 'bg-green-500';
                break;
                case 'warning':
                    $class = 'bg-yellow-500';
                break;
                case 'dark':
                    $class = 'bg-gray-800';
                break;
                default:
                    $class = 'bg-gray-500';
                break;
            }

            $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2');
    }
}
