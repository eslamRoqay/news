<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'site_name_ar' => 'News Blog',
            'site_name_en' => 'News Blog',
            'phone' => '8484858845855',
            'email' => 'info@eggs-plus.com',
            'logo' => 'uploads/setting/login_white.png',
            'login_pg' => 'uploads/setting/login_image.png',
            'logo_login' => 'uploads/setting/login_page_logo.png',
            'location' => null,
            'facebook' => 'https://www.facebook.com',
            'twitter' => null,
            'instagram' => null,
            'pinterest' => null,
            'snapchat' => null,
            'telegram' => null,
            'youtube' => null,
            'address_ar' => 'News Blog News Blog',
            'address_en' => 'News Blog News Blog',
            'sm_description_ar' => 'News Blog description about application',
            'sm_description_en' => 'News Blog description about application',
            'copyright' => 'جميع الحقوق محفوظة منصة News Blog، تنفيذ و تطوير بواسطة',
            'copyright_link_text' => 'News Blog',
            'copyright_link' => 'http://www.google.com',

            'terms_ar' => 'terms_ar',
            'terms_en' => 'terms_en',
            'privacy_ar' => 'privacy_ar',
            'privacy_en' => 'privacy_en',
            'usage_ar' => 'usage_ar',
            'usage_en' => 'usage_en',
            'about_ar' => 'about_ar',
            'about_en' => 'about_en',
            'delivery_cost' => '200',
            'cash_on_delivery' => '0',
        ];


        Setting::setMany($data);
    }
}
