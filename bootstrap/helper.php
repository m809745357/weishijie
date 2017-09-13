<?php

function change_img_url($image)
{
    return strstr($image, 'http') ?: config('filesystems.disks.admin.url') . "/{$image}";
}
