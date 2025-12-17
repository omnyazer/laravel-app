<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Article extends Component
{
    public string $title;
    public string $description;
    public ?int $id;

    public function __construct(string $title, string $description, int $id = null)
    {
        $this->title = $title;
        $this->description = $description;
        $this->id = $id;
    }

    public function render()
    {
        return view('components.article');
    }
}
