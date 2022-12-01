<?php

namespace App\View\Components;

use Illuminate\View\Component;

class page extends Component
{
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public $title;
  public $js = null;
  public function __construct($title)
  {
    $this->title = $title;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    return view('layouts.page');
  }
}
