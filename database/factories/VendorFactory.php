<?php

namespace Database\Factories;

use App\Models\Vendor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vendor>
 */
class VendorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Vendor::class;

    public function definition(): array
    {
        $vendorName='Vendor '.$this->faker->numberBetween(1, 100000);
        $endorEmail=$this->faker->unique()->safeEmail();
        $vendorPhone=$this->faker->unique()->phoneNumber();

        return [
            'name' => $vendorName,
            'email' => $endorEmail,
            'phone' => $vendorPhone,
            'is_approved' => 1
        ];
    }
}
