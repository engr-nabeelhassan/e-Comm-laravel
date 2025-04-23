<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
        [   "name"=>"Oppo Mobile",
            "price"=>"20000",
            "description"=>"Lg Smart Phone Ram:3 Rom:64 Add More Suitable Features",
            "category"=>"Mobile",
            "gallery"=>"https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.gsmarena.com%2Foppo_f17_pro-pictures-10388.php&psig=AOvVaw05qWkUeZUG1FbKYFkM2IeR&ust=1745515494891000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCNiPnY3W7owDFQAAAAAdAAAAABAE"
        ],
        [   "name"=>"Samsung Tv",
            "price"=>"24000",
            "description"=>"Smart Tv with High Resolution Add More Suitable Features",
            "category"=>"Tv",
            "gallery"=>"https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.gettyimages.com%2Fphotos%2Fsamsung-smart-tv&psig=AOvVaw1uFD-Nt8S8y9lQLlbhHp_c&ust=1745515710247000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCPCnh_LW7owDFQAAAAAdAAAAABAE"
        ],
        [   "name"=>"Toshiba Tv",
            "price"=>"8000",
            "description"=>"32'inch Smart Tv Add More Suitable Features",
            "category"=>"Tv",
            "gallery"=>"https://www.google.com/url?sa=i&url=https%3A%2F%2Ftoshiba-tv.com%2Fuk-uk%2F43u5863db&psig=AOvVaw2ZJb9DTt6d_6ZOFIpRP9wA&ust=1745515880468000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCODv3MLX7owDFQAAAAAdAAAAABAE"
        ],
        [   "name"=>"PEL Refrigrator",
            "price"=>"35000",
            "description"=>"Fridge Best Cooling Usage Add More Suitable Features",
            "category"=>"Refrigrator",
            "gallery"=>"https://www.google.com/url?sa=i&url=https%3A%2F%2Feshop.pel.com.pk%2Fproducts%2Fpel-refrigerator-glass-door-prism&psig=AOvVaw3J0yX_Tv-0stzegEormVWS&ust=1745515918348000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCLCt69TX7owDFQAAAAAdAAAAABAE"
        ],

        ]);

    }
}
