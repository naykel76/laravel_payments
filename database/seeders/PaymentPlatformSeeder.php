<?php

namespace Database\Seeders;

use App\Models\PaymentPlatform;
use Illuminate\Database\Seeder;

class PaymentPlatformSeeder extends Seeder
{
    public function run()
    {
        PaymentPlatform::create([
            'name' => 'PayPal',
            'image' => 'images/paypal.jpg',
            'subscriptions_enabled' => true
        ]);

    }
}
