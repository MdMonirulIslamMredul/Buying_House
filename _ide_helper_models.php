<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\About
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $page_details
 * @property string|null $banner_image
 * @property string|null $details1
 * @property string|null $details2
 * @property string|null $details3
 * @property string|null $details4
 * @property string|null $image1
 * @property string|null $image2
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|About newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|About newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|About query()
 * @method static \Illuminate\Database\Eloquent\Builder|About whereBannerImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereDetails1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereDetails2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereDetails3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereDetails4($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereImage1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereImage2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About wherePageDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|About whereUpdatedAt($value)
 */
	class About extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Appointment
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $number
 * @property string|null $email
 * @property string|null $service_id
 * @property string|null $date
 * @property string|null $select_time
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereSelectTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Appointment whereUpdatedAt($value)
 */
	class Appointment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AppointmentInfo
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $details1
 * @property string|null $details2
 * @property string|null $details3
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AppointmentInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AppointmentInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AppointmentInfo query()
 * @method static \Illuminate\Database\Eloquent\Builder|AppointmentInfo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppointmentInfo whereDetails1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppointmentInfo whereDetails2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppointmentInfo whereDetails3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppointmentInfo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppointmentInfo whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AppointmentInfo whereUpdatedAt($value)
 */
	class AppointmentInfo extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Banner
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $short_details
 * @property string|null $image1
 * @property string|null $image2
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Banner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Banner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Banner query()
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereImage1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereImage2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereShortDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Banner whereUpdatedAt($value)
 */
	class Banner extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BannerAndTitle
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $image
 * @property string|null $page
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|BannerAndTitle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BannerAndTitle newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BannerAndTitle query()
 * @method static \Illuminate\Database\Eloquent\Builder|BannerAndTitle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerAndTitle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerAndTitle whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerAndTitle wherePage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerAndTitle whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerAndTitle whereUpdatedAt($value)
 */
	class BannerAndTitle extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Blog
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $short_details
 * @property string|null $main_image
 * @property string|null $banner_image
 * @property string|null $details_image1
 * @property string|null $details_image2
 * @property string|null $details_image3
 * @property string|null $details1
 * @property string|null $details2
 * @property int|null $add_home
 * @property int $status 1= active; 0=deactive
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog query()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereAddHome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereBannerImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereDetails1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereDetails2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereDetailsImage1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereDetailsImage2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereDetailsImage3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereMainImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereShortDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereUpdatedAt($value)
 */
	class Blog extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ContactMessage
 *
 * @property int $id
 * @property string $name
 * @property string|null $number
 * @property string $email
 * @property string $subject
 * @property string $message
 * @property int $status
 * @property string|null $read_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage query()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage whereReadAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage whereUpdatedAt($value)
 */
	class ContactMessage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ContactUs
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $number
 * @property string|null $email
 * @property string|null $subject
 * @property string|null $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs query()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactUs whereUpdatedAt($value)
 */
	class ContactUs extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Counter
 *
 * @property int $id
 * @property int|null $doctors
 * @property int|null $services
 * @property int|null $clients
 * @property int|null $awards
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Counter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Counter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Counter query()
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereAwards($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereClients($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereDoctors($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereServices($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Counter whereUpdatedAt($value)
 */
	class Counter extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\FooterDetail
 *
 * @property int $id
 * @property string $details
 * @property string $credit
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FooterDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterDetail whereCredit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterDetail whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterDetail whereUpdatedAt($value)
 */
	class FooterDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Gallery
 *
 * @property int $id
 * @property string|null $image
 * @property string|null $image_title
 * @property int|null $add_home
 * @property int $status 1= active; 0=deactive
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery query()
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereAddHome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereImageTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gallery whereUpdatedAt($value)
 */
	class Gallery extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Logo
 *
 * @property int $id
 * @property string|null $site_name
 * @property string|null $logo_image
 * @property string|null $favicon
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Logo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Logo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Logo query()
 * @method static \Illuminate\Database\Eloquent\Builder|Logo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Logo whereFavicon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Logo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Logo whereLogoImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Logo whereSiteName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Logo whereUpdatedAt($value)
 */
	class Logo extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Management
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $designation
 * @property string|null $details
 * @property string|null $email
 * @property string|null $facebook
 * @property string|null $instagram
 * @property string|null $linkedIn
 * @property string|null $youtube
 * @property string|null $image
 * @property int $status 1= active, 0= deactive
 * @property int|null $add_home
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Management newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Management newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Management query()
 * @method static \Illuminate\Database\Eloquent\Builder|Management whereAddHome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Management whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Management whereDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Management whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Management whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Management whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Management whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Management whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Management whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Management whereLinkedIn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Management whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Management whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Management whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Management whereYoutube($value)
 */
	class Management extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Package
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $product_code
 * @property int|null $price
 * @property string|null $options
 * @property int $status 1= active, 0= deactive
 * @property int|null $add_home
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $category_id
 * @property string|null $gallery_images
 * @property string|null $old_price
 * @property string|null $purchase_price
 * @property string|null $attribute
 * @property string|null $meta_description
 * @property string|null $image
 * @method static \Illuminate\Database\Eloquent\Builder|Package newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Package newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Package query()
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereAddHome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereAttribute($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereGalleryImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereMetaDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereOldPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereProductCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package wherePurchasePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Package whereUpdatedAt($value)
 */
	class Package extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Patnar
 *
 * @property int $id
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Patnar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Patnar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Patnar query()
 * @method static \Illuminate\Database\Eloquent\Builder|Patnar whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patnar whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patnar whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patnar whereUpdatedAt($value)
 */
	class Patnar extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Product
 *
 * @property int $id
 * @property int|null $product_category_id
 * @property int|null $subcategory_id
 * @property string $name
 * @property string $price
 * @property string|null $sku
 * @property int $stock
 * @property string|null $size
 * @property string|null $color
 * @property string|null $material
 * @property string|null $gender
 * @property string|null $slug
 * @property string $image
 * @property string|null $description
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ProductCategory|null $category
 * @property-read \App\Models\SubCategory|null $subcategory
 * @method static \Illuminate\Database\Eloquent\Builder|Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereMaterial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereProductCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSku($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereSubcategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Product whereUpdatedAt($value)
 */
	class Product extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductCategory
 *
 * @property int $id
 * @property string $name
 * @property string|null $slug
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SubCategory> $subcategories
 * @property-read int|null $subcategories_count
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategory whereUpdatedAt($value)
 */
	class ProductCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Service
 *
 * @property int $id
 * @property string|null $service_title
 * @property string|null $hero_title
 * @property string|null $main_image
 * @property string|null $banner_image
 * @property string|null $details_image1
 * @property string|null $details_image2
 * @property string|null $details_image3
 * @property int|null $service_home
 * @property string|null $service_details_small
 * @property string|null $service_details1
 * @property string|null $service_details2
 * @property string|null $service_details3
 * @property int $status 1= active; 0=deactive
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ServiceFaq> $faqs
 * @property-read int|null $faqs_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ServiceVideo> $videos
 * @property-read int|null $videos_count
 * @method static \Illuminate\Database\Eloquent\Builder|Service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service query()
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereBannerImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereDetailsImage1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereDetailsImage2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereDetailsImage3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereHeroTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereMainImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereServiceDetails1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereServiceDetails2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereServiceDetails3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereServiceDetailsSmall($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereServiceHome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereServiceTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereUpdatedAt($value)
 */
	class Service extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ServiceFaq
 *
 * @property int $id
 * @property int $service_id
 * @property string $question
 * @property string|null $answer
 * @property int $sort_order
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Service $service
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFaq newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFaq newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFaq query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFaq whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFaq whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFaq whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFaq whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFaq whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFaq whereSortOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFaq whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFaq whereUpdatedAt($value)
 */
	class ServiceFaq extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ServiceVideo
 *
 * @property int $id
 * @property int $service_id
 * @property string|null $title
 * @property string $youtube_url
 * @property string|null $thumb
 * @property int $sort_order
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Service $service
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceVideo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceVideo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceVideo query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceVideo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceVideo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceVideo whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceVideo whereSortOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceVideo whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceVideo whereThumb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceVideo whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceVideo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceVideo whereYoutubeUrl($value)
 */
	class ServiceVideo extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SubCategory
 *
 * @property int $id
 * @property int $product_category_id
 * @property string $name
 * @property string|null $slug
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ProductCategory $category
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereProductCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategory whereUpdatedAt($value)
 */
	class SubCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Team
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $designation
 * @property string|null $email
 * @property string|null $facebook
 * @property string|null $instagram
 * @property string|null $linkedIn
 * @property string|null $youtube
 * @property string|null $image
 * @property int|null $service_id
 * @property int $status 1= active, 0= deactive
 * @property int|null $add_home
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Team newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Team query()
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereAddHome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereLinkedIn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Team whereYoutube($value)
 */
	class Team extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Testimonial
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $designation
 * @property string|null $review
 * @property int|null $star
 * @property string|null $image
 * @property int $status 1= active, 0= deactive
 * @property int|null $add_home
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial query()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereAddHome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereReview($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereStar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereUpdatedAt($value)
 */
	class Testimonial extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property int|null $is_admin
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\VideoGallery
 *
 * @property int $id
 * @property string $video_link
 * @property string|null $title
 * @property string|null $description
 * @property string|null $thumbnail
 * @property int $status 1= active; 0=deactive
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery query()
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery whereThumbnail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VideoGallery whereVideoLink($value)
 */
	class VideoGallery extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\WebsiteLinks
 *
 * @property int $id
 * @property string|null $email
 * @property string|null $facebook
 * @property string|null $instagram
 * @property string|null $linkedIn
 * @property string|null $youtube
 * @property string|null $number
 * @property string|null $address
 * @property string|null $map_link
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|WebsiteLinks newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WebsiteLinks newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WebsiteLinks query()
 * @method static \Illuminate\Database\Eloquent\Builder|WebsiteLinks whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebsiteLinks whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebsiteLinks whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebsiteLinks whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebsiteLinks whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebsiteLinks whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebsiteLinks whereLinkedIn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebsiteLinks whereMapLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebsiteLinks whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebsiteLinks whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WebsiteLinks whereYoutube($value)
 */
	class WebsiteLinks extends \Eloquent {}
}

