-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 12, 2024 at 10:53 AM
-- Server version: 10.6.17-MariaDB
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shebaral_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `page_details` longtext DEFAULT NULL,
  `banner_image` text DEFAULT NULL,
  `details1` longtext DEFAULT NULL,
  `details2` longtext DEFAULT NULL,
  `details3` longtext DEFAULT NULL,
  `details4` longtext DEFAULT NULL,
  `image1` text DEFAULT NULL,
  `image2` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `page_details`, `banner_image`, `details1`, `details2`, `details3`, `details4`, `image1`, `image2`, `created_at`, `updated_at`) VALUES
(1, 'Shebaralohealth Is Your Healthcare Solution', '<h2 class=\"content-title style1\" style=\"position: relative; margin-bottom: 25px; color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 16px; text-align: left;\"><strong>weTake Care Of Your Health</strong></h2>\r\n<div class=\"row align-items-center\" style=\"--bs-gutter-x: 1.5rem; --bs-gutter-y: 0; margin-top: calc(-1 * var(--bs-gutter-y)); margin-right: calc(-.5 * var(--bs-gutter-x)); margin-left: calc(-.5 * var(--bs-gutter-x)); color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 16px;\">\r\n<div class=\"col-md-7\" style=\"width: 378px; padding-right: calc(var(--bs-gutter-x) * .5); padding-left: calc(var(--bs-gutter-x) * .5); margin-top: var(--bs-gutter-y);\">\r\n<ul class=\"content-feature-list list-style\" style=\"padding: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; list-style: none;\">\r\n<li style=\"list-style: none; position: relative; padding-left: 32px; margin: 0px 0px 18px;\">\r\n<h6>Shebar Alo Health, we are deeply committed to taking care of your health in the most comprehensive and personalized way possible. With a steadfast focus on your well-being, we offer a wide array of services to address your unique healthcare needs.</h6>\r\n<h6>Our dedicated team of healthcare professionals is passionate about ensuring that you receive the highest standard of care. From preventive measures to specialized treatments, we are here to guide you on your journey towards better health.</h6>\r\n<h6>We understand that every individual is different, which is why we take a holistic approach to healthcare. Whether you require physiotherapy, medical consultations, nursing care, elder care and caregiving, exercise and body stretching, massage therapy, yoga, acupuncture and acupressure, or hijama therapy, our aim is to provide tailored solutions that meet your specific requirements.</h6>\r\n<h6>Your health is our top priority, and we strive to empower you with the knowledge and tools necessary to make informed decisions about your well-being. We believe in building strong relationships with our patients, based on trust, respect, and open communication.</h6>\r\n<h6>When you choose Shebaralohealth, you can trust that we will go above and beyond to ensure your health is taken care of in the most compassionate and effective manner. Your wellness is our utmost concern, and we are honored to be your trusted partner in your healthcare journey.</h6>\r\n</li>\r\n<li style=\"list-style: none; position: relative; padding-left: 32px; margin: 0px 0px 18px;\">&nbsp;</li>\r\n<li style=\"list-style: none; position: relative; padding-left: 32px; margin: 0px;\">&nbsp;</li>\r\n</ul>\r\n</div>\r\n</div>', 'About/about_banner_image-121250977.webp', '<h5>Who Are We?</h5>\r\n<h6>We Are SHEBAR ALO HEALTH , SHEBAR ALO HEALTH Is Your Healthcare Soluton, We.provide. Physiotherapy Home Service, Doctors And nursing home service, elder care &amp; Care Givers, exercise &amp; Body Steertching, Massage Therapy, Yoga, Hijama/Cupping Therapy , Acupressure And Acupuncture, Alternative Therapies Provide Convenient And Personalized Healthcare Services. Offering Treatments, Support, And Assistance To Improve Physical Well-Being And Overall Quality of Life. IN DHAKA CITY</h6>', '<h5>Total Physical solution&nbsp;</h5>\r\n<h6>Shebar Alo Health,can effectively treat a wide range of conditions, including: Back pain, Neck pain,Sprains and strains, Arthritis, Sports injuries, Post-operative rehabilitation, Stroke,Parkinson\'s disease, Multiple sclerosis, Cerebral palsy, Respiratory conditions,Posture-related issues, Balance disorders, Muscular dystrophy,Tennis elbow,Plantar fasciitis, Sciatica,Osteoporosis, Scoliosis, Rotator cuff injuries, Frozen shoulder, Achilles tendonitis, Bursitis, Gait abnormalities, Pelvic floor disorders, Vertigo and vestibular disorders. etc.</h6>', '<h5><strong>Our commitment</strong></h5>\r\n<h6><strong>Shebar Alo Health. we are committed to providing exceptional medical services to our valued clients. Our dedication lies in delivering top-notch care and ensuring the well-being of each individual we serve. We strive to maintain the highest standards of professionalism, compassion, and expertise in every aspect of our services. Our team of skilled healthcare professionals is passionate about making a positive impact on the lives of our patients. With a focus on integrity, innovation, and continuous improvement, we aim to be a trusted partner in your healthcare journey. Your health and satisfaction are our utmost priority, and we are honored to be your healthcare provider of choice.</strong></h6>', '<h5>World Class treatment</h5>\r\n<h6><strong><span style=\"font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif;\">Shebar Alo Health, we offer a comprehensive range of healthcare services to cater to your needs. Our services include physiotherapy, medical consultations with experienced doctors, nursing care, elder care, and professional caregivers. We also provide exercise and body stretching sessions, rejuvenating massage therapy, invigorating yoga classes, as well as acupuncture and acupressure treatments. Additionally, we specialize in hijama therapy for those seeking alternative healing methods. at home service in dhaka city</span></strong></h6>', 'About/about_image-1450563366.png', 'About/about_image-279829217.png', '2023-05-30 03:49:04', '2023-07-24 19:19:07');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `service_id` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `select_time` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `number`, `email`, `service_id`, `date`, `select_time`, `created_at`, `updated_at`) VALUES
(1, 'shadhin', '019738272737', 'admin@itsolutionstuff.com', '7', '2023-06-12', '1', '2023-06-06 04:01:25', '2023-06-06 04:01:25'),
(3, 'ddd', '35345', 'mibucili@mailinator.com', '8', '2023-06-28', '3', '2023-06-06 05:16:45', '2023-06-06 05:16:45'),
(5, 'abc', '019738272737', 'mibucili@mailinator.com', '5', '2023-06-29', '2', '2023-06-06 05:18:10', '2023-06-06 05:18:10'),
(6, 'Mir Sabbir', '0554968', 'abusayeedkhan992266@gmail.com', '3', NULL, '0', '2023-06-25 13:07:46', '2023-06-25 13:07:46'),
(7, NULL, NULL, NULL, NULL, NULL, '0', '2023-07-01 14:46:26', '2023-07-01 14:46:26'),
(8, NULL, NULL, NULL, '8', '2023-07-24', '1', '2023-07-24 09:27:07', '2023-07-24 09:27:07'),
(9, 'WbyxpYNyQJlkKmj', '1', 'hrcfkz.qcpptd@spinapp.bar', '0', '1', '0', '2023-11-11 20:49:39', '2023-11-11 20:49:39'),
(10, 'Alayna', '1', 'SWKRIm.hmttt@gemination.hair', '0', '1', '0', '2023-11-27 06:04:52', '2023-11-27 06:04:52'),
(11, 'Nicolas', '1', 'jCUoWn.mjmjdc@chiffon.fun', '0', '1', '0', '2023-11-29 14:36:57', '2023-11-29 14:36:57'),
(12, 'JJHQjLoPha', '1', 'jpmJKp.dhhhmdt@monochord.xyz', '0', '1', '0', '2023-12-01 03:17:36', '2023-12-01 03:17:36'),
(13, 'Miah Kutubur Rahman Chowdhury', '01713100410', 'krahman09@gmail.com', '11', NULL, '0', '2023-12-06 06:09:28', '2023-12-06 06:09:28'),
(14, 'Hayden', '1', 'JLCYwa.qjcqmht@tarboosh.shop', '0', '1', '0', '2023-12-31 17:40:37', '2023-12-31 17:40:37'),
(15, 'Ahmir', '1', 'WjFhlk.wmjmbcw@chiffon.fun', '0', '1', '0', '2024-01-05 18:23:41', '2024-01-05 18:23:41'),
(16, 'rccbn', '01747363236', NULL, '3', NULL, '0', '2024-01-21 06:18:18', '2024-01-21 06:18:18'),
(17, 'Julius', '1', 'rMUxex.qqdwqqbw@rottack.autos', '0', '1', '0', '2024-01-24 06:04:04', '2024-01-24 06:04:04'),
(18, '29.01hk6sdjpwkz0aftr32dwcc8jm@mail5u.pw', '148', '29.01hk6sdjpwkz0aftr32dwcc8jm@mail5u.pw', '15', '2001-02-03', '3', '2024-02-03 02:54:59', '2024-02-03 02:54:59');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_infos`
--

CREATE TABLE `appointment_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `details1` longtext DEFAULT NULL,
  `details2` longtext DEFAULT NULL,
  `details3` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointment_infos`
--

INSERT INTO `appointment_infos` (`id`, `title`, `details1`, `details2`, `details3`, `created_at`, `updated_at`) VALUES
(1, 'Protect Your Health with Our Comprehensive Health Package', '<p>Take charge of your well-being and safeguard your health with our exclusive Health Package. Designed to address your specific health needs, this comprehensive package offers a range of essential services and screenings to help you stay proactive and maintain a healthy lifestyle.</p>', '<h3>The Foundation of Lasting Happiness</h3>\r\n<p>\"Health is the root of all happiness\" is an insightful exploration of the profound connection between our well-being and overall happiness. This book delves into the fundamental role that good health plays in cultivating a fulfilling and joyful life.</p>', '<h3>A Guide to Living a Healthy Life</h3>\r\n<p>\"Live Healthy Life\" is your go-to resource for embracing vitality and cultivating a lifestyle that prioritizes your well-being. This book is a comprehensive guide filled with practical tips, expert advice, and inspiring insights to help you embark on a journey towards a healthier and happier life.</p>', '2023-05-31 04:32:53', '2023-07-10 19:31:56');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `short_details` varchar(255) DEFAULT NULL,
  `image1` text DEFAULT NULL,
  `image2` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `short_details`, `image1`, `image2`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'website-banner/banner-646803854.png', 'website-banner/banner-988423868.jpg', '2023-06-05 22:45:24', '2023-07-21 09:24:41'),
(2, NULL, NULL, 'website-banner/banner-1297919184.jpg', 'website-banner/banner-827975204.jpg', '2023-06-05 22:47:54', '2023-07-18 16:51:36'),
(3, NULL, NULL, 'website-banner/banner-109214519.png', 'website-banner/banner-222061647.jpg', '2023-06-05 22:49:10', '2023-07-21 09:22:41');

-- --------------------------------------------------------

--
-- Table structure for table `banner_and_titles`
--

CREATE TABLE `banner_and_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `page` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_and_titles`
--

INSERT INTO `banner_and_titles` (`id`, `title`, `image`, `page`, `created_at`, `updated_at`) VALUES
(1, 'Meet Our Expert & Experienced Team Members.', 'banner/banner-959891325.png', 'doctors', '2023-06-04 00:08:08', '2023-07-08 19:42:12'),
(2, NULL, 'banner/banner-564194000.jpg', 'services', '2023-06-04 01:07:22', '2023-07-08 19:40:20'),
(3, 'Our Simple & Affordable Package.', 'banner/banner-2032004948.jpg', 'packages', '2023-06-04 01:26:14', '2023-07-07 19:04:02'),
(4, 'The Main Reason For Your Choice Is Our Best Service.', 'banner/banner-1254312891.jpg', 'testimonial', '2023-06-04 01:27:54', '2023-06-04 01:49:56'),
(5, 'Our Latest & Most Popular Tips & Tricks For You.', 'banner/banner-864545337.jpg', 'blogs', '2023-06-04 01:28:53', '2023-06-04 01:47:55'),
(6, 'Contacts us', 'banner/banner-231278525.png', 'doctors', '2023-06-04 03:17:11', '2023-07-16 10:46:05'),
(7, 'Shebar Alo Health Managments', 'banner/banner-2097615323.jpg', 'managements', '2023-06-04 03:49:10', '2023-07-09 09:10:53'),
(8, 'Book an Appointment', 'banner/banner-351541597.jpg', 'appointment', '2023-06-06 00:03:29', '2023-07-09 09:08:16'),
(9, NULL, 'banner/banner-575475229.jpg', 'gallery', '2023-06-19 01:41:08', '2023-06-19 01:42:07'),
(10, NULL, 'banner/banner-949686763.png', 'contacts', '2024-01-04 13:39:13', '2024-01-04 13:39:13');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text DEFAULT NULL,
  `short_details` text DEFAULT NULL,
  `main_image` text DEFAULT NULL,
  `banner_image` text DEFAULT NULL,
  `details_image1` text DEFAULT NULL,
  `details_image2` text DEFAULT NULL,
  `details_image3` text DEFAULT NULL,
  `details1` longtext DEFAULT NULL,
  `details2` longtext DEFAULT NULL,
  `add_home` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1= active; 0=deactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `short_details`, `main_image`, `banner_image`, `details_image1`, `details_image2`, `details_image3`, `details1`, `details2`, `add_home`, `status`, `created_at`, `updated_at`) VALUES
(4, 'The Advantages of Doctor Home Service: Bringing Healthcare to Your Doorstep', '<p>In today\'s fast-paced world, finding time for medical appointments can often be challenging. However, thanks to the advent of doctor home service, healthcare is becoming more accessible and convenient than ever before. In this blog, we will explore the numerous benefits of doctor home service and how it is revolutionizing the way we receive medical care.</p>', 'blog/blog_main_image-2013656071.png', 'blog/blog_banner_image-2059411929.png', 'blog/blog_details_image-1774509454.png', 'blog/blog_details_image-213492793.png', 'blog/blog_details_image-1862496846.png', '<p><strong>1. Convenience and Time-Saving:</strong><br>One of the primary benefits of doctor home service is the unparalleled convenience it offers. Rather than spending hours commuting to a clinic or waiting in crowded waiting rooms, you can have a qualified healthcare professional come to your home. This eliminates the need to take time off work, find transportation, or arrange for childcare. Doctor home service saves you valuable time and allows you to focus on your health without unnecessary hassle.</p>\r\n<p><strong>2. Personalized and Individualized Care:</strong><br>When a doctor visits your home, they have the opportunity to provide personalized and individualized care. They can take the time to understand your unique medical history, lifestyle, and environment, which can significantly impact your healthcare needs. This personalized approach allows doctors to develop tailored treatment plans and provide comprehensive care that addresses your specific concerns and requirements.</p>\r\n<p><strong>3. Enhanced Comfort and Reduced Stress:</strong><br>For individuals with mobility issues, chronic illnesses, or those who feel anxious about medical settings, doctor home service offers a comforting alternative. Being in the comfort of your own home can help alleviate stress and anxiety, creating a more relaxed environment for medical consultations. This can lead to better communication with the doctor and improved overall well-being.</p>\r\n<p><strong>4. Continuity of Care:</strong><br>For patients requiring ongoing medical management, doctor home service ensures continuity of care. By having the same doctor visit regularly, a trusting relationship is built, and the physician gains a comprehensive understanding of your health status. This allows for more effective monitoring, timely interventions, and better management of chronic conditions.</p>\r\n<p><strong>5. Preventive Healthcare:</strong><br>Doctor home service is not limited to treating acute illnesses; it also promotes preventive healthcare. Doctors can conduct routine check-ups, administer vaccinations, perform health screenings, and offer preventive counseling right in the comfort of your home. By focusing on prevention, doctor home service helps identify potential health risks early on and enables proactive measures to maintain optimal health.</p>\r\n<p><strong>6. Improved Patient Engagement and Education:</strong><br>In a home environment, patients often feel more comfortable asking questions and actively participating in their healthcare. Doctors providing home service have the opportunity to engage patients in meaningful conversations, educate them about their conditions, and explain treatment options in detail. This empowers patients to make informed decisions and take charge of their health.</p>\r\n<p><strong>7. Comprehensive Medical Services:</strong><br>Doctor home service is not limited to general practitioners; it extends to a wide range of medical specialists. From geriatric care and pediatric services to specialized consultations such as dermatology or psychiatry, doctors from various disciplines can provide comprehensive medical care in the comfort of your home. This ensures that you receive the appropriate expertise and treatment for your specific healthcare needs.</p>', '<p><strong>Conclusion: </strong></p>\r\n<p>Doctor home service offers a plethora of advantages, ranging from convenience and personalized care to enhanced comfort and comprehensive medical services. By bringing healthcare to your doorstep, it revolutionizes the way we access medical care, making it more accessible, efficient, and patient-centered. Whether you require acute treatment, ongoing management, or preventive care, doctor home service empowers you to prioritize your health without compromising on convenience. Embrace the benefits of doctor home service and experience a new level of healthcare that caters to your needs.</p>', 1, 1, '2023-06-28 09:16:35', '2024-01-14 13:38:08'),
(5, '10 Tips  For a Healthy', '<p>একটি সুস্থ জীবন পালনের জন্য ১০টি পরামর্শ হলো:</p>\r\n<p>১. প্রতিদিন স্বাস্থ্যকর খাবার খাওয়ার চেষ্টা করুন: আপনার ভোজনে প্রোটিন, সবজি, ফল এবং পুষ্টিকর খাবার অবশ্যই থাকবে। ভিটামিন, মিনারেল ও ফাইবারের উচ্চ পরিমাণ সাধারণত স্বাস্থ্যকর খাবারে পাওয়া যায়।</p>\r\n<p>২. পর্যাপ্ত পরিমান পানি পান করুন: দিনে ৮-১০ গ্লাস পানি পান করা উচিত। পানি আপনার শরীরের প্রয়োজনীয় কার্বনিক পদার্থ বিনিময় করে এবং সাধারণত পানিতে শুকনোত্ব থাকে না।</p>', 'blog/blog_main_image-2123002193.png', 'blog/blog_banner_image-1772049923.jpg', NULL, NULL, NULL, '<p>৩. নিয়মিত ব্যায়াম করুন: মানসিক ও শারীরিক স্বাস্থ্যের জন্য নিয়মিত ব্যায়াম করা উচিত। মানসিক ব্যায়াম হিসাবে ধ্যান, মেডিটেশন বা যোগাসন করতে পারেন। শারীরিক ব্যায়াম হিসাবে রানিং, যোগা, সার্কিট ট্রেনিং বা গিমে যাওয়া যেতে পারে।</p>\r\n<p>৪. পর্যাপ্ত শুতে যান: স্বাস্থ্যকর জীবনের জন্য প্রতিদিন ৭-৮ ঘণ্টা ঘুমানো উচিত। পর্যাপ্ত ও গুণগত ঘুম আপনাকে তাজা রাখবে এবং মানসিক ও শারীরিক ক্ষমতা বৃদ্ধি করবে।</p>\r\n<p>৫. নিয়মিত দেহ পরিস্কার করুন: দিনে কমপক্ষে দুবার স্নান করলেও আরো ভালো। মাছের তেল, আলুবখারা বা আইলারন ব্যবহার করে আপনার ত্বকের যত্ন নিতে পারেন।</p>\r\n<p>৬. বিলম্ব না করে ছেঁকে চলুন: ক্রমাগত ও দিয়ে ধীরে ধীরে বাড়িতে ওঠবার চেষ্টা করুন। এটি আপনার হৃদয় ও পুরো শারীরিক অবস্থাকে উন্নত করবে।</p>\r\n<p>৭. তন্দ্রাচ্ছন্নতা থেকে দূর থাকুন: প্রতিদিন মানসিক সুস্থতার জন্য কিছু সময় মানসিক শান্তি পাওয়ার জন্য ব্যয় করুন। মেডিটেশন, যোগা বা গান শোনা যেতে পারে।</p>', '<p>৮. মানসিক ও শারীরিক ক্ষমতা বৃদ্ধি করতে প্রাকৃতিক পরিবেশে সময় কাটান: প্রাকৃতিক পরিবেশে বেশি সময় কাটান। বৃষ্টির দিনে ছাতা তুলে বের হোন এবং গ্রীষ্মকালে সূর্যালোকে বের হোন।</p>\r\n<p>৯. নিয়মিত ডাক্তারের সাথে পরামর্শ নিন: নিয়মিতভাবে ডাক্তারের চেকআপ করান। শরীরের যেকোন ধরনের সমস্যার জন্য সঠিক পরামর্শ পেতে ডাক্তারের সাথে পরামর্শ করুন।</p>\r\n<p>১০. নিয়মিতভাবে মজা করুন এবং প্রিয় লোকের সঙ্গে সময় কাটান: মানসিক সুস্থতা জনিত সমস্যা থেকে দূর থাকতে প্রিয় কাজ করুন এবং নিজের প্রিয় লোকের সাথে আনন্দ করুন। এটি আপনার জীবনকে সুখী ও সন্তুষ্ট করবে।</p>', 1, 1, '2023-07-18 18:32:47', '2024-01-14 13:35:31'),
(6, 'শারীরিকভাবে ফিট থাকার জন্য ১০টি পরামর্শ', '<p>১. নিয়মিত ব্যায়াম করুন: সপ্তাহে কমপক্ষে ২০-৩০ মিনিট ব্যায়াম করার চেষ্টা করুন। যেকোনো ধরনের ব্যায়াম করতে পারেন, যেমন রানিং, যোগা, সাইকেলিং ইত্যাদি।</p>\r\n<p>২. পর্যাপ্ত পরিমাণে ঘুমানো উচিত: প্রতিদিন ৭-৮ ঘন্টা ঘুমানো উচিত। পর্যাপ্ত ঘুম নিশ্চিত করবে শারীরিক পুনরুদ্ধার এবং মানসিক স্বাস্থ্য।</p>', 'blog/blog_main_image-1462376329.png', 'blog/blog_banner_image-436988635.jpg', NULL, NULL, NULL, '<p>৩. স্বাস্থ্যকর খাবার খান: প্রোটিন, শাকসবজি, ফল, পুষ্টিকর খাবার আপনার ডায়েটে অবশ্যই থাকবে। বিলম্ব প্রক্রিয়ায় প্রসেস করা খাবারের ব্যবহার এবং নিরামিষ খাদ্যের উপভোগ করুন।</p>\r\n<p>৪. পর্যাপ্ত পানি পান করুন: দিনে ৮-১০ গ্লাস পানি পান করা উচিত। পানি শরীরের নিয়মিত প্রশস্ততা ও উর্বরতা বজায় রাখবে।</p>\r\n<p>৫. নিয়মিত শারীরিক পরিশ্রম করুন: দৈনন্দিন কার্যক্রমে শারীরিক পরিশ্রম অন্যভাবে যোগ করুন। উদাহরণস্বরূপ, পাঠ্যপুস্তক পড়ার সময়ে থেকে থাকুন এবং হাতের সাহায্যে নিজের ক্ষেত্রে কাজ করুন।</p>\r\n<p>৬. বিশ্রাম এবং পুনরুদ্ধারের জন্য প্রতিদিন সময় দিন: মানসিক ও শারীরিক পুনরুদ্ধারের জন্য নিয়মিতভাবে বিশ্রাম নিন। সাপ্তাহিক ছুটির দিনগুলির সাথে সম্পর্কিত কাজ এবং আপনার শরীর এবং মনের জন্য সময় দিন।</p>', '<p>৭. আপনার শরীরের যত্ন নিন, যত্নশীল থাকুন: নিয়মিতভাবে শরীরের পরিচর্যা করুন। স্নান করুন, মেশিন করে শরীরের পরিস্কার রাখুন এবং উপযুক্ত পরিধেয় ব্যবহার করুন।</p>\r\n<p>৮. পর্যাপ্ত সময়ে রিল্যাক্স করুন এবং মানসিক স্বাস্থ্যকে পরিচালনা করুন: নিয়মিতভাবে মানসিক রিল্যাক্সেশন অনুষ্ঠান করুন, যেমন মেডিটেশন, যোগা, দীর্ঘশ্বাস প্রয়োগ ইত্যাদি। মনোযোগ এবং স্বাস্থ্যকে পরিচালনা করার জন্য পর্যাপ্ত সময় দিন।</p>\r\n<p>৯. যোগাযোগ প্রতিবন্ধক অংশগ্রহণ করুন: পরিবারের সদস্যদের, বন্ধুদের এবং সামাজিক সম্পর্কের সাথে যোগাযোগ প্রতিবন্ধক না হওয়ার চেষ্টা করুন। সামাজিক সম্পর্ক ও সমর্থন আপনাকে মানসিক ও শারীরিকভাবে সুস্থ রাখতে সাহায্য করবে।</p>\r\n<p>১০. নিয়মিত চেকআপ এবং পরামর্শ করুন ডাক্তারের সাথে: নিয়মিতভাবে ডাক্তারের সাথে চেকআপ করুন এবং শারীরিক পরিস্থিতি সম্পর্কে তথ্য প্রদান করুন। ডাক্তারের পরামর্শ পেতে নিয়মিত চেকআপ করা উচিত।</p>', 1, 1, '2023-07-19 09:19:01', '2024-01-14 13:41:04');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `number`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'shadhin', NULL, 'admin@itsolutionstuff.com', 'dsgfdsfsdfds', 'dsfdsfdsfsdfsdf', '2023-06-06 05:56:18', '2023-06-06 05:56:18'),
(2, 'fsdfsdf', NULL, 'shadhin@gmail.com', 'dsgfdsfsdfds', 'fgdfgdfgdfgdfgfd', '2023-06-06 05:57:01', '2023-06-06 05:57:01'),
(3, 'aaa', '534543', 'admin@itsolutionstuff.com', 'fdgdfgfd', 'fdgdfgdfgdfg dfgfdgfdg', '2023-06-06 05:58:01', '2023-06-06 05:58:01'),
(4, 'Anna  Wilson', '1201201200', 'annawilson.web@gmail.com', 'Need reliable and consistent accounting?', NULL, '2023-06-20 17:28:21', '2023-06-20 17:28:21'),
(5, 'Anna Wilson', '1201201200', 'annawilson.web@gmail.com', 'Re: Improve your website traffic and SEO', 'Hi,\r\n\r\nWe\'ll use SEO, Social Media Outreach, and Pay Per Click to get your website to the top of Google\'s results page.\r\n\r\nAs a result quality leads will consequently fill your schedule and you will get Traffic, leads and sales.\r\n\r\nIf this is of interest to you, please provide me with your name, email, and phone number.\r\n\r\nTo Your Success!\r\nAnna wilson\r\n\r\n\r\n\r\n(shebaralohealth.com)', '2023-06-20 20:56:32', '2023-06-20 20:56:32'),
(6, 'McCormack', '070 6096 0478', NULL, 'Rank your new website high on Google even if you do not know much about technology and the web - Get the Shineranker SEO tool - free ebook for you included and my help getting going', 'Hey, \r\n\r\nDo you want to know what is holding your website back and why you can not rank high in the Google searches to beat your competition? Do you not know much about technology and the web then join here www.shinerankerjoin.com\r\n\r\nI want to help you with a FREE site audit health check provided by this seo tool to determine the areas for improvement.\r\n\r\nGet your free 10 day trial today and then your audit  by visiting this website www.shinerankerjoin.com and signing up to the trial. \r\n\r\nIf you have any questions on signing up to this seo tool and want furthur information getting your free health check to make your new website more profitable email me for my free personnel advice on Joinshinereply@hotmail.com.\r\n\r\nOpt out of future messages by replying to this message or emailing Joinshinereply@hotmail.com and saying opt out. \r\n\r\nRegards,\r\n\r\nDale \r\n\r\nSEO specialist\r\n\r\nwww.shinerankerjoin.com', '2023-06-21 00:55:19', '2023-06-21 00:55:19'),
(7, 'Harvey Miller', '8458271444', 'harveymiller.web2@gmail.com', 'Question about your website', 'Hello,\r\n\r\nWe noticed SEO errors on your new website that may impact its visibility on search engines, leading to low visitor traffic. Let\'s schedule a call at your convenience to discuss and easily resolve these issues. If your new business is a priority, please provide your phone number and preferred time to call.\r\n\r\nThank you,\r\nHarvey Miller', '2023-06-22 01:16:02', '2023-06-22 01:16:02'),
(8, 'Angila Dates', '9058899464', 'angiladates791@gmail.com', 'Question about your websites', 'Hello,', '2023-06-22 20:10:18', '2023-06-22 20:10:18'),
(9, 'Angila Dates', '9058899464', 'angiladates791@gmail.com', 'Question about your websites', 'Hello,', '2023-06-22 20:10:28', '2023-06-22 20:10:28'),
(10, 'Maria Steinberg', '079 5211 6102', 'maria@furthertrends.com', 'did you know about this', 'Hey,\r\n\r\nI just wanted to make sure you got the chance to try out the new A.I. tool that turns your website content into videos while there\'s still a free plan.\r\n\r\nCheck it out here: http://furthertrends.com\r\n\r\n-Maria\r\n\r\nunsub from future comms: https://u.furthertrends.com', '2023-06-25 08:12:10', '2023-06-25 08:12:10'),
(11, 'RobertMor', NULL, 'alfredegov@gmail.com', 'Hi  i write about your the price for reseller', 'Ola, quería saber o seu prezo.', '2023-07-01 16:38:45', '2023-07-01 16:38:45'),
(12, 'RobertMor', NULL, 'alfredegov@gmail.com', 'Hello, i write about your   prices', 'Прывітанне, я хацеў даведацца Ваш прайс.', '2023-07-01 18:59:00', '2023-07-01 18:59:00'),
(13, 'Angelina', '1', 'qLjMHk.wmjmbpb@chiffon.fun', 'Norah Lowery', 'Norah Lowery', '2024-01-05 18:23:43', '2024-01-05 18:23:43'),
(14, 'Sallie Reagan', '070 3562 0132', 'reagan.sallie@gmail.com', 'Dear shebaralohealth.com Owner!', 'You\'re living proof that contact form blasting works! You just read my message and I can get millions of people to read YOUR message just the same way. Skype or email me below and I\'ll tell you how I can do contact form blasts for your business!\r\n\r\nP. Stewart\r\nSkype: live:.cid.e169e59bb6e6d159\r\nEmail: psPa77 9xa@gomail2.xyz', '2024-01-05 18:23:44', '2024-01-05 18:23:44'),
(15, 'Noreen Hacker', '302-368-8459', 'noreen.hacker@msn.com', 'Hi shebaralohealth.com Admin.', 'Contact form blasts work! I can put your ad message in front of millions for less than $100 the same way I just put this message in front of you! Reach out to me via Skype or Email for details.\r\n\r\nP. Stewart\r\nSkype: live:.cid.e169e59bb6e6d159\r\nEmail: ps19711@gomail2.xyz', '2024-01-09 07:21:47', '2024-01-09 07:21:47'),
(16, 'Lucy Johnson', '1234567890', 'lucyjohnson.web@gmail.com', 'Re: Call to update your website $', 'Hello,\r\n \r\nHope you are doing well\r\n \r\nI was surfing the internet and found your email contact.\r\n \r\n Are you looking for a website for your business or do you want to redesign your website with the latest features that might benefit the overall usability & user experience which usually leads to better sales! \r\n \r\nWe Deliver Following Services:\r\n\r\n∙         Web Designing & Development\r\n∙         Hosting and Domain Registration\r\n∙         Graphic Design & Logo Design\r\n∙         Add/Update new features\r\n \r\nLet me know if you are interested and want a fresh look so that we will be able to provide you with further solutions as per your requirements. \r\n \r\nI am looking forward to hearing from you soon.\r\n \r\nSincerely,\r\nLucy Johnson\r\n\r\nWishing you a fantastic New Year filled with achievements and growth!\r\n\r\n\r\nYour Website : shebaralohealth.com', '2024-01-18 05:21:45', '2024-01-18 05:21:45'),
(17, 'Una Thorby', '0316 6532089', 'thorby.una@hotmail.com', 'Dear shebaralohealth.com Owner.', 'Are you looking for a way to watch your favorite TV channels and movies on any device, anytime, anywhere? Look no further than OneTVIPTV.com , the best and most affordable IPTV service in the world (plans as low as $9/mnth) . With over 97,000 live TV channels and VOD, you will never run out of entertainment options. Sign up now and get a free trial for 24 hours. Don\'t miss this opportunity to enjoy the ultimate IPTV experience with OneTV IPTV. Go to Onetviptv.com', '2024-01-18 07:11:58', '2024-01-18 07:11:58'),
(18, 'Rosie', '1', 'Kupymi.qqdwqqmq@rottack.autos', 'Neil Marquez', 'Neil Marquez', '2024-01-24 06:04:14', '2024-01-24 06:04:14'),
(19, 'Ramiro Windeyer', '070 5925 7542', 'ramiro.windeyer@msn.com', 'Dear shebaralohealth.com Webmaster!', 'This message showed up to you and I can make your message show up to millions of websites the same way. It\'s awesome and low-cost.If you are interested, you can reach me via email or skype below.\r\n\r\nP. Stewart\r\nEmail: n6j0js@gomail2.xyz\r\nSkype: live:.cid.37ffc6c14225a4a8', '2024-01-25 21:07:52', '2024-01-25 21:07:52'),
(20, 'Ian Hocking', '01.14.88.77.75', 'ian.hocking41@gmail.com', 'We need Affiliates. Grab $2K Per Sale Affiliate Commission ... PLUS Your Share of $25K in Cash & Prizes!', 'The Traffic Syndicate is a new high-ticket traffic generation mastermind and weekly traffic coaching program. Affiliate commission is 40% per $5K sale ($2K) & your share of a $25K Prize Pool. Find out how to can access to your promo tools, and more, here:\r\n\r\nhttps://bit.ly/BeASyndicateAffililate', '2024-02-01 10:23:45', '2024-02-01 10:23:45'),
(21, 'Latoya Erlikilyika', '(08) 8312 8580', 'latoya.erlikilyika@gmail.com', 'Hi shebaralohealth.com Admin.', 'This message showed up to you and I can make your message show up to millions of websites the same way. It\'s awesome and low-cost.For more information, please email me or skype me below.\r\n\r\nP. Stewart\r\nEmail: kwpqfm@gomail2.xyz\r\nSkype: live:.cid.37ffc6c14225a4a8', '2024-02-04 07:33:54', '2024-02-04 07:33:54'),
(22, 'Saundra Christiansen', '928-857-5657', 'saundra.christiansen@googlemail.com', 'Hello shebaralohealth.com Admin.', 'New tech could give Chatgpt a run for its money.  It turns your Youtube videos into video games..keeps people engaged to watch every second.  You can even reward them for watching the whole video and they give you their email to get the reward ;) As seen on CBS, NBC, FOX, and ABC. \r\n\r\nSend me an email or skype message below to see if you qualify for a free GAMIFICATION of your video.\r\n\r\nMike\r\nemail: gamifyvideo@gmail.com\r\nskype: live:.cid.d347be37995c0a8d', '2024-02-05 11:10:45', '2024-02-05 11:10:45'),
(23, 'Eliza Macgroarty', '0699 151 80 67', 'eliza.macgroarty@gmail.com', 'Dear shebaralohealth.com Webmaster!', 'Seeking a trusted CPA for financial assurance and precise reporting? Explore our top-notch services, including expert financial statement audits, streamlined reviews, and comprehensive tax solutions. Elevate your financial game with San Diego CPA - where expertise meets tailored excellence. For a free consultation today, contact me directly or visit my site below.\r\n\r\n\r\nBest regards,\r\n\r\n\r\nMichelle Encines, Manager\r\nSan Diego, CPA A Professional Tax and Accountancy Corporation\r\nProfessional Advice. Sharper Results.\r\n5703 Oberlin Drive Suite 107\r\nSan Diego, CA 92121\r\n(858)246-6519 Office\r\n(866)272-8296 Toll free\r\n(858)800-3888 fax\r\nwww.sandiegocpas.com', '2024-02-05 17:29:27', '2024-02-05 17:29:27'),
(24, 'RobertMor', NULL, 'lucido.leinteract@gmail.com', 'Aloha  i writing about your   price', 'Hi, მინდოდა ვიცოდე თქვენი ფასი.', '2024-02-08 13:13:20', '2024-02-08 13:13:20');

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctors` int(11) DEFAULT NULL,
  `services` int(11) DEFAULT NULL,
  `clients` int(11) DEFAULT NULL,
  `awards` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`id`, `doctors`, `services`, `clients`, `awards`, `created_at`, `updated_at`) VALUES
