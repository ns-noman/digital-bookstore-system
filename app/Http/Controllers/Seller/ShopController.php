<?php

namespace App\Http\Controllers\Seller;

use App\CPU\ImageManager;
use App\Http\Controllers\Controller;
use App\Model\Shop;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Model\City;

class ShopController extends Controller
{
    public function view()
    {
        $shop = Shop::where(['seller_id' => auth('seller')->id()])->first();
        if (isset($shop) == false) {
            DB::table('shops')->insert([
                'seller_id' => auth('seller')->id(),
                'name' => auth('seller')->user()->f_name,
                'address' => '',
                'contact' => auth('seller')->user()->phone,
                'image' => 'def.png',
                'created_at' => now(),
                'updated_at' => now()
            ]);
            $shop = Shop::where(['seller_id' => auth('seller')->id()])->first();
        }

        return view('seller-views.shop.shopInfo', compact('shop'));
    }

    public function edit($id)
    {
        $shop = Shop::where(['seller_id' =>  auth('seller')->id()])->first();
        $cities = City::all();
        return view('seller-views.shop.edit', compact('shop','cities'));
    }

    public function update(Request $request, $id)
    {
        $shop = Shop::find($id);
        $shop->name = $request->name;
        $shop->address = $request->address;
        $shop->contact = $request->contact;
        $shop->contact_person       = $request->contact_person;
        $shop->pickup_address       = $request->pickup_address;
        $shop->pickup_city_id       = $request->pickup_city_id;
        $shop->return_address       = $request->return_address;
        $shop->return_city_id	    = $request->pickup_city_id	;
        $shop->establish_year       = $request->establish_year;
        $shop->owner_name           = $request->owner_name;
        $shop->owner_mobile         = $request->owner_mobile;


        if ($request->image) {
            $shop->image = ImageManager::update('shop/', $shop->image, 'png', $request->file('image'));
        }

        if ($request->trade_license) {
            $shop->trade_license = ImageManager::update('shop/', $shop->trade_license, 'png', $request->file('trade_license'));
        }

        if ($request->owner_photo) {
            $shop->owner_photo = ImageManager::update('shop/', $shop->owner_photo, 'png', $request->file('owner_photo'));
        }

        if ($request->banner) {
            $shop->banner = ImageManager::update('shop/banner/', $shop->banner, 'png', $request->file('banner'));
        }
        $shop->save();

        Toastr::info('Shop updated successfully!');
        return redirect()->route('seller.shop.view');
    }

}
