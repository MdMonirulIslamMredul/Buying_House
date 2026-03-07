<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoGallery extends Model
{
    use HasFactory;
    public static $data, $image, $imageName, $directory, $imageUrl;

    public static function save_gallery($request)
    {
        self::$data = new VideoGallery();
        self::$data->video_link = $request->video_link ?? null;
        self::$data->title = $request->title ?? null;
        self::$data->description = $request->description ?? null;
        self::$data->thumbnail = self::saveThumbnail($request);
        self::$data->save();
    }
    public static function update_gallery($request)
    {
        self::$data = VideoGallery::find($request->id);
        self::$data->video_link = $request->video_link ?? null;
        self::$data->title = $request->title ?? self::$data->title;
        self::$data->description = $request->description ?? self::$data->description;
        self::$data->status = $request->status ?? null;
        if ($request->file('thumbnail')) {
            if (self::$data->thumbnail) {
                if (file_exists(self::$data->thumbnail)) {
                    unlink(self::$data->thumbnail);
                }
            }
            self::$data->thumbnail = self::saveThumbnail($request);
        }
        self::$data->save();
    }
    private static function saveThumbnail($request)
    {
        if (!$request->file('thumbnail')) return null;
        self::$image = $request->file('thumbnail');
        self::$imageName = 'video_thumb-' . rand() . '.' . self::$image->Extension();
        self::$directory = 'gallery/';
        self::$imageUrl = self::$directory . self::$imageName;
        self::$image->move(self::$directory, self::$imageName);
        return self::$imageUrl;
    }

    /**
     * Get the thumbnail URL - returns custom thumbnail or YouTube thumbnail
     */
    public function getThumbnailUrl()
    {
        // Return custom thumbnail if exists and file is accessible
        if ($this->thumbnail) {
            $customPath = public_path($this->thumbnail);
            if (file_exists($customPath)) {
                return asset($this->thumbnail);
            }
        }

        // Extract YouTube video ID and return YouTube thumbnail
        $youtubeId = $this->extractYoutubeId($this->video_link);
        if ($youtubeId) {
            // Try multiple thumbnail sizes (maxresdefault > hqdefault > mqdefault)
            return "https://img.youtube.com/vi/{$youtubeId}/maxresdefault.jpg";
        }

        return null;
    }

    /**
     * Extract YouTube video ID from URL or embed code
     */
    public function extractYoutubeId($link)
    {
        if (!$link) return null;

        $link = trim($link);
        // Remove HTML tags and clean
        $link = strip_tags($link);
        $link = str_replace(['<p>', '</p>', '<br>', '<br/>', '<br />'], '', $link);
        $link = trim($link);

        // Pattern for youtube.com/watch?v=VIDEO_ID (with exactly 11 chars ID)
        if (preg_match('/(?:youtube\.com\/watch\?.*v=|youtube\.com\/.*[?&]v=)([a-zA-Z0-9_-]{11})/i', $link, $matches)) {
            return $matches[1];
        }

        // Pattern for youtu.be/VIDEO_ID
        if (preg_match('/youtu\.be\/([a-zA-Z0-9_-]{11})/i', $link, $matches)) {
            return $matches[1];
        }

        // Pattern for youtube.com/embed/VIDEO_ID
        if (preg_match('/youtube\.com\/embed\/([a-zA-Z0-9_-]{11})/i', $link, $matches)) {
            return $matches[1];
        }

        // Pattern for youtube.com/v/VIDEO_ID
        if (preg_match('/youtube\.com\/v\/([a-zA-Z0-9_-]{11})/i', $link, $matches)) {
            return $matches[1];
        }

        // Pattern for iframe src attribute
        if (preg_match('/src\s*=\s*["\']https?:\/\/(?:www\.)?youtube\.com\/embed\/([a-zA-Z0-9_-]{11})/i', $link, $matches)) {
            return $matches[1];
        }

        // Pattern if just the ID is pasted (11 characters)
        if (preg_match('/^[a-zA-Z0-9_-]{11}$/', $link)) {
            return $link;
        }

        return null;
    }
}
