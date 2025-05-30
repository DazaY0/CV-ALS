<?php

namespace App\Http\Controllers;

use A17\Twill\Facades\TwillAppSettings;
use App\Repositories\ArticleRepository;
use App\Repositories\PageRepository;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    protected $repository;

    public function __construct(ArticleRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {

        return view('site.articles.index', [

        ]);
    }

    public function show(string $slug, ArticleRepository $articleRepository): View
    {
        $page = $articleRepository->forSlug($slug);

        if (!$page) {
            abort(404);
        }

        return view('site.articles.page', ['item' => $page]);
    }

    public function byTag($tag)
    {
        $articles = $this->repository->published()
            ->withTag($tag)
            ->orderBy('publish_start_date', 'desc')
            ->get();

        return view('site.articles.index', [
            'articles' => $articles,
            'tag' => $tag
        ]);
    }
}