(1, 50, 150, 750, 20, '2023-06-20 04:09:06', '2023-06-22 11:29:10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footer_details`
--

CREATE TABLE `footer_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `details` text NOT NULL,
  `credit` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_details`
--

INSERT INTO `footer_details` (`id`, `details`, `credit`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet consc tetur adicing elit. Dolor emque dicta molest enim beatae ame consequ atur tempo pretium auctor nammmm.', 'All Rights Reserved By Tech web', '2023-06-05 01:14:58', '2023-06-05 01:14:58'),
(2, 'SHEBAR ALO HEALTH Is Your Healthcare Soluton, We.provide. Doctor Consultancy, Physiotherapy Nursing Home Service, Elder Care & Care Givers, Exercise & Body Steertching, Massage Therapy, Yoga Class, Hijama Cuping Therapy, Acupressure And Acupuncture,Chiropractic, Etc. Alternative Therapies Provide Convenient And personalized healthcare services. In Dhaka City,We Offering Treatments, Support, And Assistance to Improve Physical Well-Being And Overall Quality Of Life.', 'All Rights By SHEBAR ALO HEALTH', '2023-06-05 01:15:17', '2023-11-21 11:50:29');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text DEFAULT NULL,
  `add_home` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1= active; 0=deactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `add_home`, `status`, `created_at`, `updated_at`) VALUES
(9, 'gallery/gallery_image-1734457004.png', 1, 1, '2023-12-21 12:17:57', '2024-01-05 02:43:59'),
(10, 'gallery/gallery_image-2390018.png', 1, 1, '2024-01-05 02:43:36', '2024-01-05 02:43:36'),
(11, 'gallery/gallery_image-1348431270.png', 1, 1, '2024-01-05 02:44:58', '2024-01-05 02:44:58'),
(12, 'gallery/gallery_image-1032073100.jpg', 1, 1, '2024-01-05 02:45:28', '2024-01-05 02:45:28'),
(13, 'gallery/gallery_image-590772193.jpg', 1, 1, '2024-01-05 02:46:01', '2024-01-05 02:46:01'),
(14, 'gallery/gallery_image-19399124.png', 1, 1, '2024-01-05 02:46:17', '2024-01-05 02:46:17'),
(15, 'gallery/gallery_image-428542928.jpg', 1, 1, '2024-01-05 02:46:40', '2024-01-05 02:46:40'),
(16, 'gallery/gallery_image-344860923.png', 1, 1, '2024-01-05 02:46:59', '2024-01-05 02:46:59'),
(17, 'gallery/gallery_image-476118025.jpg', 1, 0, '2024-01-05 02:47:19', '2024-01-05 02:54:42'),
(18, 'gallery/gallery_image-469206465.jpg', 1, 1, '2024-01-05 02:48:40', '2024-01-05 02:48:40'),
(19, 'gallery/gallery_image-2093458234.jpg', 1, 1, '2024-01-05 02:49:01', '2024-01-05 02:49:01'),
(20, 'gallery/gallery_image-447668691.jpg', 1, 1, '2024-01-05 02:49:22', '2024-01-05 02:49:22'),
(21, 'gallery/gallery_image-711410689.png', 1, 1, '2024-01-05 02:51:03', '2024-01-05 02:51:03'),
(22, 'gallery/gallery_image-1139999405.png', 1, 1, '2024-01-05 02:51:43', '2024-01-05 02:51:43'),
(23, 'gallery/gallery_image-1233492798.png', 1, 1, '2024-01-05 02:52:13', '2024-01-05 02:52:13'),
(24, 'gallery/gallery_image-1866364094.png', 1, 1, '2024-01-05 02:52:59', '2024-01-05 02:52:59'),
(25, 'gallery/gallery_image-1397910281.png', 1, 1, '2024-01-05 02:54:18', '2024-01-05 02:54:18');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) DEFAULT NULL,
  `logo_image` text DEFAULT NULL,
  `favicon` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `site_name`, `logo_image`, `favicon`, `created_at`, `updated_at`) VALUES
