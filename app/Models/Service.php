<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public static $data, $image, $imageName, $directory, $imageUrl;

    public static function save_service($request)
    {
        self::$data = new Service();
        self::$data->service_title = $request->service_title ?? null;
        self::$data->hero_title = $request->hero_title ?? null;
        self::$data->service_details_small = $request->service_details_small ?? null;
        self::$data->service_details1 = $request->service_details1 ?? null;
        self::$data->service_details2 = $request->service_details2 ?? null;
        self::$data->service_details3 = $request->service_details3 ?? null;
        self::$data->service_home = $request->service_home ?? null;
        self::$data->main_image = self::saveMainImage($request);
        self::$data->banner_image = self::saveBannerImage($request);
        self::$data->details_image1 = self::saveDetailsImage1($request);
        self::$data->details_image2 = self::saveDetailsImage2($request);
        self::$data->details_image3 = self::saveDetailsImage3($request);
        self::$data->save();

        // Save new FAQs
        $faqsNew = $request->input('faqs_new', []);
        foreach ($faqsNew as $faq) {
            if (!empty($faq['question']) || !empty($faq['answer'])) {
                ServiceFaq::create([
                    'service_id' => self::$data->id,
                    'question' => $faq['question'] ?? null,
                    'answer' => $faq['answer'] ?? null,
                    'status' => 1,
                ]);
            }
        }

        // Save new Videos
        $videosNew = $request->input('videos_new', []);
        foreach ($videosNew as $video) {
            if (!empty($video['youtube_url']) || !empty($video['title'])) {
                ServiceVideo::create([
                    'service_id' => self::$data->id,
                    'title' => $video['title'] ?? null,
                    'youtube_url' => $video['youtube_url'] ?? null,
                    'status' => 1,
                ]);
            }
        }
    }
    public static function update_service($request)
    {
        self::$data = Service::find($request->id);
        self::$data->service_title = $request->service_title ?? null;
        self::$data->hero_title = $request->hero_title ?? null;
        self::$data->service_details_small = $request->service_details_small ?? null;
        self::$data->service_details1 = $request->service_details1 ?? null;
        self::$data->service_details2 = $request->service_details2 ?? null;
        self::$data->service_details3 = $request->service_details3 ?? null;
        self::$data->service_home = $request->service_home ?? null;
        self::$data->status = $request->status ?? null;
        if ($request->file('main_image')) {
            if (self::$data->main_image) {
                if (file_exists(public_path(self::$data->main_image))) {
                    unlink(public_path(self::$data->main_image));
                }
            }
            self::$data->main_image = self::saveMainImage($request);
        }
        if ($request->file('banner_image')) {
            if (self::$data->banner_image) {
                if (file_exists(public_path(self::$data->banner_image))) {
                    unlink(public_path(self::$data->banner_image));
                }
            }
            self::$data->banner_image = self::saveBannerImage($request);
        }
        if ($request->file('details_image1')) {
            if (self::$data->details_image1) {
                if (file_exists(public_path(self::$data->details_image1))) {
                    unlink(public_path(self::$data->details_image1));
                }
            }
            self::$data->details_image1 = self::saveDetailsImage1($request);
        }
        if ($request->file('details_image2')) {
            if (self::$data->details_image2) {
                if (file_exists(public_path(self::$data->details_image2))) {
                    unlink(public_path(self::$data->details_image2));
                }
            }
            self::$data->details_image2 = self::saveDetailsImage2($request);
        }
        if ($request->file('details_image3')) {
            if (self::$data->details_image3) {
                if (file_exists(public_path(self::$data->details_image3))) {
                    unlink(public_path(self::$data->details_image3));
                }
            }
            self::$data->details_image3 = self::saveDetailsImage3($request);
        }

        self::$data->save();

        // Handle FAQ deletions
        $faqsDelete = $request->input('faqs_delete', []);
        foreach ($faqsDelete as $fid) {
            $f = ServiceFaq::find($fid);
            if ($f) {
                $f->delete();
            }
        }

        // Update existing FAQs
        $faqsExisting = $request->input('faqs_existing', []);
        foreach ($faqsExisting as $fid => $faq) {
            $f = ServiceFaq::find($fid);
            if ($f) {
                $f->question = $faq['question'] ?? $f->question;
                $f->answer = $faq['answer'] ?? $f->answer;
                $f->save();
            }
        }

        // Add new FAQs
        $faqsNew = $request->input('faqs_new', []);
        foreach ($faqsNew as $faq) {
            if (!empty($faq['question']) || !empty($faq['answer'])) {
                ServiceFaq::create([
                    'service_id' => self::$data->id,
                    'question' => $faq['question'] ?? null,
                    'answer' => $faq['answer'] ?? null,
                    'status' => 1,
                ]);
            }
        }

        // Handle Video deletions
        $videosDelete = $request->input('videos_delete', []);
        foreach ($videosDelete as $vid) {
            $v = ServiceVideo::find($vid);
            if ($v) {
                $v->delete();
            }
        }

        // Update existing Videos
        $videosExisting = $request->input('videos_existing', []);
        foreach ($videosExisting as $vid => $video) {
            $v = ServiceVideo::find($vid);
            if ($v) {
                $v->title = $video['title'] ?? $v->title;
                $v->youtube_url = $video['youtube_url'] ?? $v->youtube_url;
                $v->save();
            }
        }

        // Add new Videos
        $videosNew = $request->input('videos_new', []);
        foreach ($videosNew as $video) {
            if (!empty($video['youtube_url']) || !empty($video['title'])) {
                ServiceVideo::create([
                    'service_id' => self::$data->id,
                    'title' => $video['title'] ?? null,
                    'youtube_url' => $video['youtube_url'] ?? null,
                    'status' => 1,
                ]);
            }
        }
    }

    private static function saveMainImage($request)
    {
        self::$image = $request->file('main_image');
        if (!self::$image) {
            return null;
        }
        $extension = self::$image->getClientOriginalExtension() ?: 'jpg';
        self::$imageName = 'services_main_image-' . time() . '-' . rand() . '.' . $extension;
        self::$directory = 'services/';
        if (!is_dir(public_path(self::$directory))) {
            mkdir(public_path(self::$directory), 0755, true);
        }
        self::$imageUrl = self::$directory . self::$imageName;
        self::$image->move(public_path(self::$directory), self::$imageName);
        return self::$imageUrl;
    }
    private static function saveBannerImage($request)
    {
        self::$image = $request->file('banner_image');
        if (!self::$image) {
            return null;
        }
        $extension = self::$image->getClientOriginalExtension() ?: 'jpg';
        self::$imageName = 'services_banner_image-' . time() . '-' . rand() . '.' . $extension;
        self::$directory = 'services/';
        if (!is_dir(public_path(self::$directory))) {
            mkdir(public_path(self::$directory), 0755, true);
        }
        self::$imageUrl = self::$directory . self::$imageName;
        self::$image->move(public_path(self::$directory), self::$imageName);
        return self::$imageUrl;
    }
    private static function saveDetailsImage1($request)
    {
        self::$image = $request->file('details_image1');
        if (!self::$image) {
            return null;
        }
        $extension = self::$image->getClientOriginalExtension() ?: 'jpg';
        self::$imageName = 'services_details_image-' . time() . '-' . rand() . '.' . $extension;
        self::$directory = 'services/';
        if (!is_dir(public_path(self::$directory))) {
            mkdir(public_path(self::$directory), 0755, true);
        }
        self::$imageUrl = self::$directory . self::$imageName;
        self::$image->move(public_path(self::$directory), self::$imageName);
        return self::$imageUrl;
    }
    private static function saveDetailsImage2($request)
    {
        self::$image = $request->file('details_image2');
        if (!self::$image) {
            return null;
        }
        $extension = self::$image->getClientOriginalExtension() ?: 'jpg';
        self::$imageName = 'services_details_image-' . time() . '-' . rand() . '.' . $extension;
        self::$directory = 'services/';
        if (!is_dir(public_path(self::$directory))) {
            mkdir(public_path(self::$directory), 0755, true);
        }
        self::$imageUrl = self::$directory . self::$imageName;
        self::$image->move(public_path(self::$directory), self::$imageName);
        return self::$imageUrl;
    }
    private static function saveDetailsImage3($request)
    {
        self::$image = $request->file('details_image3');
        if (!self::$image) {
            return null;
        }
        $extension = self::$image->getClientOriginalExtension() ?: 'jpg';
        self::$imageName = 'services_details_image-' . time() . '-' . rand() . '.' . $extension;
        self::$directory = 'services/';
        if (!is_dir(self::$directory)) {
            mkdir(self::$directory, 0755, true);
        }
        self::$imageUrl = self::$directory . self::$imageName;
        self::$image->move(self::$directory, self::$imageName);
        return self::$imageUrl;
    }

    // Relationships
    public function faqs()
    {
        return $this->hasMany(ServiceFaq::class);
    }

    public function videos()
    {
        return $this->hasMany(ServiceVideo::class);
    }
}
