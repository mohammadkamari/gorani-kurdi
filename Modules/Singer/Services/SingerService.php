<?php

namespace Modules\Singer\Services;

use Modules\Singer\Models\Singer;

class SingerService
{
    public function getall()
    {
        return Singer::all();
    }

    public function store(array $data): Singer
    {
        return Singer::create($data);
    }

    public function show(int $id): ?Singer
    {
        return Singer::find($id);
    }

    public function update(int $id, array $data): ?Singer
    {
        $singer = Singer::find($id);

        if (!$singer) {
            return null;
        }

        $singer->update($data);

        return $singer;
    }

    public function destroy(int $id): bool
    {
        $singer = Singer::find($id);

        if (!$singer) {
            return false;
        }

        return $singer->delete();
    }
}
