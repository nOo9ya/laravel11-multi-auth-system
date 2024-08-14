<?php

namespace App\View\Components\Teacher;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppTeacherLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('teacher.layouts.app');
    }
}
