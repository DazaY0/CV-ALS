<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use App\Repositories\ArticleRepository;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use A17\Twill\Models\Model;

class Article extends Model
{
    use HasBlocks, HasTranslation, HasSlug, HasMedias, HasRevisions, HasFactory;

    protected $fillable = [
        'published',
        'title',
        'description',
    ];
    protected $mediasParams = [
        'cover' => [ // This role name must match what you use in the block editor
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 0, // Adjust ratio as needed
                ],
            ],
        ]];

    public $translatedAttributes = [
        'title',
        'description',
    ];

    public $slugAttributes = [
        'title',
    ];


    public function resolveRouteBinding($slug, $field = null)
    {
        $article = app(ArticleRepository::class)->forSlug($slug);

        abort_if(! $article, 404);

        return $article;
    }

    // #region routekey
    public function getLocalizedRouteKey($locale)
    {
        return $this->getSlug($locale);
    }
}