(1, 'সেবার আলো health Ltd', 'logo/logo-751558063.png', '/logo/logo-1187724315.png', '2023-06-08 03:23:59', '2023-12-21 13:30:13');

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE `management` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `details` longtext DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `linkedIn` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1= active, 0= deactive',
  `add_home` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `management`
--

INSERT INTO `management` (`id`, `name`, `designation`, `details`, `email`, `facebook`, `instagram`, `linkedIn`, `youtube`, `image`, `status`, `add_home`, `created_at`, `updated_at`) VALUES
(1, 'Abu sayed khan', 'Chairman & MD', 'Physical therapy and body straching expert, Digital marketing seo expert,  business consultant, branding consultant of platinum group', 'shebaralohealthbd@gmail.com', 'https://www.facebook.com/shebaralohealth', 'https://www.instagram.com/', 'https://www.linkedin.com/', 'https://www.youtube.com/@shebaralohealth', 'management/management-1476795433.png', 1, 1, '2023-06-04 03:35:03', '2024-01-03 15:09:46'),
(2, 'Abu Hena Mustafa Kamal', 'Director', 'B.Sc Honours in Physics (CU)\r\nM.Sc in Physics (BUET)\r\nWork experience in Nanoparticles field (having reachers articles in international journal).', 'sHebaralohealthbd@gmail.com', 'https://www.facebook.com/shebaralohealth', NULL, NULL, NULL, 'management/management-178512171.png', 1, 1, '2023-06-23 11:09:08', '2024-01-03 15:07:05'),
(3, 'Nizam Chowdhury', 'consultant', 'Chairman Platinum group, director of Rehab, vice president China Bangla Chamber of Commerce, vice president Bridhara club, member Kurmitoala Golf Club, Banani club, member Fbcci', 'sebaralohealth@gmail.com', 'https://www.facebook.com/https:/shebaralohealth', NULL, NULL, NULL, 'management/management-648487314.png', 1, 1, '2023-06-23 11:17:17', '2024-01-03 15:11:45'),
(4, 'Eng Torab Ali Khan', 'consultant', 'Chairman Putul properties Limited, member Rehab, Ret. PD World Bank and LGID', NULL, NULL, NULL, NULL, NULL, 'management/management-749981378.png', 1, 1, '2023-06-28 12:05:27', '2024-01-03 15:10:35'),
(5, 'Nooruddin Dewan', 'consultant', 'Director Youth Group, managing director Unicom textile mill Limited', NULL, NULL, NULL, NULL, NULL, 'management/management-5399314.png', 1, 1, '2023-06-28 12:09:31', '2024-01-03 15:12:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(18, '2023_05_29_072203_create_services_table', 2),
(19, '2023_05_30_071424_create_abouts_table', 2),
(21, '2023_05_31_060218_create_teams_table', 3),
(24, '2023_05_31_085553_create_testimonials_table', 4),
(25, '2023_05_31_101618_create_appointment_infos_table', 5),
(29, '2023_06_01_060829_create_packages_table', 6),
(31, '2023_06_01_074910_create_blogs_table', 7),
(33, '2023_06_04_054616_create_banner_and_titles_table', 8),
(34, '2023_06_04_092454_create_management_table', 9),
(37, '2023_06_04_105408_create_website_links_table', 11),
(38, '2023_06_05_070802_create_footer_details_table', 12),
(40, '2023_06_05_102842_create_banners_table', 13),
(42, '2023_06_06_095531_create_appointments_table', 14),
(43, '2023_06_06_113522_create_contact_us_table', 15),
(44, '2023_06_04_101518_create_logos_table', 16),
(45, '2023_06_13_071401_create_galleries_table', 17),
(46, '2023_06_13_082557_create_video_galleries_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `options` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1= active, 0= deactive',
  `add_home` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `price`, `options`, `status`, `add_home`, `created_at`, `updated_at`) VALUES
(1, 'Basic Package', NULL, '[\"7 Session\",\"0% off\",null]', 1, 1, '2023-06-28 08:23:45', '2023-06-28 08:23:45'),
(2, 'Silver Package', NULL, '[\"15 Session\",\"3% off\",null]', 1, 1, '2023-06-28 10:19:03', '2023-06-28 10:19:03'),
(3, 'Gold Package', NULL, '[\"30 Session\",\"5% off\",null]', 1, 1, '2023-06-01 01:12:46', '2023-06-28 10:23:10'),
(8, 'Platinum package', NULL, '[\"90 Session\",\"10% off\",null]', 1, 1, '2023-06-28 10:28:12', '2023-06-28 10:28:12');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_title` text DEFAULT NULL,
  `main_image` text DEFAULT NULL,
  `banner_image` text DEFAULT NULL,
  `details_image1` text DEFAULT NULL,
  `details_image2` text DEFAULT NULL,
  `details_image3` text DEFAULT NULL,
  `service_home` int(11) DEFAULT NULL,
  `service_details_small` longtext DEFAULT NULL,
  `service_details1` longtext DEFAULT NULL,
  `service_details2` longtext DEFAULT NULL,
  `service_details3` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1= active; 0=deactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_title`, `main_image`, `banner_image`, `details_image1`, `details_image2`, `details_image3`, `service_home`, `service_details_small`, `service_details1`, `service_details2`, `service_details3`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Physiotherapy', 'services/services_main_image-667953523.png', 'services/services_banner_image-1604659899.webp', 'services/services_details_image-1907811557.jpg', 'services/services_details_image-997563521.png', 'services/services_details_image-1536333876.webp', 1, '<p>Sebaralohealth,Physiotherapy home service,can effectively treat a wide range of conditions, including: Back pain, Neck pain,Sprains and strains, Arthritis, Sports injuries,Stroke,Parkinson\'s disease,&nbsp; Balance disorders, Muscular dystrophy, Fibromyalgia,Carpal tunnel syndrome, Whiplash,Tenni elbow, Plantar fasciitis, Sciatica,Osteoporosis, Scoliosis, Rotator cuff injuries, Frozen shoulder, Achilles tendonitis, Bursitis, Gait abnormalities,etc.Dhaka City</p>', '<h3>Shebaralohealth Physiotherapy, or physical therapy, can be effective in the treatment of various diseases and conditions. Some of the common diseases and conditions that are treated by physiotherapy include:</h3>\r\n<h6>1. Musculoskeletal Disorders: This category includes conditions such as back pain, neck pain, osteoarthritis, rheumatoid arthritis, sprains, strains, fractures, and post-surgical rehabilitation.</h6>\r\n<h6>2. Sports Injuries: Physiotherapy is often utilized for the management and rehabilitation of sports-related injuries like ligament tears, muscle strains, joint dislocations, tendonitis, and overuse injuries.</h6>\r\n<h6>3. Neurological Disorders: Physiotherapy plays a crucial role in rehabilitating individuals with neurological conditions such as stroke, traumatic brain injury, spinal cord injury, multiple sclerosis, Parkinson\'s disease, cerebral palsy, and peripheral neuropathy.</h6>\r\n<h6>4. Cardiovascular Diseases: Physiotherapy helps individuals with cardiovascular conditions like heart disease, heart attack, heart failure, and chronic obstructive pulmonary disease (COPD) through exercise programs, breathing exercises, and cardiovascular conditioning.</h6>\r\n<h6>5. Respiratory Conditions: Physiotherapy techniques are used in the treatment of respiratory conditions like asthma, chronic bronchitis, cystic fibrosis, and chronic obstructive pulmonary disease (COPD). Breathing exercises, airway clearance techniques, and respiratory muscle training are commonly employed.</h6>\r\n<h6>6. Pediatric Conditions: Physiotherapy is employed in the treatment of various pediatric conditions, including developmental delays, cerebral palsy, muscular dystrophy, genetic disorders, and orthopedic conditions.</h6>\r\n<h6>7. Geriatric Conditions: Physiotherapy helps older adults manage age-related conditions such as osteoporosis, arthritis, joint replacements, balance disorders, gait abnormalities, and mobility limitations.</h6>\r\n<h6>8. Women\'s Health Issues: Physiotherapy is involved in the treatment of women\'s health conditions such as pregnancy-related musculoskeletal pain, pelvic floor dysfunction, urinary incontinence, and post-partum rehabilitation.</h6>\r\n<h6>9. Post-Surgical Rehabilitation: Physiotherapy plays a vital role in the rehabilitation process following surgeries such as joint replacements, orthopedic surgeries, cardiac surgeries, and abdominal surgeries.</h6>\r\n<h6>10. Chronic Pain Conditions: Physiotherapy techniques, including manual therapy, exercise therapy, and pain management strategies, are employed in the treatment of chronic pain conditions like fibromyalgia, low back pain, and neuropathic pain.</h6>\r\n<h6>It\'s important to note that physiotherapy is a versatile field, and the treatment approach may vary based on the specific needs of each individual. A physiotherapist assesses the condition, creates a personalized treatment plan, and employs various techniques to promote recovery, improve mobility, reduce pain, and enhance overall quality of life.S</h6>', '<h3><strong>How does Shebaralohealth physiotherapy work?</strong></h3>\r\n<h6><strong>shebaralohealth also known as physical therapy, works through a systematic and evidence-based approach to assess, diagnose, and treat various conditions. Here\'s a general overview of how physiotherapy works:</strong></h6>\r\n<h6><strong>1. Initial Assessment: The physiotherapist begins by conducting a thorough assessment, which may include a detailed medical history, physical examination, and relevant diagnostic tests. This helps in understanding the individual\'s condition, identifying impairments, and setting goals for treatment.</strong></h6>\r\n<h6><strong>2. Diagnosis and Treatment Plan: Based on the assessment findings, the physiotherapist establishes a diagnosis and develops a personalized treatment plan. The plan is tailored to the individual\'s specific needs, goals, and the nature of their condition.</strong></h6>\r\n<h6><strong>3. Treatment Techniques: Physiotherapy employs a range of treatment techniques, which may include:</strong></h6>\r\n<h6><strong>&nbsp; &nbsp;- Manual Therapy: Hands-on techniques such as joint mobilization, soft tissue mobilization, and manipulation are used to improve joint mobility, alleviate pain, and promote tissue healing.</strong></h6>\r\n<h6><strong>&nbsp; &nbsp;- Therapeutic Exercises: Specific exercises are prescribed to improve strength, flexibility, endurance, balance, and coordination. These exercises are designed to target specific muscle groups or functional activities related to the individual\'s condition.</strong></h6>\r\n<h6><strong>&nbsp; &nbsp;- Modalities: Various modalities like heat therapy, cold therapy, ultrasound, electrical stimulation, and therapeutic taping may be used to relieve pain, reduce inflammation, promote tissue healing, and facilitate the recovery process.</strong></h6>\r\n<h6><strong>&nbsp; &nbsp;- Rehabilitation Techniques: Rehabilitation techniques, such as gait training, functional training, and task-specific activities, are employed to restore functional abilities and enhance the individual\'s independence in daily activities.</strong></h6>\r\n<h6><strong>&nbsp; &nbsp;- Education and Advice: Physiotherapists provide education and guidance on self-management strategies, ergonomics, postural correction, injury prevention, and lifestyle modifications to promote long-term wellness.</strong></h6>\r\n<h6><strong>4. Progress Monitoring: Throughout the course of treatment, the physiotherapist monitors the individual\'s progress and makes necessary adjustments to the treatment plan. Regular reassessment helps track improvements, modify interventions, and ensure the effectiveness of the therapy.</strong></h6>\r\n<h6><strong>5. Home Exercise Programs: Physiotherapists often prescribe home exercise programs, which individuals can perform independently to supplement their in-clinic treatments. These exercises help reinforce progress, maintain gains, and promote self-management.</strong></h6>\r\n<h6><strong>6. Collaboration and Referrals: Physiotherapists work collaboratively with other healthcare professionals to provide comprehensive care. They may consult with physicians, surgeons, occupational therapists, and others to ensure a holistic approach and may make referrals for further specialized interventions if needed.</strong></h6>\r\n<h6><strong>The ultimate goal of physiotherapy is to optimize physical function, reduce pain, promote healing, prevent disabilities, and enhance the individual\'s overall well-being. Physiotherapists take into account the individual\'s unique needs, preferences, and goals to deliver patient-centered care and support them in achieving their optimal physical potential.</strong></h6>', '<div class=\"flex-1 overflow-hidden\">\r\n<div class=\"react-scroll-to-bottom--css-zgojd-79elbk h-full dark:bg-gray-800\">\r\n<div class=\"react-scroll-to-bottom--css-zgojd-1n7m0yu\">\r\n<div class=\"flex flex-col text-sm dark:bg-gray-800\">\r\n<div class=\"group w-full text-gray-800 dark:text-gray-100 border-b border-black/10 dark:border-gray-900/50 bg-gray-50 dark:bg-[#444654]\">\r\n<div class=\"flex p-4 gap-4 text-base md:gap-6 md:max-w-2xl lg:max-w-[38rem] xl:max-w-3xl md:py-6 lg:px-0 m-auto\">\r\n<div class=\"relative flex w-[calc(100%-50px)] flex-col gap-1 md:gap-3 lg:w-[calc(100%-115px)]\">\r\n<div class=\"flex flex-grow flex-col gap-3\">\r\n<div class=\"min-h-[20px] flex items-start overflow-x-auto whitespace-pre-wrap break-words flex-col gap-4\">\r\n<div class=\"markdown prose w-full break-words dark:prose-invert light\">\r\n<h3>Shebaralohealth Physiotherapists?</h3>\r\n<h6><strong>Physiotherapists work closely with individuals to develop personalized treatment plans aimed at reducing pain, restoring mobility, improving strength and flexibility, enhancing functional abilities, and promoting overall physical well-being. They utilize a combination of manual therapy techniques, therapeutic exercises, rehabilitation exercises, modalities (such as heat or cold therapy, electrical stimulation, ultrasound, etc.), and patient education to achieve these goals.</strong></h6>\r\n<h6><strong>In addition to treating specific conditions, physiotherapists also play a significant role in injury prevention, health promotion, and overall physical fitness. They work in various healthcare settings, including hospitals, clinics, rehabilitation centers, sports medicine facilities, and private practices.</strong></h6>\r\n<h6><strong>To become a physiotherapist, individuals typically complete a bachelor\'s or master\'s degree in physiotherapy or physical therapy. They also undergo supervised clinical practice and may pursue additional specialization or certifications in specific areas of physiotherapy.</strong></h6>\r\n<h6><strong>Physiotherapists work as part of a multidisciplinary healthcare team, collaborating with physicians, surgeons, nurses, occupational therapists, and other healthcare professionals to provide comprehensive care for their patients.</strong></h6>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"flex justify-between lg:block\">\r\n<div class=\"text-gray-400 flex self-end lg:self-center justify-center mt-2 gap-2 md:gap-3 lg:gap-1 lg:absolute lg:top-0 lg:translate-x-full lg:right-0 lg:mt-0 lg:pl-2 visible\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<button class=\"cursor-pointer absolute right-6 bottom-[124px] md:bottom-[120px] z-10 rounded-full border border-gray-200 bg-gray-50 text-gray-600 dark:border-white/10 dark:bg-white/10 dark:text-gray-200\"></button></div>\r\n</div>\r\n</div>', 1, '2023-06-05 03:43:21', '2023-07-24 20:26:11'),
