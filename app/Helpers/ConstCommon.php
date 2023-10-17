<?php

namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Contracts\Routing\UrlGenerator;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Mail\SendLinkMail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;
class ConstCommon {
     const TypeUser = 111;
     const TypeAdmin = 222;
     const TypeSuperAdmin = 333;
     const TypeImgae = ['slide' =>1, 'fixed' =>2 ];
     const TypeCard = [ 'Không ưu tiên' =>0, 'Ưu tiên' =>1];

    
    public static function getnameByTypeCategory($key){
        return array_search($key, ConstCommon::ListTypeCatogory);
    }
     public static function getAllCategory(){
          return Category::all();
     }
     public static function addImageToStorage($file, $name ){
          $file->storeAs('images', $name, 'public');
     }
     public static function getLinkImageToStorage($name){
          return url('storage/images/'.$name);
     }
     public static function delImageToStorage($name){
          return Storage::delete('images/'.$name);
     }
     public static function getCurrentTime(){
        $now = Carbon::now();
        $now->setTimezone('Asia/Ho_Chi_Minh');
        return $now->format('Y-m-d').'-'. $now->format('h-s-i');
     }
     public static function priceUp($count, $price){
        $totalShow = $price;
        for ($i=0; $i < $count; $i++) {
            $totalShow = $totalShow + ($totalShow * 6/100);
        }
        return $totalShow;
     }
     public static function sendMail($email, $content){
        $mail = new SendMail($content);
        return Mail::to($email)->queue($mail);
    }
    public static function sendMailLinkPass($email, $content){
        $mail = new SendLinkMail($content);
        return Mail::to($email)->queue($mail);
    }
    public static function getCartCurent(){
        $user = Auth::user();
        return Cart::where('id_user_create', $user->id)->where('status', 1)->get()->count();
    }
    public static function getBoxCurent(){
        $user = Auth::user();
        return Cart::where('id_user_create', $user->id)->where('status', 2)->get()->count();
    }
    public static function getBoxMarket(){
     $user = Auth::user();
     return Cart::where('id_user_create', $user->id)->where('status', 10)->where('amount', '>', 0)->get()->count();
    }
    public static function getAmountBoxItem($id){
        return Box_item::find($id)->amount;
    }
    public static function getTotalTransaction($id_transaction, $balance){
        $transaction =  Transaction::find($id_transaction);
        if ($transaction->type == 5) {
            $listAffter  = Transaction::where('id_user', $transaction->id_user)
            ->where('status', 2)
            ->where('updated_at', '>=', $transaction->created_at)
            ->get();
        } else {
            $listAffter  = Transaction::where('id_user', $transaction->id_user)
            ->where('status', 2)
            ->where('updated_at', '>', $transaction->created_at)
            ->get();
        }

        $total = 0;
        foreach ($listAffter as $key => $listA) {
            if ($listA->id != $id_transaction ) {
                if ($listA->type == 1 || ($listA->type == 3 && $listA->id_cart != null)) {
                    $moeny = - $listA->total;
                } else {
                    $moeny = $listA->total;
                }
                $total = $total + $moeny;
            }
        }
        return number_format($balance - $total);
    }
    public static function cartByID($id){
        return Cart::find($id);
    }
}
