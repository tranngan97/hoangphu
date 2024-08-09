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

    public function getByPage($pageId)
    {
        if (count(Banner::get()) < 1) {
            return false;
        }
        $banner = Banner::where('page_id', $pageId);
        $banner = $banner->firstOrFail();
        if (!$banner) {
            return false;
        }
        return str_replace('public', 'storage', $banner->image_url);
    }
}
