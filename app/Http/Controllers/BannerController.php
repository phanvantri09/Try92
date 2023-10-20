<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Requests\Banner\RQAdd;
use App\Http\Requests\Banner\RQEdit;
use App\Repositories\BannerRepositoryInterface;
use App\Helpers\ConstCommon;
use Illuminate\Support\Facades\Storage;
class BannerController extends Controller
{
    protected $bannerRepository;
    public function __construct(BannerRepositoryInterface $bannerRepository) {
        $this->bannerRepository = $bannerRepository;
    }
    public function list(){
        $title = 'banner list';
        $data = $this->bannerRepository->all();
        return view('admin.banner.list', compact(['data', 'title']));
    }
    public function add(){
        $title = 'banner Add';
        return view('admin.banner.add', compact(['title']));
    }
    public function addPost(RQAdd $request){

        $nameImage = 'banner-'.ConstCommon::getCurrentTime().'.'.$request->img->extension();
        ConstCommon::addImageToStorage($request->img, $nameImage );
        $data = ['name'=>$request->name, 'img'=>$nameImage];
        if ($this->bannerRepository->create($data)) {
            return redirect()->route('banner.list')->with('success', ConstCommon::SUCCESS);
        } else {
            return redirect()->back()->with('error', ConstCommon::ERROR);
        }
        return view('admin.banner.add');
    }
    public function edit($id){
        $title = 'banner edit';

        $data = $this->bannerRepository->show($id);
        return view('admin.banner.edit', compact(['id','title', 'data']));
    }
    public function editPost(RQEdit $request, $id){

        if (!empty($request->img)) {
            $it = $this->bannerRepository->show($id);
            Storage::disk('public')->delete('images/' . $it->img);
            // ConstCommon::delImageToStorage($it->img);
            $nameImage = 'banner-'.ConstCommon::getCurrentTime().'.'.$request->img->extension();
            ConstCommon::addImageToStorage($request->img, $nameImage );
            $data = ['name'=>$request->name, 'img'=>$nameImage];
        } else {
            $data = ['name'=>$request->name];
        }
        if ($this->bannerRepository->update($data, $id)) {
            return redirect()->route('banner.list')->with('success', ConstCommon::SUCCESS);
        } else {
            return redirect()->back()->with('error', ConstCommon::ERROR);
        }
        return view('admin.banner.edit');
    }
    public function delete($id){
        $it = $this->bannerRepository->show($id);
        if ($this->bannerRepository->delete($id)) {
            Storage::disk('public')->delete('images/' . $it->img);
            return redirect()->route('banner.list')->with('success',ConstCommon::SUCCESS);
        }
    }
    public function show($id){
        $title = 'banner show' .$id;
        $data = $this->bannerRepository->show($id);
        return view('admin.banner.show', compact(['id','title', 'data']));
    }
}
