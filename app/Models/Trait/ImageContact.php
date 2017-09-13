<?php

namespace App\Models\Tools;

trait ImageContact
{
    public function getImageAttribute($image)
    {
        return change_img_url($image);
    }

    public function getBannerAttribute($banner)
    {
        return change_img_url($banner);
    }

    public function getEwmAttribute($ewm)
    {
        return change_img_url($ewm);
    }

    public function getLogoAttribute($logo)
    {
        return change_img_url($logo);
    }

    public function getVideoAttribute($video)
    {
        return change_img_url($video);
    }
}
