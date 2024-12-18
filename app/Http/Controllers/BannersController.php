<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use TCG\Voyager\Models\Page;

class BannersController extends Controller
{
    public function save(Request $request)
    {
        $banner = new Banner();
        $params = $request->post();
        $image = $request->file('banner_image');
        if ($image) {
            $image->storeAs('uploads/banners/', 'banner_image_page_'. $params['page'].$image->extension());
            $path = $image->store('public/banners');
            $banner->image_url = $path;
        }
        $banner->page_id = $params['page'];
        $banner->save();
        return Redirect::to('admin/banners');
    }

    public function getAllBanner()
    {
        $banners = Banner::get();
        $data = [];
        foreach ($banners as $banner) {
            $page = Page::where('id', $banner->page_id);
            $page = $page->firstOrFail();
            $data[] = [
                'id' => $banner->banner_id,
                'image_url' => str_replace('public', 'storage', $banner->image_url),
                'page_id' => $page->title
            ];
        }
        return $data;
    }

    public static function getByPage($pageId)
    {
        $imageUrls = [];
        if (count(Banner::get()) < 1) {
            return false;
        }
        try {
            $banners = Banner::where('page_id', $pageId)->get();
            foreach ($banners as $banner) {
                $imageUrls[] = str_replace('public', 'storage', $banner->image_url);
            }
        } catch (\Exception $exception) {
            return false;
        }
        return $imageUrls;
    }

    public function delete($slug)
    {
        $banner = Banner::where('banner_id', $slug);
        $banner = $banner->firstOrFail();
        $banner->delete();
        return Redirect::to('admin/banners');
    }
}
