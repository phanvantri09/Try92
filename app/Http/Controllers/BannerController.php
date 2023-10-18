<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Requests\Banner\RQAdd;
use App\Http\Requests\Banner\RQEdit;
use App\Repositories\BannerRepositoryInterface;
use App\Helpers\ConstCommon;

class BannerController extends Controller
{
    protected $bannerRepository;
    public function __construct(BannerRepositoryInterface $bannerRepository) {
        $this->bannerRepository = $bannerRepository;
    }
    public function list(){
        return view('admin.banner.list');
    }
    public function add(){
        return view('admin.banner.add');
    }
    public function addPost(RQAdd $request){
        return view('admin.banner.add');
    }
    public function edit($id){
        return view('admin.banner.edit');
    }
    public function editPost(RQEdit $request, $id){
        return view('admin.banner.add');
    }
    public function delete($id){
        return view('admin.banner.add');
    }
    public function show($id){
        return view('admin.banner.add');
    }
}
