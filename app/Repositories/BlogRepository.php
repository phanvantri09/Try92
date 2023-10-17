<?php
namespace App\Repositories;

use App\Models\Blog;

class BlogRepository implements BlogRepositoryInterface
{
    public function all()
    {
        return Blog::all();
    }

    public function create(array $data)
    {
        return Blog::create($data);
    }

    public function update(array $data, $id)
    {
        $user = Blog::findOrFail($id);
        $user->update($data);
        return $user;
    }

    public function delete($id)
    {
        $user = Blog::findOrFail($id);
        return $user->delete();
    }

    public function show($id)
    {
        return Blog::findOrFail($id);
    }
    public function getAllByType($type){
        return Blog::where('type', $type)->get();
    }
}
