<?php

namespace App\View\Components\Post;

use Illuminate\View\Component;

class Categories extends Component
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

        $categories = collect([
            ["categorie" =>  "categories Beitrage 1", "id" => 1],
            ["categorie" =>  "categories Beitrage 2", "id" => 2],
            ["categorie" =>  "categories categoriesBeitrage 3", "id" => 3],
            ["categorie" =>  "categories Beitrage 4", "id" => 4],
            ["categorie" =>  "categories Beitrage 5", "id" => 5]
        ]);
        return view('components.post.categories', compact('categories'));
        /* return view('components.post.newest',[
            "posts" => $posts
        ]);*/
    }
}
