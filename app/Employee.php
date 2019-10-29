<?php

namespace App;

use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Employee extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $casts = [
        'disciplines' => 'collection',
    ];

    public function registerMediaCollections()
    {
        $this
            ->addMediaCollection('profile')
            ->useFallbackUrl(asset('img/placeholder/user.png'))
            ->useFallbackPath(public_path('/img/placeholder/user.png'))
            ->singleFile();
    }

    public function registerMediaConversions(Media $media = null)
    {
        $this
            ->addMediaConversion('tiny-thumb')
            ->crop(Manipulations::CROP_CENTER, 50, 50);
        
        $this
            ->addMediaConversion('thumb')
            ->crop(Manipulations::CROP_CENTER, 100, 100);
        
        $this
            ->addMediaConversion('large')
            ->crop(Manipulations::CROP_CENTER, 500, 500);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
