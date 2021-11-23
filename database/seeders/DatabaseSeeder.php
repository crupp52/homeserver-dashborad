<?php

namespace Database\Seeders;

use App\Models\Camera;
use App\Models\ServiceCard;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceCard::upsert([
            [
                'name'   => 'Webmin Dashboard',
                'url'    => 'https://192.168.0.100',
                'port'   => '10000',
                'status' => 1,
            ],
            [
                'name'   => 'qBittorrent Web UI',
                'url'    => 'https://192.168.0.100',
                'port'   => '8080',
                'status' => 1,
            ],
            [
                'name'   => 'Owncloud',
                'url'    => 'https://192.168.0.100/owncloud',
                'port'   => '',
                'status' => 1,
            ],
            [
                'name'   => 'Plex Media Server',
                'url'    => 'https://192.168.0.100',
                'port'   => '32400',
                'status' => 1,
            ],
            [
                'name'   => 'CUPS',
                'url'    => 'https://192.168.0.100',
                'port'   => '631',
                'status' => 1,
            ],
        ], [
            'name',
            'url',
            'port',
        ]);

        Camera::upsert([
            'name' => 'Camera #1',
            'url' => 'https://192.168.0.101:8080'
        ], [
            'name',
            'url',
        ]);
    }
}
