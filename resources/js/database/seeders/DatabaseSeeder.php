<?php

namespace Database\Seeders;

use App\Models\Tamu;
use App\Models\User;
use App\Models\Kamar;
use App\Models\Pelanggan;
use App\Models\DetailKamar;
use App\Models\FasilitasKamar;
use App\Models\DetailFasilitas;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $dataUser = [
            [
                'username' => 'admin',
                'nama' => 'Alpi Ardiansyah',
                'email' => 'alpiardnsyh@gmail.com',
                'no_hp' => '089123456789',
                'password' => bcrypt('admin'),
                'level' => 'admin',
                'status' => 'aktif',
                'photo' => 'bunga.jpg'
            ],
            [
                'username' => 'resepsionis',
                'nama' => 'Adinda Rf',
                'email' => 'adindarf@gmail.com',
                'no_hp' => '089123456780',
                'password' => bcrypt('123456'),
                'level' => 'resepsionis',
                'status' => 'aktif',
                'photo' => 'alfi.jpg'
            ],
        ];

        foreach ($dataUser as $user) {
            User::create($user);
        }

        $dataKamar = [
            [
                'tipe' => 'Deluxe',
                'harga' => 850000,
                'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis animi harum officiis, ducimus praesentium labore ipsum voluptates illum ipsam voluptas hic eligendi tempora ab totam aliquam? Maiores nulla labore ratione.',
                'photo' => 'deluxe.jpg',
                'jumlah' => 4
            ],
            [
                'tipe' => 'Superior',
                'harga' => 750000,
                'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo esse optio neque repellendus, minus perferendis debitis sequi placeat natus! Quas labore culpa asperiores et dolor praesentium officiis cum nostrum, quos minima, repellendus eum rerum ipsam.',
                'photo' => 'superior.jpg',
                'jumlah' => 4
            ],
            [
                'tipe' => 'Exclusive',
                'harga' => 1000000,
                'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, cum deserunt voluptatibus consectetur quas sequi nostrum mollitia. Maiores praesentium adipisci quia placeat similique, mollitia veritatis facere necessitatibus. Architecto expedita, veniam voluptates, impedit quos exercitationem quaerat ea sunt odio aperiam iste.',
                'photo' => 'exclusive.jpg',
                'jumlah' => 4,
            ],
        ];

        foreach ($dataKamar as $kamar) {
            Kamar::create($kamar);
        }

        $dataDetail = [
            [
                'kamar_id' => 1,
                'nomor' => 'D001',
                'status' => 'nonaktif'
            ],
            [
                'kamar_id' => 1,
                'nomor' => 'D002',
                'status' => 'nonaktif'
            ],
            [
                'kamar_id' => 1,
                'nomor' => 'D003',
                'status' => 'nonaktif'
            ],
            [
                'kamar_id' => 1,
                'nomor' => 'D004',
                'status' => 'nonaktif'
            ],
            [
                'kamar_id' => 2,
                'nomor' => 'S001',
                'status' => 'nonaktif'
            ],
            [
                'kamar_id' => 2,
                'nomor' => 'S002',
                'status' => 'nonaktif'
            ],
            [
                'kamar_id' => 2,
                'nomor' => 'S003',
                'status' => 'nonaktif'
            ],
            [
                'kamar_id' => 2,
                'nomor' => 'S004',
                'status' => 'nonaktif'
            ],
            [
                'kamar_id' => 3,
                'nomor' => 'E001',
                'status' => 'nonaktif'
            ],
            [
                'kamar_id' => 3,
                'nomor' => 'E002',
                'status' => 'nonaktif'
            ],
            [
                'kamar_id' => 3,
                'nomor' => 'E003',
                'status' => 'nonaktif'
            ],
            [
                'kamar_id' => 3,
                'nomor' => 'E004',
                'status' => 'nonaktif'
            ],
        ];

        foreach ($dataDetail as $detail) {
            DetailKamar::create($detail);
        }

        $dataFasilitasKamar = [
            [
                'nama' => 'Hot Water Shower',
                'keterangan' => 'Kamar mandi luas dengan Shower dan Air Panas',
                'photo' => 'shower.jpg',
            ],
            [
                'nama' => 'Bath Tub and Shower',
                'keterangan' => 'Kamar mandi luas dengan Tub dan Shower',
                'photo' => 'tub.jpg',
            ],
            [
                'nama' => 'LED TV 32 Inch',
                'keterangan' => 'LED TV kapasitas besar dengan lebar 32 inch',
                'photo' => 'led.jpg',
            ],
            [
                'nama' => 'LED TV 42 Inch',
                'keterangan' => 'LED TV kapasitas besar dengan lebar 42 inch',
                'photo' => 'led2.jpeg',
            ],
            [
                'nama' => 'Coffee Maker',
                'keterangan' => 'Coffee Maker untuk membuat Coffee dengan takaran selera sesuai keinginan',
                'photo' => 'coffee.jpg',
            ],
            [
                'nama' => 'Kursi Sofa',
                'keterangan' => 'Disediakan kursi sofa yang lembut dan nyaman',
                'photo' => 'sofa.jpg',
            ],
        ];

        foreach ($dataFasilitasKamar as $fasilitas) {
            FasilitasKamar::create($fasilitas);
        }

        $dataDetailFasilitas = [
            [
                'kamar_id' => 1,
                'fasilitas_kamar_id' => 1,
            ],
            [
                'kamar_id' => 1,
                'fasilitas_kamar_id' => 3,
            ],
            [
                'kamar_id' => 1,
                'fasilitas_kamar_id' => 5,
            ],
            [
                'kamar_id' => 1,
                'fasilitas_kamar_id' => 6,
            ],
            [
                'kamar_id' => 2,
                'fasilitas_kamar_id' => 2,
            ],
            [
                'kamar_id' => 2,
                'fasilitas_kamar_id' => 4,
            ],
            [
                'kamar_id' => 2,
                'fasilitas_kamar_id' => 5,
            ],
            [
                'kamar_id' => 2,
                'fasilitas_kamar_id' => 6,
            ],
            [
                'kamar_id' => 3,
                'fasilitas_kamar_id' => 2,
            ],
            [
                'kamar_id' => 3,
                'fasilitas_kamar_id' => 4,
            ],
            [
                'kamar_id' => 3,
                'fasilitas_kamar_id' => 5,
            ],
            [
                'kamar_id' => 3,
                'fasilitas_kamar_id' => 6,
            ],
        ];

        foreach ($dataDetailFasilitas as $detail) {
            DetailFasilitas::create($detail);
        }

        $dataPelanggan = [
        [
            'nama' => 'Gilang Ramadhan',
            'email' => 'ramadhangilang@gmail.com',
            'no_hp' => '087708657676',
            'password' => bcrypt('12345678'),
        ],
        [
            'nama' => 'Ehan Gepenk',
            'email' => 'ehangepenk@gmail.com',
            'no_hp' => '087708657665',
            'password' => bcrypt('12345678'),
        ],
    ];

    foreach($dataPelanggan as $pelanggan){
        Pelanggan::create($pelanggan);
    }

        $dataTamu = [
            [
                'no_identitas' => '3214092212900001',
                'jenis_identitas' => 'ktp',
                'nama_tamu' => 'Lala',
                'no_hp' => '089786753432',
                'jk' => 'p',
                'alamat' => 'Buah batu Bandung',
                'status' => 'nonaktif',
            ],
            [
                'no_identitas' => '3214092212900002',
                'jenis_identitas' => 'ktp',
                'nama_tamu' => 'Nazwa',
                'no_hp' => '089786753476',
                'jk' => 'p',
                'alamat' => 'Cimahi Bandung',
                'status' => 'nonaktif',
            ],
            [
                'no_identitas' => '3214092212900011',
                'jenis_identitas' => 'ktp',
                'nama_tamu' => 'Alina',
                'no_hp' => '089786753212',
                'jk' => 'p',
                'alamat' => 'Cilandak Jakarta Selatan',
                'status' => 'nonaktif',
            ],
            [
                'no_identitas' => '3214092212900009',
                'jenis_identitas' => 'ktp',
                'nama_tamu' => 'Mingyu',
                'no_hp' => '089786753473',
                'jk' => 'l',
                'alamat' => 'Cibiru Bandung',
                'status' => 'nonaktif',
            ],
        ];

        foreach ($dataTamu as $tamu) {
            Tamu::create($tamu);
        }
    }
}