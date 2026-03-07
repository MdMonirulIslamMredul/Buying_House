<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    public static $data, $image, $imageName, $directory, $imageUrl;

    public static function save_service($request)
    {
        if ($request->id) {
            self::$data = About::find($request->id);

            if ($request->hasFile('image1')) {
                if (self::$data->image1 && file_exists(public_path(self::$data->image1))) {
                    @unlink(public_path(self::$data->image1));
                }
                self::$data->image1 = self::saveAboutImage1($request);
            }

            if ($request->hasFile('image2')) {
                if (self::$data->image2 && file_exists(public_path(self::$data->image2))) {
                    @unlink(public_path(self::$data->image2));
                }
                self::$data->image2 = self::saveAboutImage2($request);
            }

            if ($request->hasFile('banner_image')) {
                if (self::$data->banner_image && file_exists(public_path(self::$data->banner_image))) {
                    @unlink(public_path(self::$data->banner_image));
                }
                self::$data->banner_image = self::saveBannerImage($request);
            }
        } else {
            self::$data = new About();
            if ($request->hasFile('image1')) {
                self::$data->image1 = self::saveAboutImage1($request);
            }
            if ($request->hasFile('image2')) {
                self::$data->image2 = self::saveAboutImage2($request);
            }
            if ($request->hasFile('banner_image')) {
                self::$data->banner_image = self::saveBannerImage($request);
            }
        }
        self::$data->title = $request->title;
        self::$data->page_details = $request->page_details;
        self::$data->details1 = $request->details1;
        self::$data->details2 = $request->details2;
        self::$data->details3 = $request->details3;
        self::$data->details4 = $request->details4;

        self::$data->save();
    }
    public static function update_service($request)
    {
        self::$data = About::find($request->id);
        self::$data->title = $request->title;
        self::$data->page_details = $request->page_details;
        self::$data->details1 = $request->details1;
        self::$data->details2 = $request->details2;
        self::$data->details3 = $request->details3;
        self::$data->details4 = $request->details4;
        if ($request->hasFile('image1')) {
            if (self::$data->image1 && file_exists(public_path(self::$data->image1))) {
                @unlink(public_path(self::$data->image1));
            }
            self::$data->image1 = self::saveAboutImage1($request);
        }

        if ($request->hasFile('image2')) {
            if (self::$data->image2 && file_exists(public_path(self::$data->image2))) {
                @unlink(public_path(self::$data->image2));
            }
            self::$data->image2 = self::saveAboutImage2($request);
        }

        if ($request->hasFile('banner_image')) {
            if (self::$data->banner_image && file_exists(public_path(self::$data->banner_image))) {
                @unlink(public_path(self::$data->banner_image));
            }
            self::$data->banner_image = self::saveBannerImage($request);
        }

        self::$data->save();
    }

    private static function saveAboutImage1($request)
    {
        self::$image = $request->file('image1');
        self::$imageName = 'about_image-' . time() . '-' . rand() . '.' . self::$image->getClientOriginalExtension();
        self::$directory = 'About/';
        $destination = public_path(self::$directory);
        if (!file_exists($destination)) {
            mkdir($destination, 0755, true);
        }
        self::$imageUrl = self::$directory . self::$imageName;
        self::$image->move($destination, self::$imageName);
        return self::$imageUrl;
    }

    private static function saveAboutImage2($request)
    {
        self::$image = $request->file('image2');
        self::$imageName = 'about_image-' . time() . '-' . rand() . '.' . self::$image->getClientOriginalExtension();
        self::$directory = 'About/';
        $destination = public_path(self::$directory);
        if (!file_exists($destination)) {
            mkdir($destination, 0755, true);
        }
        self::$imageUrl = self::$directory . self::$imageName;
        self::$image->move($destination, self::$imageName);
        return self::$imageUrl;
    }
    private static function saveBannerImage($request)
    {
        self::$image = $request->file('banner_image');
        self::$imageName = 'about_banner_image-' . time() . '-' . rand() . '.' . self::$image->getClientOriginalExtension();
        self::$directory = 'About/';
        $destination = public_path(self::$directory);
        if (!file_exists($destination)) {
            mkdir($destination, 0755, true);
        }
        self::$imageUrl = self::$directory . self::$imageName;
        self::$image->move($destination, self::$imageName);
        return self::$imageUrl;
    }
}
