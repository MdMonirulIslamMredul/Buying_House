<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    use HasFactory;
    public static $data, $image, $imageName, $directory, $imageUrl;
    public static function saveCounter($request)
    {
        //        dd($request);
        if ($request->id) {
            self::$data = Counter::find($request->id);
            self::$data->doctors = $request->doctors;
            self::$data->services = $request->services;
            self::$data->clients = $request->clients;
            self::$data->awards = $request->awards;

            // self::$data->bg_image = $request->bg_image;
            if ($request->file('bg_image')) {
                if (self::$data->bg_image) {
                    if (file_exists(self::$data->bg_image)) {
                        unlink(self::$data->bg_image);
                        self::$data->bg_image = self::saveImage($request);
                    }
                } else {
                    self::$data->bg_image = self::saveImage($request);
                }
            }



            self::$data->description = $request->description;
            self::$data->establishment_year = $request->establishment_year;
            self::$data->save();
        } else {
            self::$data = new Counter();
            self::$data->doctors = $request->doctors;
            self::$data->services = $request->services;
            self::$data->clients = $request->clients;
            self::$data->awards = $request->awards;
            self::$data->bg_image = self::saveImage($request);
            self::$data->description = $request->description;
            self::$data->establishment_year = $request->establishment_year;
            self::$data->save();
        }
    }
    //save  end
    public static function saveImage($request)
    {
        self::$image = $request->file('bg_image');
        self::$imageName = 'counter-bg-' . rand() . '.' . self::$image->Extension();
        self::$directory = 'counter-bg/';
        self::$imageUrl = self::$directory . self::$imageName;
        self::$image->move(self::$directory, self::$imageName);
        return self::$imageUrl;
    }
}
