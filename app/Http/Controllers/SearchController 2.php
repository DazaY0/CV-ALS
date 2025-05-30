<?php

// app/Http/Controllers/SearchController.php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Page;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        if (empty($query)) {
            return redirect()->back();
        }

        // Search in Articles with translations
        $articles = Article::whereHas('translations', function($q) use ($query) {
            $q->where('title', 'like', "%{$query}%")
                ->orWhere('description', 'like', "%{$query}%");
        })
            ->with('translations')
            ->get();

        // Search in Pages with translations
        $pages = Page::whereHas('translations', function($q) use ($query) {
            $q->where('title', 'like', "%{$query}%")
                ->orWhere('description', 'like', "%{$query}%");
        })
            ->with('translations')
            ->get();

        return view('search.results', compact('articles', 'pages', 'query'));
    }
}
