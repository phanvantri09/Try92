<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProductRepositoryInterface;
use App\Repositories\BannerRepositoryInterface;
use App\Repositories\BlogRepositoryInterface;
use App\Repositories\ContactRepositoryInterface;
use App\Repositories\UserRepositoryInterface;
use App\Repositories\BookRepositoryInterface;
use App\Helpers\ConstCommon;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    //

    protected $productRepository;
    protected $bannerRepository;
    protected $blogRepository;
    protected $contactRepository;
    protected $userRepository;
    protected $bookRepository;
    public function __construct(ProductRepositoryInterface $productRepository,
    BannerRepositoryInterface $bannerRepository,
    BlogRepositoryInterface $blogRepository,
    ContactRepositoryInterface $contactRepository,
    UserRepositoryInterface $userRepository,
    BookRepositoryInterface $bookRepository
    ) {
        
        $this->productRepository = $productRepository;
        $this->bannerRepository = $bannerRepository;
        $this->blogRepository = $blogRepository;
        $this->contactRepository = $contactRepository;
        $this->userRepository = $userRepository;
        $this->bookRepository = $bookRepository;
    }
    public function index(){
        $banners = $this->bannerRepository->getActive();
        $products = $this->productRepository->all();
        $blogs = $this->blogRepository->newBlog4();
        return view('user.home', compact(['banners', 'products', 'blogs']));
    }
    public function contact(){
        $banners = $this->bannerRepository->getActive();
        return view('user.contact', compact(['banners']));
    }
    public function contactPost(Request $request){
        // dd($request->all());
        if ($this->bookRepository->create($request->all())) {
            return redirect()->route('contact')->with('success','Thông tin của bạn đã được gửi đi, cảm ơn bạn!');
        }
        
        return view('user.contact', compact(['banners']));
    }
    public function tracks(){
        $products = $this->productRepository->all();
        return view('user.tracks', compact(['products']));
    }
    public function blogs(){
        $blogs = $this->blogRepository->all();
        return view('user.blogs', compact(['blogs']));
    }
    
    
    
}
