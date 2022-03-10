<?php

namespace App\View\Components\Post;

use Illuminate\View\Component;

class Trending extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $trending = collect([
            ["trending" =>  "trending Beitrage 1", "id" => 1],
            ["trending" =>  "trending Beitrage 2", "id" => 2],
            ["trending" =>  "trending Beitrage 3", "id" => 3],
            ["trending" =>  "trending Beitrage 4", "id" => 4],
            ["trending" =>  "trending Beitrage 5", "id" => 5]
        ]);
        return view('components.post.trending', compact('trending'));
    }
}