(7, 'Doctors', 'services/services_main_image-351276908.png', 'services/services_banner_image-962613361.png', 'services/services_details_image-164781616.jpg', 'services/services_details_image-481991482.jpg', 'services/services_details_image-2074537218.webp', 1, '<p><strong>Shebaralohealth </strong>Doctors service is a doctor visit service at home and video call on demand would not be wrong. In-home doctor service is a service when the doctor visits you at home when you are unable to or prefer not to visit a doctor personally. To provide convenience and quality medical care from professionals from your area is the sole intention of Shebaralohealth.<strong>&nbsp;</strong>Shebaralohealth&nbsp;was established with the motive of providing Dhaka city mainly.</p>', '<h3>How can we help you?</h3>\r\n<p>With the advent of technology, Sebaralohealth medical treatments have seen a lot of improvement. So did convenience in every field. Today you no longer have to visit a clinic when it is not possible, but the doctor comes to your house for your service. Shebaralohealth Doctors Service has tie-ups with the best of the best doctors, health professionals in all fields. No matter which location you are at, we have an association with highly experienced doctors all around Dhaka city . Our services are known for the value of money. In-home doctors are much more affordable than regular hospital charges..</p>', '<div class=\"row content-area-1\">\r\n<div id=\"cards\" class=\"col-lg-8 pl-0\">\r\n<div id=\"1204\" class=\"card\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col paragraph-area\">\r\n<div class=\"row\">\r\n<div class=\"col-sm-10 col-8 d-flex align-items-center pl-0\">&nbsp;</div>\r\n</div>\r\n<div class=\"row\">\r\n<div class=\"col paragraph-area\">\r\n<h3>No more waiting in Doctor&rsquo;s chamber</h3>\r\n<p>First of all, waiting for your appointment number to come up at the doctor&rsquo;s chamber takes hours and hours. There is usually a large crowd most of the time. Additionally, there is a possibility of widespread germ infections. You are 100% exposed to bacteria and other diseases around, Especially kids and elderly people are prone to catching the germs and viruses. Age does not matter. It gets more difficult to cure when you are surrounded by unhealthy bacterias. Instead, house call doctor service is a safer option. Home treatments are more comfortable than anything.</p>\r\n<h3>Reasonable rate for quality in-Sebaralohealth Care</h3>\r\n<p>During an emergency, instead of rushing to a doctor, just a call could save you ambulance fees and other costs. It saves you money, at the same time in-Shebaralohealth Doctors service provides you with enough attention and better care. You get the care you deserve at home at an affordable rate. It saves time and available all the time It is undeniable that Shebaralohealth doctor service saves an ample amount of time. From battling with traffic to waiting for the doctor, all this can be solved just with a call. Be it waiting or the traffic, none of them is pleasant anyway. Most importantly, home Doctors service is available when doctors are not. For example, no doctor is likely to be present during the holidays, You can get your service on weekends, holidays whenever you need it.</p>\r\n<h2>Personalized attention</h2>\r\n<p>The doctor\'s home visit in Dhaka has become quite common to the people today. One of the greatest advantages is that it is one to one affair. The doctor can give you undivided attention. This will result in a better understanding of the patient&rsquo;s nature and better care. Personalized care will help the patient to recover in a shorter time than usual.</p>\r\n<div class=\"row\">\r\n<div class=\"col-sm-10 col-8 d-flex align-items-center pl-0\">\r\n<h3>Why Choose Shebaralohealth&nbsp; for Home Doctor service?</h3>\r\n</div>\r\n</div>\r\n<div class=\"row\">\r\n<div class=\"col paragraph-area\">\r\n<p>We are glad to serve you with the best doctors available near you in the comfort of your own homes. Our mission is to provide reliable, timely services for those in need. All of our doctors are a licenced and experienced practitioners who are polite and truly care for making a difference. Do not hesitate to call us if you are in need of the right treatment at home. We follow ethics to achieve our objectives of providing the very best at-home doctor service in Dhaka&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '<div class=\"flex-1 overflow-hidden\">\r\n<div class=\"react-scroll-to-bottom--css-zgojd-79elbk h-full dark:bg-gray-800\">\r\n<div class=\"react-scroll-to-bottom--css-zgojd-1n7m0yu\">\r\n<div class=\"flex flex-col text-sm dark:bg-gray-800\">\r\n<div class=\"group w-full text-gray-800 dark:text-gray-100 border-b border-black/10 dark:border-gray-900/50 bg-gray-50 dark:bg-[#444654]\">\r\n<div class=\"flex p-4 gap-4 text-base md:gap-6 md:max-w-2xl lg:max-w-[38rem] xl:max-w-3xl md:py-6 lg:px-0 m-auto\">\r\n<div class=\"relative flex w-[calc(100%-50px)] flex-col gap-1 md:gap-3 lg:w-[calc(100%-115px)]\">\r\n<div class=\"flex flex-grow flex-col gap-3\">\r\n<div class=\"min-h-[20px] flex items-start overflow-x-auto whitespace-pre-wrap break-words flex-col gap-4\">\r\n<div class=\"markdown prose w-full break-words dark:prose-invert light\">\r\n<p>&nbsp;</p>\r\n<ol>\r\n<li>\r\n<p>\"Comprehensive Care Wherever You Are: Doctor Home Service and Video Call Consultations for Your Well-being\"</p>\r\n<ul>\r\n<li>Our Doctor Home Service and Video Call Consultations offer comprehensive care options designed to meet your healthcare needs.</li>\r\n<li>Our dedicated team of doctors provides personalized care in the comfort and privacy of your home or through secure video calls.</li>\r\n<li>From routine check-ups to acute illnesses and chronic conditions, our doctors deliver high-quality healthcare services with compassion and expertise.</li>\r\n<li>Experience the convenience of receiving medical attention that fits your schedule and location, ensuring optimal well-being and peace of mind.</li>\r\n</ul>\r\n</li>\r\n</ol>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"flex justify-between lg:block\">\r\n<div class=\"text-gray-400 flex self-end lg:self-center justify-center mt-2 gap-2 md:gap-3 lg:gap-1 lg:absolute lg:top-0 lg:translate-x-full lg:right-0 lg:mt-0 lg:pl-2 visible\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 1, '2023-06-19 02:18:55', '2023-07-24 20:41:18'),
(8, 'Nursing', 'services/services_main_image-65049669.png', 'services/services_banner_image-1375903923.jpg', 'services/services_details_image-1774058392.jpg', 'services/services_details_image-796966151.jpg', 'services/services_details_image-440601014.jpg', 1, '<p>Need a Nursing Care at home? Then you are in the right place. Does your loved one need assistance for recovery or you are looking for a home patient care attendant for elder citizens? You need someone to support, care for, during those tough times. Professional nursing care service from <strong>Shebaralohealth</strong> allows your loved ones to lead a healthy life within the comfortable walls of the home. Dhaka city</p>', '<h4>How Do Shebaralohealth Nurse Help You?</h4>\r\n<p>We are Shebaralohealth, Our professional Nurse take care of recovering patients, elderly people, people with disabilities and anyone who needs it. Nurse are trained to handle everything from grooming to companionship.patients need not only medication and treatment, but they also need caring companionship, trusted relationship. Otherwise, when there is no one around, they tend to get depressed. That is why they need emotional support along with proper health care. Our nurse are caring, trained to handle various challenges. Sebaralohealth&nbsp;</p>', '<h3>When Do You Need Us?</h3>\r\n<p>Shebaralohealth,Taking care of a person all by yourself is not always possible. Do you often feel frustrated by handling all the household chores and taking care of your loved ones? Do you find yourself exhausted all the time and have no time for yourself? We understand you want to give the best care to your loved one yet there are barriers and boundaries. What if you could give them the care they deserve still have time for your work? It is possible when you hand over the responsibility to someone you can rely on, someone who will take care when you can not. So when you feel it&rsquo;s time to take a break, let our nurse take responsibility. Shebaralohealth</p>\r\n<p>&nbsp;</p>', '<h3>Why Shebaralohealth for nursing care at home?</h3>\r\n<p>Our Nurse take care of day to day needs. They may seem simple but they help the patient a great deal. Anyone who is recovering post-surgery, dealing with immobility, medical issues can benefit a great deal from a home care nurse. &nbsp;&nbsp;<br>If needed they remind the patient to take medication on time.&nbsp;<br>Our care assistants monitor all the activities and keep track of the progress.&nbsp;<br>Shebaralohealth\'s nurse provide companionship to the patient and help him/her to recover faster by offering mental support.&nbsp;<br>Whether you want a short term package or a long term service, Shebaralohealth crafts the perfect personalized plan for you. We provide the right nurse with flexibility.</p>', 1, '2023-06-05 04:18:53', '2023-07-24 21:00:12'),
(9, 'Elder Care & Care Givers', 'services/services_main_image-1107300080.png', 'services/services_banner_image-1137685759.jpg', 'services/services_details_image-1579466230.jpg', 'services/services_details_image-2093970382.jpg', 'services/services_details_image-1962560157.jpg', 1, '<p>Shebaralohealth,has started providing Elder Care &amp; Care Givers services in Dhaka for vulnerable patients who need support. This problem often goes unrecognized but patient &nbsp;Elder Care &amp; Care Givers service in Dhaka can make a difference for vulnerable patients. That is why Shebaralohealth care offers Elder Care &amp; Care Givers service in Dhaka for both emergency and non-emergency cases.&nbsp;</p>', '<h2 id=\"mntl-sc-block_1-0\" class=\"comp mntl-sc-block finance-sc-block-heading mntl-sc-block-heading\"><span class=\"mntl-sc-block-heading__text\">What Is Elder care &amp; Care Givers?</span></h2>\r\n<p>Shebar Alo Health Elder care refers to the support and assistance provided to older adults who may require help with daily activities or have specific medical needs. It encompasses a range of services and support systems designed to promote the well-being and quality of life of older individuals. Elder care can be provided in various settings, including the individual\'s own home, assisted living facilities, nursing homes, or specialized care centers.</p>\r\n<p>Shebar Alo Health Caregivers, also known as care providers or care aides, are individuals who provide assistance and support to older adults in need. They can be professional caregivers or family members who take on the responsibility of caring for their elderly loved ones. Caregivers perform a wide range of tasks depending on the needs of the individual receiving care. These tasks may include personal care, such as bathing, dressing, and grooming, as well as assistance with household chores, meal preparation, medication management, transportation, and companionship.</p>\r\n<p>Caregivers play a vital role in supporting the physical, emotional, and social well-being of older adults. They often develop close relationships with the individuals they care for and provide essential companionship and emotional support. Caregiving can be demanding and challenging, requiring patience, empathy, and a variety of skills to address the unique needs of each individual. It is important for caregivers to take care of their own well-being and seek support when needed to prevent burnout and maintain their own health and quality of life. Shebar Alo Health</p>', '<h2 id=\"mntl-sc-block_1-0-5\" class=\"comp mntl-sc-block finance-sc-block-heading mntl-sc-block-heading\"><span class=\"mntl-sc-block-heading__text\">How Elder care &amp; Care Giver Works?</span></h2>\r\n<p>Sebar Alo Health Elder Care &amp; Care Givers</p>\r\n<p>1. Assessment: The elder care process often begins with an assessment of the older adult\'s needs. This can be done by a healthcare professional, such as a doctor or a geriatric care manager, who evaluates the individual\'s physical, cognitive, and emotional health. The assessment helps determine the level of care required and the appropriate care setting.</p>\r\n<p>2. Care Plan: Based on the assessment, a care plan is developed. This plan outlines the specific services and support the older adult requires. It may include assistance with activities of daily living (ADLs) like bathing, dressing, eating, toileting, and mobility. Additionally, it may address medication management, medical appointments, emotional support, and social engagement.</p>\r\n<p>3. Care Setting: Elder care can be provided in various settings, depending on the individual\'s needs and preferences. Options include:</p>\r\n<p>&nbsp; &nbsp;- In-home care: Caregivers visit the individual\'s home to provide assistance and support with daily activities. This allows the older adult to remain in familiar surroundings.<br>&nbsp; &nbsp;<br>&nbsp; &nbsp;- Assisted living facilities: These are residential communities that offer housing, meals, and assistance with daily activities. They provide a balance between independence and support.<br>&nbsp; &nbsp;<br>&nbsp; &nbsp;- Nursing homes: These facilities provide comprehensive care for individuals with more complex medical needs or who require round-the-clock assistance and supervision.<br>&nbsp; &nbsp;<br>&nbsp; &nbsp;- Memory care centers: Specialized care settings for individuals with dementia or Alzheimer\'s disease, offering tailored support and safety measures.</p>\r\n<p>4. Caregiver Responsibilities: Caregivers play a critical role in elder care. Their responsibilities may include:</p>\r\n<p>&nbsp; &nbsp;- Personal care: Assisting with bathing, dressing, grooming, and toileting.<br>&nbsp; &nbsp;<br>&nbsp; &nbsp;- Medication management: Ensuring the older adult takes the correct medications at the prescribed times.<br>&nbsp; &nbsp;<br>&nbsp; &nbsp;- Meal preparation: Planning and cooking nutritious meals according to dietary needs.<br>&nbsp; &nbsp;<br>&nbsp; &nbsp;- Household tasks: Assisting with light housekeeping, laundry, and maintaining a clean and safe environment.<br>&nbsp; &nbsp;<br>&nbsp; &nbsp;- Transportation: Helping the individual get to medical appointments, social outings, or running errands.<br>&nbsp; &nbsp;<br>&nbsp; &nbsp;- Companionship: Engaging in conversation, providing emotional support, and participating in recreational activities.</p>\r\n<p>5. Support and Coordination: Caregivers often collaborate with other healthcare professionals involved in the elder care process. This can include doctors, nurses, therapists, and social workers. They may also liaise with family members to keep them updated on the older adult\'s condition and discuss any necessary adjustments to the care plan.</p>\r\n<p>6. Self-care for Caregivers: Caregiving can be physically and emotionally demanding. It is crucial for caregivers to prioritize their own well-being and seek support when needed. This may involve taking breaks, practicing self-care activities, seeking respite care to allow for temporary relief, and connecting with support groups or counseling services for caregivers.</p>\r\n<p>Remember that the specific details and arrangements of elder care and caregiving can vary widely based on individual circumstances, preferences, and available resources. It is important to consult with healthcare professionals and explore available options to create a tailored plan that meets the unique needs of the older adult requiring care.</p>\r\n<div id=\"mntl-sc-block_1-0-7\" class=\"comp mntl-sc-block mntl-sc-block-adslot mntl-block\"></div>\r\n<div id=\"mntl-sc-block_1-0-9\" class=\"comp mntl-sc-block mntl-sc-block-adslot mntl-block\"></div>', '<h2 id=\"mntl-sc-block_1-0-23\" class=\"comp mntl-sc-block finance-sc-block-heading mntl-sc-block-heading\">What are the benefits of Shebaralo Health Elder Care &amp; Care Giver Service?</h2>\r\n<p>SebarAloHealth Elder care and caregiver services provide numerous benefits for older adults and their families. Some of the key benefits include:</p>\r\n<p>1. Personalized Care: Elder care services are tailored to meet the specific needs of each individual. Caregivers work closely with the older adult and their family to develop a care plan that addresses their unique requirements, ensuring that they receive personalized attention and support.</p>\r\n<p>2. Assistance with Daily Activities: Caregivers help older adults with activities of daily living (ADLs), such as bathing, dressing, grooming, and eating. This assistance enables older adults to maintain their independence and dignity while ensuring their safety and well-being.</p>\r\n<p>3. Medication Management: Caregivers assist with medication management, ensuring that older adults take their prescribed medications at the correct times. This helps prevent medication errors, promotes adherence to treatment plans, and reduces the risk of potential complications.</p>\r\n<p>4. Companionship and Emotional Support: Caregivers provide companionship and emotional support to older adults. They engage in conversation, participate in activities together, and offer a listening ear. This social interaction helps combat feelings of loneliness and isolation, promoting mental and emotional well-being.</p>\r\n<p>5. Safety and Supervision: Caregivers can provide a higher level of supervision and safety for older adults, particularly those with mobility issues or cognitive impairments. They help prevent accidents, respond to emergencies, and ensure that the living environment is safe and secure.</p>\r\n<p>6. Peace of Mind for Families: Elder care services provide peace of mind to family members who may not be able to provide full-time care themselves. Knowing that their loved ones are receiving professional support and assistance allows family members to focus on their own responsibilities and alleviates the worry and stress associated with caregiving.</p>\r\n<p>7. Respite Care: Caregivers can offer respite care, providing temporary relief to family caregivers who need a break or time for self-care. Respite care allows family members to recharge, attend to personal needs, and reduce the risk of caregiver burnout.</p>\r\n<p>8. Coordination of Care: Caregivers often collaborate with other healthcare professionals, including doctors, nurses, and therapists, to ensure coordinated and comprehensive care for older adults. They can help manage medical appointments, communicate health updates, and facilitate the implementation of treatment plans.</p>\r\n<p>9. Aging in Place: Elder care services, such as in-home care, allow older adults to age in place, meaning they can remain in the comfort of their own homes while receiving the necessary support and assistance. This promotes a sense of familiarity and continuity, which can positively impact the overall well-being of older adults.</p>\r\n<p>10. Enhanced Quality of Life: By providing assistance, support, and companionship, elder care and caregiver services contribute to an improved quality of life for older adults. They enable older individuals to maintain independence, engage in meaningful activities, and enjoy their lives to the fullest extent possible.</p>', 1, '2023-06-05 03:49:24', '2023-07-24 20:53:43'),
(10, 'Exercise & body stretching', 'services/services_main_image-1800193251.png', 'services/services_banner_image-444316747.jpg', 'services/services_details_image-1549507244.jpg', 'services/services_details_image-2126835515.jpg', 'services/services_details_image-1419409618.jpg', 1, '<p>Sebaralohealth Exercise &amp; body stretching help improve overall physical fitness. They enhance strength, flexibility, and endurance, making everyday activities easier to perform. Exercise can also help maintain a healthy weight and reduce the risk of chronic conditions such as heart disease, diabetes, and obesity. Service Area Dhaka City</p>', '<div class=\"flex-shrink-0 flex flex-col relative items-end\">\r\n<div class=\"w-[30px]\">&nbsp;</div>\r\n</div>\r\n<div class=\"relative flex w-[calc(100%-50px)] flex-col gap-1 md:gap-3 lg:w-[calc(100%-115px)]\">\r\n<div class=\"flex flex-grow flex-col gap-3\">\r\n<div class=\"min-h-[20px] flex items-start overflow-x-auto whitespace-pre-wrap break-words flex-col gap-4\">\r\n<h3 class=\"empty:hidden\"><strong>what is Shebaralohealth Exercise &amp; body stretching?</strong></h3>\r\n</div>\r\n</div>\r\n</div>\r\n<p>Body stretching, on the other hand, specifically focuses on improving flexibility and increasing the range of motion in the joints and muscles. Stretching exercises involve elongating the muscles and tendons to improve their flexibility and prevent muscle tightness or stiffness. Stretching can be done as a standalone activity or as part of a warm-up or cool-down routine before or after exercise.</p>\r\n<p>There are different types of stretching techniques:</p>\r\n<p>1. Static Stretching: This involves holding a stretch in a comfortable position for a certain duration, typically around 15-60 seconds. It helps improve flexibility and is commonly performed after exercise or physical activity.</p>\r\n<p>2. Dynamic Stretching: Dynamic stretching involves moving parts of your body through a full range of motion in a controlled and deliberate manner. It is often done as part of a warm-up routine before engaging in physical activity. Dynamic stretching helps prepare the body for exercise and can improve muscular performance.</p>\r\n<p>3. PNF Stretching: Proprioceptive Neuromuscular Facilitation (PNF) stretching involves a combination of stretching and contracting muscle groups. It often requires a partner or a trained professional. PNF stretching can help improve flexibility and increase the range of motion by targeting specific muscle groups.</p>\r\n<p>4. Ballistic Stretching: Ballistic stretching involves using momentum and bouncing movements to push muscles beyond their normal range of motion. This type of stretching is less common and may carry a higher risk of injury, so it is generally not recommended for the average person.</p>\r\n<p>Both exercise and body stretching are essential for maintaining a healthy and functional body. Regular exercise helps improve cardiovascular fitness, muscular strength, endurance, and overall physical health. It can also help manage weight, reduce the risk of chronic diseases, and enhance mental well-being. Stretching, on the other hand, promotes flexibility, improves posture, reduces muscle tension, and enhances range of motion. It is particularly beneficial for activities that require a greater range of motion or for preventing injuries related to muscle tightness.</p>\r\n<p>It\'s important to note that when starting an exercise or stretching routine, it is recommended to start slowly, listen to your body, and gradually increase intensity and duration over time. It\'s also important to use proper form and technique to prevent injuries. Consulting with a healthcare professional or a qualified fitness instructor can provide guidance on suitable exercises and stretching techniques based on your individual needs and goals.</p>', '<h3><strong>Shebaralohealth Exercise &amp; body stretching benefit?</strong></h3>\r\n<p>1. Physical Fitness: Regular exercise and stretching help improve overall physical fitness. They enhance strength, flexibility, and endurance, making everyday activities easier to perform. Exercise can also help maintain a healthy weight and reduce the risk of chronic conditions such as heart disease, diabetes, and obesity.</p>\r\n<p>2. Muscle Strength and Tone: Exercise, including resistance training, helps build and maintain muscle strength. Strengthening muscles can improve balance, stability, and posture, reducing the risk of falls and injuries. It also enhances muscle tone, giving the body a more defined and sculpted appearance.</p>\r\n<p>3. Flexibility and Range of Motion: Stretching exercises improve flexibility and range of motion in the joints. This can enhance mobility, make movements smoother, and reduce stiffness and discomfort. Improved flexibility can also contribute to better posture and a decreased risk of muscle imbalances and related injuries.</p>\r\n<p>4. Bone Health: Weight-bearing exercises, such as walking, jogging, and weightlifting, promote bone health and reduce the risk of osteoporosis. These exercises help increase bone density, strengthen bones, and improve overall bone health, particularly important for older adults.</p>\r\n<p>5. Cardiovascular Health: Aerobic exercises, such as brisk walking, running, swimming, or cycling, benefit cardiovascular health. They increase heart rate, improve blood circulation, and strengthen the heart and lungs. Regular cardio exercise can reduce the risk of heart disease, lower blood pressure, and improve overall cardiovascular fitness.</p>\r\n<p>6. Energy and Endurance: Engaging in regular physical activity and stretching can boost energy levels and improve endurance. It increases the delivery of oxygen and nutrients to the body\'s tissues, enhancing stamina and reducing feelings of fatigue.</p>\r\n<p>7. Mental Health and Well-being: Exercise and stretching have positive effects on mental health. Physical activity stimulates the release of endorphins, which are natural mood-boosting chemicals. Regular exercise can reduce symptoms of anxiety, depression, and stress, promoting overall mental well-being. It can also improve cognitive function and memory.</p>\r\n<p>8. Sleep Quality: Regular exercise has been linked to improved sleep quality. Physical activity helps regulate sleep patterns, promotes relaxation, and reduces insomnia symptoms. However, it\'s important to avoid intense exercise close to bedtime, as it may have a stimulating effect on some individuals.</p>\r\n<p>9. Disease Prevention: Regular exercise is associated with a reduced risk of various chronic diseases, including heart disease, type 2 diabetes, certain types of cancer, and cognitive decline. It can also help manage and control existing health conditions, such as arthritis, high blood pressure, and chronic pain.</p>\r\n<p>10. Improved Overall Quality of Life: Engaging in exercise and stretching routines can lead to an improved overall quality of life. The physical and mental benefits contribute to increased vitality, self-confidence, and a greater sense of well-being. Exercise can also provide opportunities for social interaction and community engagement, enhancing social connections and support.</p>', '<h3>Why Sebaralohealth Exercise &amp; body stretching service?</h3>\r\n<p>We are glad to serve you with the best Exercise &amp; body stretching available near you in the comfort of your own homes. Our mission is to provide reliable, timely services for those in need. All of Sebaralohealth Exercise &amp; body stretching are a licenced and experienced practitioners who are polite and truly care for making a difference. Do not hesitate to call us if you are in need of the right treatment at home. We follow ethics to achieve our objectives of providing the very best Exercise &amp; body stretching service in Dhaka for our patients. Sebaralohealth.com</p>', 1, '2023-06-05 03:57:23', '2023-07-24 21:17:18'),
(11, 'Massage therapy', 'services/services_main_image-74021775.png', 'services/services_banner_image-190113879.jpg', 'services/services_details_image-1674707325.jpg', 'services/services_details_image-608695658.jpg', 'services/services_details_image-1536788611.jpg', 1, '<p>Sebaralohealth Massage therapy helps reduce stress by promoting relaxation and providing a calming effect on the body. It can help lower levels of stress hormones&nbsp; Massage therapy can effectively relieve pain, whether it\'s chronic pain from conditions like arthritis or acute pain from injuries or muscle tension. Massage helps relax muscles, release tension, and improve circulation, which can alleviate pain and promote healing.</p>', '<h3><strong>what is Sebaralohealth massge Therapy?</strong></h3>\r\n<p>Massage therapy is a form of hands-on treatment that involves manipulating the soft tissues of the body to promote relaxation, relieve tension, and improve overall well-being. It is a therapeutic technique that has been practiced for centuries and is commonly used to address physical and mental health concerns.</p>\r\n<p>During a massage therapy session, a trained and licensed massage therapist applies various techniques to the body\'s muscles, connective tissues, tendons, and ligaments. These techniques can include kneading, rubbing, pressing, and manipulating the soft tissues using their hands, fingers, elbows, forearms, or specialized tools.</p>\r\n<p>Massage therapy can be performed on a massage table or chair, and the client is typically undressed or partially clothed and covered with a sheet or towel for privacy and comfort. The therapist may use oils, lotions, or creams to facilitate smooth movement over the skin and enhance the therapeutic effects of the massage.</p>\r\n<p>1. Swedish Massage: This is the most common and widely known form of massage therapy. It involves long, flowing strokes, kneading, and circular movements to promote relaxation, improve circulation, and relieve muscle tension.</p>\r\n<p>2. Deep Tissue Massage: This technique focuses on targeting deeper layers of muscles and connective tissues to address chronic muscle tension, knots, and areas of pain or stiffness. It involves more intense pressure and slower strokes.</p>\r\n<p>3. Sports Massage: Sports massage is designed specifically for athletes and individuals engaged in physical activity. It helps prevent and treat sports-related injuries, improve performance, and promote faster recovery by addressing muscle soreness, flexibility, and range of motion.</p>\r\n<p>4. Trigger Point Therapy: This technique focuses on identifying and targeting trigger points, which are tight knots of muscle fibers that can cause pain and discomfort. Pressure is applied to these points to release tension and alleviate pain.</p>\r\n<p>5. Hot Stone Massage: Hot stones are placed on specific areas of the body to provide heat and promote relaxation. The therapist may also use the stones to apply gentle pressure and perform massage techniques.</p>\r\n<p>6. Thai Massage: Thai massage is an ancient practice that combines acupressure, stretching, and assisted yoga postures. The therapist uses their hands, feet, elbows, and knees to apply pressure and help the client achieve a deep state of relaxation and improved flexibility.</p>\r\n<p>Massage therapy offers a range of benefits, including stress relief, pain reduction, improved circulation, enhanced flexibility, and relaxation. It is often used as a complementary therapy alongside medical treatments or as a means of self-care and relaxation.</p>\r\n<p>&nbsp;</p>', '<h3><strong>Sebaralohealth massge therapy benefit?</strong></h3>\r\n<p>1. Stress Relief: Massage therapy helps reduce stress by promoting relaxation and providing a calming effect on the body. It can help lower levels of stress hormones like cortisol while increasing the production of endorphins, which are natural mood elevators.</p>\r\n<p>2. Pain Reduction: Massage therapy can effectively relieve pain, whether it\'s chronic pain from conditions like arthritis or acute pain from injuries or muscle tension. Massage helps relax muscles, release tension, and improve circulation, which can alleviate pain and promote healing.</p>\r\n<p>3. Muscle Relaxation: Massaging the muscles helps promote relaxation and reduces muscle tension and stiffness. It can be particularly beneficial for individuals who have sedentary lifestyles, experience muscle imbalances, or suffer from muscle tightness due to repetitive movements or poor posture.</p>\r\n<p>4. Improved Blood Circulation: Massage therapy improves blood circulation, which enhances the delivery of oxygen and nutrients to the tissues and organs. Improved circulation also aids in the removal of waste products and toxins from the body, promoting overall health and vitality.</p>\r\n<p>5. Enhanced Flexibility and Range of Motion: Regular massage therapy can improve flexibility and increase the range of motion in joints and muscles. It helps stretch and lengthen muscles, preventing adhesions and promoting optimal muscle function.</p>\r\n<p>6. Improved Sleep Quality: Massage therapy has been found to improve sleep quality by promoting relaxation and reducing stress. It can help individuals with insomnia or those who have difficulty falling asleep or staying asleep. Massage therapy promotes a state of relaxation that can lead to a more restful sleep.</p>\r\n<p>7. Boosted Immune System: Regular massage therapy can strengthen the immune system by reducing stress, increasing circulation, and stimulating the lymphatic system. A stronger immune system helps the body defend against illness and promotes overall well-being.</p>\r\n<p>8. Relief from Headaches and Migraines: Massage therapy can provide relief from tension headaches and migraines by reducing muscle tension and promoting relaxation. It can also help alleviate the associated stress and anxiety that often accompanies these conditions.</p>\r\n<p>9. Improved Mental Well-being: Massage therapy has a positive impact on mental health and emotional well-being. It can help reduce symptoms of anxiety and depression, improve mood, and promote a sense of overall relaxation and well-being.</p>\r\n<p>10. Rehabilitation and Injury Recovery: Massage therapy plays a significant role in the rehabilitation process and can aid in injury recovery. It helps reduce pain, improve circulation, and increase flexibility, assisting in the healing of injured muscles, ligaments, and tissues.</p>', '<h3>Why Choose Sebaralohealth Massage Therapy service?</h3>\r\n<p>We are glad to serve you with the best Expert Massagist available near you in the comfort of your own homes. Our mission is to provide reliable, timely services for those in need. All of Sebaralohealth Expert Massagist are a licenced and experienced practitioners who are polite and truly care for making a difference. Do not hesitate to call us if you are in need of the right treatment at home. We follow ethics to achieve our objectives of providing the very best Expert Massagist service in Dhaka for our patients. www.Sebaralohealth.com</p>', 1, '2023-06-05 04:04:25', '2023-07-24 21:28:09');
INSERT INTO `services` (`id`, `service_title`, `main_image`, `banner_image`, `details_image1`, `details_image2`, `details_image3`, `service_home`, `service_details_small`, `service_details1`, `service_details2`, `service_details3`, `status`, `created_at`, `updated_at`) VALUES
(12, 'Yoga', 'services/services_main_image-545143259.png', 'services/services_banner_image-2005436613.jpg', 'services/services_details_image-895319281.jpg', 'services/services_details_image-651009744.jpg', 'services/services_details_image-1914665008.jpg', 1, '<p>Sebaralohealth Yoga Improved Flexibility,Strength,Enhanced Balance and Coordination,Better Posture,Stress Reduction,Improved Mental Clarity and Focus,Increased Energy Levels,Better Sleep,Enhanced Respiratory Function,Weight Management,Lowered Blood Pressure,Improved Digestion,Boosted Immune System,Pain Relief,Enhanced Mind-Body Connection,Flexibility of Mind,Emotional Balance,</p>', '<h3><strong>what is ShebaralohealthYoga?</strong></h3>\r\n<p>Yoga is a holistic practice that originated in ancient India and has been passed down through generations. It is a system that encompasses physical postures, breathing exercises, meditation, ethical principles, and philosophical teachings. The word \"yoga\" is derived from the Sanskrit word \"yuj,\" which means to join or unite, reflecting its goal of integrating the body, mind, and spirit.</p>\r\n<p>At its core, yoga aims to promote overall well-being and harmony by cultivating physical strength, flexibility, mental clarity, emotional balance, and spiritual awareness. It is not solely a physical exercise but a way of life that emphasizes self-discipline, self-awareness, and self-transformation.</p>\r\n<p>In modern times, yoga has become widely popular and is practiced by people of various ages and fitness levels. Yoga classes typically involve a combination of physical postures (asanas), breath control techniques (pranayama), and meditation or relaxation exercises. These practices are often guided by a certified yoga instructor who provides instructions on proper alignment, breathing techniques, and assists students in their practice.</p>\r\n<p>The physical postures in yoga are designed to stretch, strengthen, and tone the muscles, improve flexibility and balance, and promote overall physical health. Each asana has specific benefits for different parts of the body, such as building core strength, improving spinal alignment, or opening the hips.</p>\r\n<p>Breathing exercises in yoga focus on conscious control of the breath. By regulating the breath, practitioners aim to calm the mind, reduce stress, and increase energy levels. Various techniques like deep belly breathing (diaphragmatic breathing), alternate nostril breathing, and breath retention may be practiced.</p>\r\n<p>Meditation and relaxation techniques are integral components of yoga. They involve focusing the mind, cultivating mindfulness, and achieving a state of deep relaxation and inner peace. Meditation can take different forms, including focusing on the breath, visualizations, or repetition of mantras or affirmations.</p>\r\n<p>Yoga philosophy encompasses ethical principles known as the Yamas and Niyamas, which guide practitioners in leading a balanced and virtuous life. These principles include concepts such as non-violence, truthfulness, self-discipline, contentment, and self-study.</p>\r\n<p>It\'s important to note that yoga is a personal practice, and individuals can tailor it to their needs and preferences. It is not a competitive activity, and practitioners are encouraged to honor their bodies\' limitations and practice with self-compassion and non-judgment.</p>\r\n<p>Yoga is widely recognized for its potential benefits, including physical fitness, stress reduction, increased flexibility, improved concentration, and overall well-being. It is advisable to consult with a qualified yoga instructor and inform them of any specific health concerns or limitations before beginning a yoga practice.</p>', '<h2>20 benefit Of Shebaralohealth yoga</h2>\r\n<p>1. Improved Flexibility: Yoga poses help stretch and lengthen muscles, gradually improving flexibility and range of motion.</p>\r\n<p>2. Increased Strength: Many yoga poses require strength and stability, which can lead to increased muscle strength and toning.</p>\r\n<p>3. Enhanced Balance and Coordination: Balancing poses in yoga can improve balance and coordination skills.</p>\r\n<p>4. Better Posture: Yoga helps promote proper alignment and posture, reducing the risk of musculoskeletal imbalances and related issues.</p>\r\n<p>5. Stress Reduction: Yoga incorporates relaxation techniques, deep breathing, and mindfulness, helping to reduce stress levels and promote relaxation.</p>\r\n<p>6. Improved Mental Clarity and Focus: The combination of movement, breathwork, and meditation in yoga can enhance mental clarity, concentration, and focus.</p>\r\n<p>7. Increased Energy Levels: Yoga practice can boost energy levels, reduce fatigue, and increase vitality.</p>\r\n<p>8. Better Sleep: The relaxation and stress-reducing benefits of yoga can contribute to improved sleep quality.</p>\r\n<p>9. Enhanced Respiratory Function: Yoga incorporates deep breathing exercises that can improve lung capacity and respiratory function.</p>\r\n<p>10. Weight Management: Regular yoga practice, combined with a healthy lifestyle, can aid in weight management and body awareness.</p>\r\n<p>11. Lowered Blood Pressure: Certain yoga practices, such as gentle asanas and relaxation techniques, may help reduce blood pressure levels.</p>\r\n<p>12. Improved Digestion: Specific yoga poses and twists can help stimulate digestion and improve overall digestive function.</p>\r\n<p>13. Boosted Immune System: Yoga practice can enhance immune function, supporting overall health and well-being.</p>\r\n<p>14. Pain Relief: Yoga may help alleviate chronic pain, such as back pain, joint pain, and muscle tension.</p>\r\n<p>15. Enhanced Mind-Body Connection: Yoga promotes awareness of the mind-body connection, fostering a sense of self-awareness and mindfulness.</p>\r\n<p>16. Increased Flexibility of Mind: Yoga teaches adaptability and the ability to embrace change, promoting mental flexibility.</p>\r\n<p>17. Emotional Balance: Yoga practice can help regulate emotions, reduce anxiety, and promote a sense of emotional well-being.</p>\r\n<p>18. Improved Circulation: Yoga poses and movements increase blood flow, improving circulation throughout the body.</p>\r\n<p>19. Increased Self-Confidence: Yoga cultivates self-acceptance, self-compassion, and a positive self-image, leading to increased self-confidence.</p>\r\n<p>20. Sense of Inner Peace: Regular yoga practice can foster a sense of inner peace, harmony, and overall well-being.</p>', '<h3>Why Choose Sebaralohealth Yoga ?</h3>\r\n<p>We are glad to serve you with the best Expert Yoga Teacher available near you in the comfort of your own homes. Our mission is to provide reliable, timely services for those in need. All of Sebaralohealth best Expert Yoga Teacher are a licenced and experienced practitioners who are polite and truly care for making a difference. Do not hesitate to call us if you are in need of the right treatment at home. We follow ethics to achieve our objectives of providing the very best Expert Yoga Teacher service in Dhaka for our patients.</p>', 1, '2023-06-05 04:10:14', '2023-07-24 21:34:40'),
(14, 'hijama/Cupping therapy', 'services/services_main_image-228845596.png', 'services/services_banner_image-251220945.jpg', 'services/services_details_image-1080605407.jpg', 'services/services_details_image-1210334609.jpg', 'services/services_details_image-1278669938.jpg', 1, '<p><strong>hijama/Cupping therapy</strong> is often used to address various conditions such as muscle soreness, back and neck pain, migraines, respiratory issues, and even anxiety. It is thought to improve circulation, reduce inflammation, and release toxins from the body. However, scientific evidence supporting the specific benefits of cupping therapy is limited, and more research is needed to fully understand its effectiveness.</p>', '<div class=\"article-page active-page\" data-page=\"2\">\r\n<section>\r\n<ul>\r\n<li style=\"font-weight: bold;\">\r\n<h3>What is cupping therapy?</h3>\r\n</li>\r\n<li>\r\n<p>Shebaralohealth Cupping therapy is an alternative healing technique that has been practiced for centuries in various cultures, including traditional Chinese medicine, Middle Eastern medicine, and ancient Egyptian medicine. It involves placing cups, typically made of glass, bamboo, or silicone, on the skin to create suction.</p>\r\n<p>The process of Sebaralohealth cupping therapy typically involves the following steps:</p>\r\n<p>1. The practitioner heats the inside of the cup using a flame or other heating methods to create a vacuum effect.<br>2. The heated cup is then quickly placed on the skin, usually on specific points or areas of the body.<br>3. As the air inside the cup cools, it creates a vacuum, which causes the skin to rise and redden. This is known as the \"cupping mark.\"<br>4. The cups may be left in place for a few minutes or moved around the skin using various techniques, such as sliding or twisting.<br>5. After the desired duration, the cups are removed, and the area is often massaged or treated with ointments or essential oils.</p>\r\n<p>Cupping therapy is believed to promote healing and provide several potential benefits, although scientific evidence is limited. Some proposed benefits include:</p>\r\n<p>1. Improved blood circulation: Cupping is thought to increase blood flow to the treated area, which may aid in tissue repair and reduce inflammation.<br>2. Pain relief: Cupping therapy is often used to alleviate muscle and joint pain, including back pain, neck pain, and sports-related injuries.<br>3. Muscle relaxation: The suction and pressure applied through cupping may help relax tight muscles and relieve muscle tension.<br>4. Detoxification: Cupping is believed to help release toxins from the body by stimulating the lymphatic system.<br>5. Enhanced well-being: Many people report a sense of relaxation, improved energy flow, and overall well-being after cupping sessions. Shebaralohealth</p>\r\n<p>&nbsp;</p>\r\n</li>\r\n</ul>\r\n</section>\r\n</div>', '<h3><strong>How to treat cupping therapy</strong></h3>\r\n<p>If you\'re interested in trying cupping therapy, it\'s generally recommended to seek the assistance of a trained and licensed Shebaralohealthcare professional or a qualified cupping practitioner. They will have the necessary expertise to perform the therapy safely and effectively. Here are the general steps involved in Shebaralohealth cupping therapy treatment:</p>\r\n<p>1. Find a qualified practitioner: Look for a shebaralohealthcare professional or a cupping therapist who has received proper training and certification in cupping therapy. They should have experience and knowledge in performing the technique.</p>\r\n<p>2. Consultation and assessment: During your initial visit, the practitioner will discuss your medical history, any specific concerns or symptoms you have, and assess your overall health condition. This information helps them determine the appropriate cupping technique and treatment plan for you.</p>\r\n<p>3. Preparation: The practitioner will explain the cupping procedure and its potential benefits and risks. They may also provide instructions regarding any precautions or preparations you need to take before the session, such as avoiding certain medications or activities.</p>\r\n<p>4. Cupping session: The cupping therapy treatment will begin. The practitioner will apply cups to specific areas of your body, typically using a vacuum or suction method. The cups may be left in place for a few minutes or moved around the skin using different techniques, as determined by the practitioner.</p>\r\n<p>5. Cup removal and aftercare: Once the desired duration is reached, the cups are carefully removed. The resulting cupping marks on the skin may take several days to fade. The practitioner may offer post-treatment advice, such as avoiding exposure to cold temperatures, staying hydrated, and applying any recommended ointments or oils to the skin.</p>\r\n<p>It\'s important to communicate openly with the practitioner throughout the process, informing them of any discomfort or concerns you may experience during the treatment. They can adjust the intensity or technique as needed.</p>\r\n<p>Remember that cupping therapy may not be suitable for everyone, especially those with certain medical conditions, such as skin infections, bleeding disorders, or pregnancy. It\'s crucial to discuss your specific situation and any underlying health conditions with the practitioner beforehand to ensure cupping therapy is appropriate and safe for you.</p>', '<h3>Why Choose Sebaralohealth <strong>hijama/Cupping therapy</strong> ?</h3>\r\n<p>We are glad to serve you with the best Expert hijama/Cupping therapy available near you in the comfort of your own homes. Our mission is to provide reliable, timely services for those in need. All of Sebaralohealth best Expert hijama/Cupping therapy&nbsp;are a licenced and experienced practitioners who are polite and truly care for making a difference. Do not hesitate to call us if you are in need of the right treatment at home. We follow ethics to achieve our objectives of providing the very best Expert<strong> </strong>hijama/Cupping therapy service in Dhaka for our patients.</p>', 1, '2023-06-21 15:45:55', '2023-07-24 21:47:49'),
(15, 'Acupuncture & Acupressure', 'services/services_main_image-507616143.png', 'services/services_banner_image-183598233.jpg', 'services/services_details_image-73574730.jpg', 'services/services_details_image-97889434.png', 'services/services_details_image-45401292.jpg', 1, '<p>Shebaralohealth Acupuncture is an ancient Chinese medical practice that involves inserting thin needles into specific points on the body. It is based on the belief that these points, when stimulated, can help balance the flow of energy, known as Qi (pronounced \"chee\"), within the body. Here are some potential benefits associated with acupuncture:</p>', '<h2 class=\"section_heading\">What Is Acupuncture?</h2>\r\n<div class=\"section-content wysiwyg-content blue-bullets\">\r\n<p>Acupuncture is an ancient Chinese medical practice that involves inserting thin needles into specific points on the body. It is based on the belief that these points, when stimulated, can help balance the flow of energy, known as Qi (pronounced \"chee\"), within the body. Here are some potential benefits associated with acupuncture:</p>\r\n<p>1. Pain relief: Acupuncture is commonly used for pain management. It can help alleviate various types of pain, including headaches, migraines, back pain, neck pain, osteoarthritis, menstrual cramps, and postoperative pain. The insertion of needles is believed to stimulate the release of endorphins and activate the body\'s natural pain-relieving mechanisms.</p>\r\n<p>2. Stress reduction and relaxation: Acupuncture sessions can promote relaxation and reduce stress. The process of acupuncture may stimulate the release of neurotransmitters, such as serotonin and dopamine, which are associated with mood regulation.</p>\r\n<p>3. Improved sleep quality: Acupuncture has been reported to improve sleep patterns and help individuals with insomnia or sleep disturbances. By reducing stress and promoting relaxation, it may contribute to better sleep.</p>\r\n<p>4. Reduced nausea and vomiting: Acupuncture is known to be effective in alleviating nausea and vomiting associated with chemotherapy, pregnancy-related morning sickness, and postoperative nausea.</p>\r\n<p>5. Enhanced mental health: Some studies suggest that acupuncture can be beneficial for mental health conditions such as anxiety, depression, and post-traumatic stress disorder (PTSD). It is believed to help regulate the body\'s stress response and promote a sense of well-being.</p>\r\n<p>6. Allergy relief: Acupuncture has been explored as a complementary treatment for allergies, including seasonal allergies and allergic rhinitis. It may help alleviate symptoms such as nasal congestion, sneezing, and itching.</p>\r\n<p>It\'s important to note that while acupuncture has shown positive effects in various areas, scientific research is ongoing, and its efficacy is still being studied. The benefits of acupuncture can vary for each individual, and it may not be effective for everyone or for every condition.</p>\r\n<p>If you\'re considering acupuncture, it\'s advisable to consult with a licensed acupuncturist or a healthcare professional who is experienced in acupuncture techniques. They can assess your specific needs, provide personalized treatment, and ensure your safety throughout the process.</p>\r\n</div>', '<section id=\"what_happens_during_an_acupuncture_session_section\" class=\"article-section\">\r\n<h3><strong>How to treat acupuncture</strong></h3>\r\n<p>Acupuncture is a therapeutic practice that should be performed by a qualified and licensed acupuncturist. If you\'re seeking acupuncture treatment, here are the general steps involved:</p>\r\n<p>1. Research and find a qualified acupuncturist: Look for a licensed acupuncturist who has received proper training and certification. You can ask for recommendations from your healthcare provider, friends, or family members who have undergone acupuncture treatment. Verify their credentials and ensure they have experience in the specific area you require treatment for.</p>\r\n<p>2. Initial consultation: Schedule an initial consultation with the acupuncturist. During this visit, they will gather information about your medical history, current symptoms, and overall health. Be prepared to provide detailed information to help the acupuncturist understand your specific concerns.</p>\r\n<p>3. Assessment and treatment plan: Based on the information gathered during the consultation, the acupuncturist will assess your condition and develop a personalized treatment plan. They will identify the acupuncture points to be targeted and determine the frequency and duration of the treatment sessions.</p>\r\n<p>4. Acupuncture sessions: Attend your scheduled acupuncture sessions. The acupuncturist will insert thin, sterile needles into specific acupuncture points on your body. The needles are typically left in place for a specific duration, usually around 20 to 30 minutes. You may experience sensations such as tingling, warmth, or a dull ache during the treatment, but acupuncture is generally not considered painful.</p>\r\n<p>5. Follow-up and evaluation: After each session, communicate with the acupuncturist about your experience and any changes you\'ve noticed in your symptoms. They will monitor your progress and make any necessary adjustments to your treatment plan.</p>\r\n<p>6. Incorporate lifestyle recommendations: In addition to acupuncture, the acupuncturist may provide recommendations regarding diet, exercise, stress management, or other lifestyle factors that can support your overall well-being and treatment outcomes.</p>\r\n<p>It\'s important to note that the specific details of your acupuncture treatment may vary based on your condition and the acupuncturist\'s approach. The acupuncturist will explain the process, address any concerns you may have, and ensure your comfort and safety throughout the treatment.</p>\r\n<p>Always follow the guidance of a qualified acupuncturist and consult with your primary healthcare provider if you have any underlying medical conditions or are currently undergoing other forms of treatment.</p>\r\n</section>', '<h3>Why Choose Sebaralohealth Acupuncture &amp; Acupressure &nbsp;?</h3>\r\n<p>We are glad to serve you with the best Expert Acupuncture &amp; Acupressure available near you in the comfort of your own homes. Our mission is to provide reliable, timely services for those in need. All of Sebaralohealth best Expert Acupuncture &amp; Acupressure therapy are a licenced and experienced practitioners who are polite and truly care for making a difference. Do not hesitate to call us if you are in need of the right treatment at home. We follow ethics to achieve our objectives of providing the very best Expert Acupuncture &amp; Acupressure service in Dhaka for our patients.</p>', 1, '2023-06-21 15:50:12', '2023-07-24 21:42:53');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `linkedIn` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1= active, 0= deactive',
  `add_home` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `designation`, `email`, `facebook`, `instagram`, `linkedIn`, `youtube`, `image`, `service_id`, `status`, `add_home`, `created_at`, `updated_at`) VALUES
