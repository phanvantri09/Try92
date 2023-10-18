<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Requests\Blog\RQAdd;
use App\Http\Requests\Blog\RQEdit;
use App\Repositories\BlogRepositoryInterface;
use App\Helpers\ConstCommon;

class BlogController extends Controller
{
    public $title = "Blog";
    protected $blogRepository;
    public function __construct(BlogRepositoryInterface $blogRepository) {
        $this->blogRepository = $blogRepository;
    }
    public function list(){
        return view('admin.blog.list');
    }
    public function add(){
        $title = '';
        return view('admin.blog.add', compact(['title']));
    }
    public function addPost(RQAdd $request){
        if ($this->blogRepository->create($request->all())) {
            return redirect()->route('blog.list')->with('success', ConstCommon::SUCCESS);
        }
        return view('admin.blog.add');
    }
    public function edit($id){
        $data = $this->blogRepository->show($id);
        return view('admin.blog.edit', compact(['id','title', 'data']));
    }
    public function editPost(RQEdit $request, $id){
        if ($this->blogRepository->update($request->all())) {
            return redirect()->route('blog.list')->with('success', ConstCommon::SUCCESS);
        }
        return view('admin.blog.add');
    }
    public function delete($id){
        return view('admin.blog.add');
    }
    public function show($id){
        return view('admin.blog.add');
    }
}
