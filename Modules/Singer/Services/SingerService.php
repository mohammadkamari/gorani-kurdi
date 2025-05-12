<?php

namespace Modules\Singer\Services;

use Modules\Singer\Models\Singer;

class SingerService
{
    public function store(array $data): Singer
    {
        return Singer::create($data);
    }
}