(1, 'DR.ABU SAYED YOSUF', 'CONSULTANT- Physiotherapy Department', NULL, 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/', 'https://www.youtube.com/', 'team/team-645689424.png', 3, 1, 1, '2023-05-31 01:43:52', '2024-01-18 09:47:27'),
(2, NULL, NULL, 'sebaralohealth@gmail.com', 'https://www.facebook.com/', NULL, 'https://www.linkedin.com/', NULL, 'team/team-2077458652.png', 3, 1, 1, '2023-05-31 01:46:13', '2024-01-18 12:44:06'),
(3, NULL, NULL, 'sebaralohealth@gmail.com', 'https://www.facebook.com/', 'https://www.instagram.com/', NULL, 'https://www.youtube.com/', 'team/team-2018089939.png', 3, 1, 1, '2023-05-31 01:47:26', '2024-01-18 12:45:33'),
(4, NULL, NULL, 'sebaralohealth@gmail.com', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/', 'https://www.youtube.com/', 'team/team-347494272.png', 3, 1, 1, '2023-05-31 02:13:21', '2024-01-18 12:51:07'),
(5, NULL, NULL, 'sebaralohealth@gmail.com', 'https://www.youtube.com/', 'https://www.instagram.com/', NULL, NULL, 'team/team-1732788130.png', 3, 1, 1, '2023-05-31 02:14:13', '2024-01-27 04:02:40'),
(6, NULL, NULL, 'sebaralohealth@gmail.com', NULL, NULL, NULL, NULL, 'team/team-731615517.png', 3, 1, 1, '2023-05-31 02:14:36', '2024-01-27 04:00:59'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'team/team-940830545.png', 3, 0, 1, '2023-05-31 02:14:57', '2023-07-24 17:30:04'),
(8, NULL, NULL, 'sebaralohealth@gmail.com', NULL, NULL, NULL, NULL, 'team/team-474635619.png', NULL, 0, 0, '2023-05-31 02:15:16', '2023-07-24 17:30:19');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `review` text DEFAULT NULL,
  `star` int(11) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1= active, 0= deactive',
  `add_home` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `designation`, `review`, `star`, `image`, `status`, `add_home`, `created_at`, `updated_at`) VALUES
(1, 'Protect Your Health with Our Comprehensive Health Package', NULL, NULL, 0, 'testimonial/testimonial-104128750.jpg', 0, 0, '2023-05-31 03:36:11', '2023-07-10 19:27:25'),
(2, 'm kayser', 'Managing Director quality feeds', '<div style=\"mso-element: para-border-div; border: solid #D9D9E3 1.0pt; mso-border-alt: solid #D9D9E3 .25pt; padding: 0in 0in 0in 5.0pt; margin-left: -.25in; margin-right: 0in;\">\r\n<p class=\"MsoNormal\" style=\"text-indent: -.25in; line-height: normal; mso-list: l0 level1 lfo1; tab-stops: list .5in; border: none; mso-border-alt: solid #D9D9E3 .25pt; padding: 0in; mso-padding-alt: 0in 0in 0in 5.0pt; margin: 0in 0in .0001pt .25in;\"><!-- [if !supportLists]--><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\">\"Shebaralohealth\'s range of herbal teas is a game-changer! The blends are not only delicious but also thoughtfully crafted to address specific health concerns. Whether I need an energy boost, stress relief, or improved sleep, Shebaralohealth has the perfect tea for every occasion. I\'m hooked!\"</span></p>\r\n</div>', 5, 'testimonial/testimonial-1028321571.jpg', 1, 1, '2023-05-31 03:37:24', '2023-07-08 19:54:22'),
(3, 'Nuruddin dewan', 'Managing Director Unicom textile mill ltd', '<div style=\"mso-element: para-border-div; border: solid #D9D9E3 1.0pt; mso-border-alt: solid #D9D9E3 .25pt; padding: 0in 0in 0in 5.0pt; margin-left: -.25in; margin-right: 0in;\">\r\n<p class=\"MsoNormal\" style=\"text-indent: -.25in; line-height: normal; mso-list: l0 level1 lfo1; tab-stops: list .5in; border: none; mso-border-alt: solid #D9D9E3 .25pt; padding: 0in; mso-padding-alt: 0in 0in 0in 5.0pt; margin: 0in 0in .0001pt .25in;\"><!-- [if !supportLists]--><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\">&nbsp; &nbsp; &nbsp;</span></p>\r\n<p class=\"MsoNormal\">Shebaralohealth\'s elder care and caregiver services provided an invaluable lifeline for my loved one. The dedicated team of caregivers exhibited remarkable patience, compassion, and expertise in meeting the unique needs of elderly individuals. Their unwavering commitment to ensuring the well-being and dignity of my family&nbsp;</p>\r\n</div>', 5, 'testimonial/testimonial-613344656.jpg', 1, 1, '2023-05-31 03:37:58', '2023-07-09 08:09:42'),
(4, 'Syed mustaque Ahmed', 'Bkash,President moulvibazar Jila Samiti', '<p class=\"MsoNormal\">The exercise and body stretching programs at Shebaralohealth were a game-changer for my overall fitness and well-being. Under the guidance of experienced trainers, I was able to improve my flexibility, strength, and endurance. The tailored routines targeted specific areas of concern, and the trainers provided constant motivation and support. The results were evident as I felt more energized, confident, and capable of engaging in daily activities.</p>', 4, 'testimonial/testimonial-612929367.jpg', 1, 1, '2023-05-31 03:38:26', '2023-07-15 18:02:43'),
(5, 'Kaiser Kabir', 'CEO - Renata ltd', '<p><span style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">Shebaralohealth has truly transformed my wellness journey! From their comprehensive range of natural health products to their personalized consultations, I couldn\'t be happier with the level of care and support I have received. The team at Shebaralohealth is knowledgeable, compassionate, and dedicated to helping individuals achieve optimal health</span></p>', 5, 'testimonial/testimonial-601139397.jpg', 1, 1, '2023-05-31 03:38:55', '2023-07-08 19:53:18'),
(6, 'M Samsul hudha', 'Managing Director Greatwall Ceramic industry limited', '<p><span style=\"font-size: 12.0pt; line-height: 107%; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-ansi-language: EN-US; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\">\"I am so grateful to have discovered Shebaralohealth. Their commitment to sourcing high-quality ingredients for their products is remarkable. Every time I use their supplements or skincare items, I can feel the difference. Shebaralohealth has become an integral part of my daily routine, and I can confidently say that my overall well-being has improved significantly</span></p>', 4, 'testimonial/testimonial-1620498618.jpg', 1, 1, '2023-05-31 03:40:04', '2023-06-23 12:20:35'),
(7, 'Mir Sabbir', 'Actor', '<p>আমি মীর সাব্বির , আমার Back Pain&nbsp; হয়েছিল আমি সেবার আলো হেলথের ফিজিওথেরাপি নিয়ে ৭ দিনেই পুরোপুরি সুস্থ হয়েছি&nbsp; ধন্যবাদ Shebar Alo Health কে</p>', 5, 'testimonial/testimonial-578007668.jpg', 1, 1, '2023-06-22 11:56:53', '2023-06-22 11:56:53'),
(8, 'Monowar hossain', 'Chairman Anwar group', '<div style=\"mso-element: para-border-div; border: solid #D9D9E3 1.0pt; mso-border-alt: solid #D9D9E3 .25pt; padding: 0in 0in 0in 5.0pt; margin-left: -.25in; margin-right: 0in;\">\r\n<p class=\"MsoNormal\" style=\"text-indent: -.25in; line-height: normal; mso-list: l0 level1 lfo1; tab-stops: list .5in; border: none; mso-border-alt: solid #D9D9E3 .25pt; padding: 0in; mso-padding-alt: 0in 0in 0in 5.0pt; margin: 0in 0in .0001pt .25in;\"><!-- [if !supportLists]--><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\"><span style=\"mso-list: Ignore;\">1.<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><!--[endif]--><span style=\"font-size: 12.0pt; font-family: \'Times New Roman\',serif; mso-fareast-font-family: \'Times New Roman\';\">As someone who values sustainability, I am delighted to support Shebaralohealth. Their commitment to eco-friendly practices, such as using recyclable packaging and supporting ethical sourcing, sets them apart from other health companies. It\'s refreshing to find a brand that aligns with my values while offering effective and innovative health solutions.\"</span></p>\r\n</div>', 4, 'testimonial/testimonial-1386992147.png', 1, 1, '2023-06-22 15:00:52', '2023-07-08 19:55:50'),
(9, 'Mr. Morshed Alam', 'Mr. Morshed Alam Chairman  Bengal Group and Rtv', '<p>I had an amazing experience at Shebaralohealth physiotherapy. The staff was incredibly knowledgeable and friendly, and the therapy sessions were effective in relieving my pain. Highly recommended!\"</p>', 5, 'testimonial/testimonial-1191456701.jpg', 1, 1, '2023-06-28 11:23:56', '2023-06-28 11:23:56'),
(10, 'MR. MOHAMMED MOHSIN', 'Director  Phoenix Finance and Investments Limited', '<p>I can\'t thank Shebaralohealth physiotherapy enough for their exceptional service. The therapists were skilled and attentive, creating a personalized treatment plan that helped me recover quickly. I\'m grateful for their expertise.\"</p>', 4, 'testimonial/testimonial-1054939482.jpg', 1, 1, '2023-06-28 11:32:58', '2023-06-28 11:32:58'),
(11, 'Md Bellal Hossin', 'chariman & MD. Artifact Tradind Ltd', '<p class=\"MsoNormal\">Shebaralohealth\'s physiotherapy services were instrumental in my remarkable recovery journey. The dedicated team of therapists went above and beyond, utilizing their expertise to devise personalized treatment plans that exceeded my expectations. Their hands-on approach and innovative techniques accelerated my healing process, restoring mobility and functionality to levels I hadn\'t thought possible. With their unwavering support and encouragement, I regained confidence in my body\'s ability to heal and thrive.</p>', 4, 'testimonial/testimonial-730058962.jpg', 1, 1, '2023-07-06 15:24:04', '2023-07-06 15:24:04'),
(12, 'Lutfe Ayub', 'Rabab Fashion Industries Ltd.', '<p class=\"MsoNormal\">The doctors at Shebaralohealth exemplified the highest standards of medical care. From the initial consultation to follow-up appointments, their extensive knowledge, and attentive approach instilled a sense of trust and reassurance. They took the time to thoroughly explain my condition, answer my questions, and outline the available treatment options. Their expertise, combined with their compassionate demeanor, created a healing environment that fostered both physical and emotional well-being.</p>', 5, 'testimonial/testimonial-547241566.jpg', 1, 1, '2023-07-06 15:31:21', '2023-07-08 19:53:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` text DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT 0,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'User', 'user@itsolutionstuff.com', NULL, NULL, 0, '$2y$10$IQUY2jlfO3saHQiHTgFW0e9g.WzN2NaWT.EOhSBawJ4qR/1wkUz8u', NULL, '2023-05-28 00:04:26', '2023-05-28 00:04:26'),
(3, 'shadhin', 'shadhin@gmail.com', NULL, NULL, 0, '$2y$10$zjnc4cFL0G.cKZ3u4LzLqusjnxqQGQOj9xqq21HM6SjVdTv6YWInm', NULL, '2023-05-28 00:05:26', '2023-05-28 00:05:26'),
(4, 'abc', 'abc@gmail.com', NULL, NULL, 0, '$2y$10$MmeQDUzfo.ilZDTOLK8ngOEqKvnWAyWv/CeQnAdeT0EXijEaB/rku', NULL, '2023-05-28 04:49:22', '2023-05-28 04:49:22'),
(6, 'DD', 'ddd@gmail.com', NULL, NULL, 0, '$2y$10$lvL80MLzqIWn9oMDoJ9l1eurB2LkbOuLpgKWFtUACEIWEWRc8B1SG', NULL, '2023-06-04 00:45:41', '2023-06-04 00:45:41'),
(7, 'hhh', 'hhh@gmail.com', NULL, NULL, 0, '$2y$10$fO.qQouScW/y8lMroN10V.kpg2mXaZ2zxOeECDK17T2QzC60CzNoW', NULL, '2023-06-07 04:21:40', '2023-06-07 04:21:40'),
(10, 'jjj', 'jjj@gmail.com', NULL, NULL, 0, '$2y$10$0cfve7pd6ErkhHu./cdXQ.Bi2r3SFdoxgtfcF7rpeGHcPhM3bnnTy', NULL, '2023-06-07 04:28:45', '2023-06-07 04:28:45'),
(13, 'Admin', 'admin@admin.com', 'user/user-746450032.png', NULL, 1, '$2y$10$WJ79BCtNyQDqwtFpxf05heu.2G2u4u17Gw26HJs02A81Y5QOmSzca', NULL, '2023-06-08 05:32:42', '2023-06-08 05:42:14');

-- --------------------------------------------------------

--
-- Table structure for table `video_galleries`
--

CREATE TABLE `video_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_link` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1= active; 0=deactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_galleries`
--

INSERT INTO `video_galleries` (`id`, `video_link`, `status`, `created_at`, `updated_at`) VALUES
(1, '<iframe width=\"320\" height=\"250\" src=\"https://www.youtube.com/embed/PFPVU7H0Drg?si=gRTg5hKhNMZjVpTp\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1, '2023-06-19 01:49:29', '2024-01-25 10:40:54'),
(2, '<iframe width=\"320\" height=\"250\" src=\"https://www.youtube.com/embed/QtYX0Xy9Xp8?si=rX7xuKF0UvMIb_Ll\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1, '2023-06-19 01:49:53', '2024-01-18 10:37:09'),
(3, '<iframe width=\"320\" height=\"250\" src=\"https://www.youtube.com/embed/QtYX0Xy9Xp8?si=iwYGbXCs7uxLiJdT\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1, '2023-06-19 01:50:10', '2024-01-18 10:36:35'),
(4, '<iframe width=\"100%\" height=\"315\" src=\"https://www.youtube.com/embed/C31k-CU6Bqg\" title=\"Interdisciplinary Rounds\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 1, '2023-06-19 01:50:21', '2023-06-19 01:51:15');

-- --------------------------------------------------------

--
-- Table structure for table `website_links`
--

CREATE TABLE `website_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `linkedIn` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `map_link` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website_links`
--

INSERT INTO `website_links` (`id`, `email`, `facebook`, `instagram`, `linkedIn`, `youtube`, `number`, `address`, `map_link`, `created_at`, `updated_at`) VALUES
(3, 'shebaralohealthbd@gmail.com', 'https://www.facebook.com/shebaralohealth', 'https://www.instagram.com/Shebaralohealth', 'https://www.linkedin.com/', 'https://www.youtube.com/@shebaralohealth', '01710908199', '365/3A, ECB Chottor, Billal Hosain Road, Dokhin Manikdi, Cantonment,Dhaka 1206', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14599.50432120756!2d90.3917842!3d23.8230052!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7edaca02e7d%3A0xa81914242fa06ce1!2sSHEBAR%20ALO%20HEALTH!5e0!3m2!1sen!2sbd!4v1704375769782!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-06-05 03:37:10', '2024-01-04 13:43:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_infos`
--
ALTER TABLE `appointment_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_and_titles`
--
ALTER TABLE `banner_and_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footer_details`
--
ALTER TABLE `footer_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `management`
--
ALTER TABLE `management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_galleries`
--
ALTER TABLE `video_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_links`
--
ALTER TABLE `website_links`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `appointment_infos`
--
ALTER TABLE `appointment_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banner_and_titles`
--
ALTER TABLE `banner_and_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer_details`
--
ALTER TABLE `footer_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `management`
--
ALTER TABLE `management`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `video_galleries`
--
ALTER TABLE `video_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `website_links`
--
ALTER TABLE `website_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
