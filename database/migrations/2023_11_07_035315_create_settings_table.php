<?php

use App\Models\Setting;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        Setting::create([
            'key'   => '_site_name',
            'label' => 'Judul Situs',
            'value' => 'Website Profile',
            'type'  => 'text',
        ]);
        Setting::create([
            'key'   => '_location',
            'label' => 'Alamat',
            'value' => 'Boyolali, Jawa Tengah',
            'type'  => 'text',
        ]);
        Setting::create([
            'key'   => '_youtube',
            'label' => 'Youtube',
            'value' => 'Https://youtube.com',
            'type'  => 'text',
        ]);
        Setting::create([
            'key'   => '_instagram',
            'label' => 'Instagram',
            'value' => 'Https://instagram.com',
            'type'  => 'text',
        ]);
        Setting::create([
            'key'   => '_facebook',
            'label' => 'Facebook',
            'value' => 'Https://facebook.com',
            'type'  => 'text',
        ]);
        Setting::create([
            'key'   => '_twitter',
            'label' => 'Twitter',
            'value' => 'Https://twitter.com',
            'type'  => 'text',
        ]);
        Setting::create([
            'key'   => '_site_description',
            'label' => 'Site Description',
            'value' => 'Websie profile sederhana, melayani pembuatan website',
            'type'  => 'longtext',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
