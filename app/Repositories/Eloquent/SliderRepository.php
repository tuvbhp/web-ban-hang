<?php

namespace App\Repositories\Eloquent;


use App\Slider;
use App\Repositories\Contracts\SliderRepositoryInterface;
use Illuminate\Support\Str;

class SliderRepository extends BaseRepository implements SliderRepositoryInterface
{
    protected $slider;

    public function getModel()
    {
        return Slider::class;
    }

    public function getAllslider()
    {
        return Slider::all();
    }


}
