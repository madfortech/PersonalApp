<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Carbon\Carbon;
use Spatie\Sitemap\Contracts\Sitemapable;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;

class Post extends Model implements HasMedia,Feedable
{
    use HasFactory;
    use SoftDeletes;
    use InteractsWithMedia;
    use HasFactory;
   
    protected $fillable = ['title', 'description','created_at','updated_at'];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function toSitemapTag(): Url | string | array
    {
        // Simple return:
        return route('posts.show', $this);

        // Return with fine-grained control:
        return Url::create(route('posts.show', $this))
            ->setLastModificationDate(Carbon::create($this->updated_at))
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
            ->setPriority(0.1);
    }

    /**
     * Get the user that owns the resource.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo The user that owns the resource.
    */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function url()
    {
        if ($this->slug) {
            return route('posts.show', $this->slug);
        }
        return route('posts.show', $this->id);
    }

    public function toFeedItem(): FeedItem
    {
        return FeedItem::create()
            ->id($this->id)
            ->title($this->title)
            ->summary($this->description)
            ->updated($this->updated_at)
            ->link($this->url())
            ->authorName($this->title);
    }
    
    public static function getFeedItems()
    {
        return Post::all();
    }
 
    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Manipulations::FIT_CROP, 300, 300)
            ->nonQueued();
    }
}