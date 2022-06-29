<?php

namespace Database\Seeders;

use App\Models\Setting;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'site_title' => 'Flexevent',
            'tagline' => 'Event Planner In Lagos Nigeria',
            'site_email' => 'contact@flexevent.com',
            'site_phone_no' => '+234 708 9489 647',
            'site_address' => '5 Kami Street Lagos, NG',
        ]);
    }
}
