<?php

namespace Database\Seeders;

use App\Models\Vendor;
use App\Models\ProductCatalog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Factories\ProductCatalogFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductCatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $totalProducts = 100000;
        $batchSize = 1000;
        $insertedCount = 0;

        $vendorIds = Vendor::pluck('id')->toArray();

        if (empty($vendorIds)) {
            echo "Tidak ada vendor tersedia! Jalankan VendorSeeder terlebih dahulu.\n";
            return;
        }

        while ($insertedCount < $totalProducts) {
            $productCatalogsData = [];

            for ($i = 0; $i < $batchSize && $insertedCount < $totalProducts; $i++, $insertedCount++) {
                $productCatalogsData[] = [
                    'name' => 'Product '.fake()->numberBetween(1, 100000),
                    'description' => fake()->sentence(10),
                    'price' => fake()->numberBetween(5000, 999999999),
                    'vendor_id' => $vendorIds[array_rand($vendorIds)],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }

            try {
                DB::table('product_catalogs')->insert($productCatalogsData);
                echo "Inserted $insertedCount products...\n";
            } catch (\Exception $e) {
                echo "❌ ERROR: " . $e->getMessage() . "\n";
                return;
            }
        }

        echo "Selesai! 100.000 Produk berhasil dimasukkan.\n";
    }
}
