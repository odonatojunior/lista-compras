<?php

namespace App\View\Components;

use App\Models\ShopList;
use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
      $lastList = ShopList::where('user_id', auth()->id())
        ->orderBy('created_at', 'desc')
        ->take(1)
        ->get();
        // dd($lastList);
      return view('layouts.app', ['lastList' => $lastList]);
    }
}
