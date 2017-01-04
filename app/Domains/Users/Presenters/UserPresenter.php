<?php

namespace App\Domains\Users\Presenters;

use App\Support\Laravel\ViewPresenter\Presenter;
use Illuminate\Support\Str;

/**
 * Class UserPresenter.
 */
class UserPresenter extends Presenter
{
    public function normalizedName()
    {
        return ucwords(Str::lower($this->entity->name));
    }
}
