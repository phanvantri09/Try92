<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\CategoryRepository;
use App\Repositories\CategoryRepositoryInterface;

use App\Repositories\BannerRepository;
use App\Repositories\BannerRepositoryInterface;

use App\Repositories\BlogRepository;
use App\Repositories\BlogRepositoryInterface;

use App\Repositories\BookRepository;
use App\Repositories\BookRepositoryInterface;

use App\Repositories\ContactRepository;
use App\Repositories\ContactRepositoryInterface;

use App\Repositories\ProductRepository;
use App\Repositories\ProductRepositoryInterface;

use App\Repositories\UserRepository;
use App\Repositories\UserRepositoryInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(BannerRepositoryInterface::class, BannerRepository::class);
        $this->app->bind(BlogRepositoryInterface::class, BlogRepository::class);
        $this->app->bind(BookRepositoryInterface::class, BookRepository::class);
        $this->app->bind(ContactRepositoryInterface::class, ContactRepository::class);
        $this->app->bind(CProductRepositoryInterface::class, ProductRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
