<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Products::create( [
            'id'=>1,
            'name'=>'Bb cream ',
            'price'=>99,
            'slug'=>'bb-cream-4893',
            'img'=>'https://cdn.discordapp.com/attachments/1007016157250846721/1029881358799089734/BB_Cream.png',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis cumque debitis, doloremque exercitationem fugit iusto molestias mollitia, nobis optio reprehenderit saepe soluta? Amet dicta ducimus vel veniam! Cupiditate, ipsam, quod.',
            'view_count'=>0,
            'category_id'=>4,
            'created_at'=>null,
            'updated_at'=>null
        ] );

        Products::create( [
            'id'=>2,
            'name'=>'Hair brush',
            'price'=>56,
            'slug'=>'hair-brush-309803',
            'img'=>'https://media.discordapp.net/attachments/1007016157250846721/1030485773650239559/hair_brush.png',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis cumque debitis, doloremque exercitationem fugit iusto molestias mollitia, nobis optio reprehenderit saepe soluta? Amet dicta ducimus vel veniam! Cupiditate, ipsam, quod.',
            'view_count'=>0,
            'category_id'=>2,
            'created_at'=>null,
            'updated_at'=>null
        ] );

        Products::create( [
            'id'=>3,
            'name'=>'Pink pack',
            'price'=>129,
            'slug'=>'pink-pack-439050',
            'img'=>'https://media.discordapp.net/attachments/1007016157250846721/1030485791408918599/pack.png',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis cumque debitis, doloremque exercitationem fugit iusto molestias mollitia, nobis optio reprehenderit saepe soluta? Amet dicta ducimus vel veniam! Cupiditate, ipsam, quod.',
            'view_count'=>0,
            'category_id'=>2,
            'created_at'=>null,
            'updated_at'=>null
        ] );

        Products::create( [
            'id'=>4,
            'name'=>'Lat liv',
            'price'=>222,
            'slug'=>'lat-live-12312321',
            'img'=>'https://media.discordapp.net/attachments/1007016157250846721/1030485903791116398/3x1.png',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis cumque debitis, doloremque exercitationem fugit iusto molestias mollitia, nobis optio reprehenderit saepe soluta? Amet dicta ducimus vel veniam! Cupiditate, ipsam, quod.',
            'view_count'=>0,
            'category_id'=>3,
            'created_at'=>null,
            'updated_at'=>null
        ] );

        Products::create( [
            'id'=>5,
            'name'=>'Garmen steamer',
            'price'=>220,
            'slug'=>'garmer-steamer-2143324',
            'img'=>'https://media.discordapp.net/attachments/1007016157250846721/1030485913148596304/steamer.png',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis cumque debitis, doloremque exercitationem fugit iusto molestias mollitia, nobis optio reprehenderit saepe soluta? Amet dicta ducimus vel veniam! Cupiditate, ipsam, quod.',
            'view_count'=>0,
            'category_id'=>3,
            'created_at'=>null,
            'updated_at'=>null
        ] );
    }
}
