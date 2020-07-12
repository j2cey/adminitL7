<?php

namespace App\Traits;


trait BaseTrait
{
    use Uuidable, StatusTrait;

    public static function bootBaseTrait()
    {
        static::saving(function ($model) {
            $model->setDefaultStatus();
        });
    }
}
