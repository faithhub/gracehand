<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WebSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = Setting::first();
        if (!$settings) {
            DB::table('settings')->insert([
                'website_name' => 'GraceHand',
                'website_logo' => '',
                'facebook_link' => '',
                'twitter_link' => '',
                'linkedin_link' => '',  
                'about_content' => '',
                'ceo_name' => '',
                'ceo_picture' => '',
                'email' => '',
                'address' => '',
                'phone' => '',
                'short_desc' => '',
            ]);
        }
    }
}
