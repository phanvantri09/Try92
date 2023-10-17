<?php
namespace App\Repositories;

use App\Models\Book;

class BookRepository implements BookRepositoryInterface
{
    public function all()
    {
        return Book::all();
    }

    public function create(array $data)
    {
        return Book::create($data);
    }

    public function update(array $data, $id)
    {
        $user = Book::findOrFail($id);
        $user->update($data);
        return $user;
    }

    public function delete($id)
    {
        $user = Book::findOrFail($id);
        return $user->delete();
    }

    public function show($id)
    {
        return Book::findOrFail($id);
    }
    public function getAllByType($type){
        return Book::where('type', $type)->get();
    }
}
