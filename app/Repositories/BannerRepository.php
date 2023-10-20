<?php
namespace App\Repositories;

use App\Models\Banner;

class BannerRepository implements BannerRepositoryInterface
{
    public function all()
    {
        return Banner::all();
    }
    public function getActive()
    {
        return Banner::where('status', true)->first();
    }
    public function create(array $data)
    {
        return Banner::create($data);
    }

    public function update(array $data, $id)
    {
        $user = Banner::findOrFail($id);
        $user->update($data);
        return $user;
    }

    public function delete($id)
    {
        $user = Banner::findOrFail($id);
        return $user->delete();
    }

    public function show($id)
    {
        return Banner::findOrFail($id);
    }
    public function getAllByType($type){
        return Banner::where('type', $type)->get();
    }
}
