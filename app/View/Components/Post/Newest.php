<?php

namespace App\View\Components\Post;

use Illuminate\View\Component;

class Newest extends Component
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
        $posts = collect([
            ["title" =>  "Beitrage 1", "id" => 1],
            ["title" =>  "Beitrage 2", "id" => 2],
            ["title" =>  "Beitrage 3", "id" => 3],
            ["title" =>  "Beitrage 4", "id" => 4],
            ["title" =>  "Beitrage 5", "id" => 5]
        ]);
        return view('components.post.newest', compact('posts'));
        /* return view('components.post.newest',[
            "posts" => $posts
        ]);*/
    }
}
