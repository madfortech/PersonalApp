<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Manipulations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Feed\FeedItem;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class Post  extends Model implements HasMedia
{

    use InteractsWithMedia,  HasFactory;
    use HasSlug;

    public $table = 'posts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    
    
    protected $fillable = [
        'title',
        'description',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
   
     public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Manipulations::FIT_CROP, 300, 300)
            ->nonQueued();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

     public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public static function getFeedItems(): Collection
    {
        $posts = self::all();

        $feedItems = new Collection();

        foreach ($posts as $post) {
            $feedItem = new FeedItem();

            $feedItem
                ->id($post->id)
                ->title($post->title)
                ->summary($post->description)
                ->updated($post->updated_at) // Use the 'updated_at' property directly
                ->authorName(Auth::user()->name)
                // Set other properties as needed
                ->link(route('posts.show', $post)); // Replace 'posts.show' with the route name for your post view page

            $feedItems->push($feedItem);
        }

        return $feedItems;
    }
}
