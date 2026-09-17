<?php

namespace Database\Seeders;

use App\Models\game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $games = [
            [
                'nama_game' => 'Mobile Legends: Bang Bang',
                'developer' => 'Moonton',
                'genre' => 'MOBA',
                'platform' => 'Mobile (Android, iOS)',
                'harga' => 0,
                'tanggal_rilis' => '2016-07-14',
                'deskripsi' => 'Game MOBA 5v5 untuk perangkat mobile yang sangat populer.',
            ],
            [
                'nama_game' => 'DreadOut',
                'developer' => 'Digital Happiness',
                'genre' => 'Survival Horror',
                'platform' => 'PC (Windows)',
                'harga' => 165000,
                'tanggal_rilis' => '2014-05-15',
                'deskripsi' => 'Game horor survival buatan Indonesia yang menceritakan petualangan Linda.',
            ],
            [
                'nama_game' => 'A Space for the Unbound',
                'developer' => 'Mojiken Studio',
                'genre' => 'Adventure',
                'platform' => 'PC, Nintendo Switch, PlayStation, Xbox',
                'harga' => 119900,
                'tanggal_rilis' => '2023-01-19',
                'deskripsi' => 'Game petualangan naratif bergaya pixel-art berlatar pedesaan Indonesia era 90-an.',
            ],
            [
                'nama_game' => 'Genshin Impact',
                'developer' => 'miHoYo / HoYoverse',
                'genre' => 'Action RPG, Open World',
                'platform' => 'PC, Mobile, PlayStation',
                'harga' => 0,
                'tanggal_rilis' => '2020-09-28',
                'deskripsi' => 'Game aksi peran open-world fantasi dengan sistem elemen sihir.',
            ],
            [
                'nama_game' => 'Grand Theft Auto V',
                'developer' => 'Rockstar North',
                'genre' => 'Action-Adventure',
                'platform' => 'PC, PlayStation, Xbox',
                'harga' => 401000,
                'tanggal_rilis' => '2013-09-17',
                'deskripsi' => 'Game petualangan open-world berlatar di negara bagian fiksi San Andreas.',
            ],
            [
                'nama_game' => 'Minecraft',
                'developer' => 'Mojang Studios',
                'genre' => 'Sandbox, Survival',
                'platform' => 'Multiplatform',
                'harga' => 380000,
                'tanggal_rilis' => '2011-11-18',
                'deskripsi' => 'Game sandbox berbasis blok 3D yang memberikan kebebasan membangun dan bertahan hidup.',
            ],
            [
                'nama_game' => 'Valorant',
                'developer' => 'Riot Games',
                'genre' => 'Tactical Hero Shooter',
                'platform' => 'PC, PlayStation 5, Xbox Series X/S',
                'harga' => 0,
                'tanggal_rilis' => '2020-06-02',
                'deskripsi' => 'Game tembak-menembak orang pertama taktis gratis berbasis tim 5v5.',
            ],
        ];

        foreach ($games as $data) {
            game::updateOrCreate(
                ['nama_game' => $data['nama_game']],
                $data
            );
        }
    }
}
