<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function createSeed(): string
    {
        Article::truncate();

        Article::create([
            'title' => 'L’IA soigne mieux',
            'description' => 'L’intelligence artificielle aide les médecins à diagnostiquer plus vite.',
        ]);

        Article::create([
            'title' => 'Villes vertes',
            'description' => 'Les métropoles deviennent plus écologiques et durables.',
        ]);

        Article::create([
            'title' => 'Télétravail',
            'description' => 'Plus de liberté, mais aussi plus de solitude.',
        ]);

        return 'Articles créés';
    }

    public function updateStatic(int $id): string
    {
        $article = Article::findOrFail($id);

        $article->update([
            'title' => $article->title . ' (mis à jour)',
        ]);

        return "Article $id mis à jour";
    }

    public function delete(int $id): string
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return "Article $id supprimé";
    }

    public function show(int $id)
    {
        $article = Article::findOrFail($id);

        return view('pages.article-details', [
            'article' => $article,
        ]);
    }
}
