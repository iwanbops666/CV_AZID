<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CvController extends Controller
{
    public function index()
    {
        $cvData = [
            'hero' => [
                'name' => 'Azid Kamala Rizkuna',
                'profession' => 'Sarjana Teknik Sipil',
                'summary' => 'Lulusan Sarjana Teknik Sipil yang berdedikasi dan berpengalaman aktif dalam perencanaan serta pelaksanaan berbagai proyek infrastruktur (jalan, jembatan, dan gedung) selama masa studi. Terbiasa menangani penyusunan DED, gambar teknis (CAD/BIM), analisis struktur, hingga pengawasan lapangan (Site Engineer). Memiliki jiwa kepemimpinan, komunikasi yang kuat, serta mampu bekerja secara efektif dalam tim.',
                'contact' => [
                    'phone' => '+62 852-3901-2912',
                    'email' => 'azidkamala07@gmail.com',
                    'address' => 'Jln. Joyo Utomo, Kel. Merjosari, Kec. Lowokwaru, Kota Malang.',
                ]
            ],
            'experience' => [
                [
                    'year' => '2026',
                    'company' => 'Cv. Makmur Agung Perdana',
                    'role' => 'Peserta Magang / Drafter',
                    'description' => 'Dokumentasi Internship Cv. Makmur Agung Perdana',
                    'tags' => ['Internship', 'Drafter'],
                    'images' => [
                        'Lampir%20Portofolio/Internship%20Tsurayya/WhatsApp%20Image%202026-10-06%20at%2021.52.18.jpeg',
                        'Lampir%20Portofolio/Internship%20Tsurayya/WhatsApp%20Image%202026-10-06%20at%2021.53.22.jpeg'
                    ]
                ],
                [
                    'year' => '2026',
                    'company' => 'PT KInarya Alam Raya',
                    'role' => 'Perencana DED',
                    'description' => 'Sertifikat Internship PT KInarya Alam Raya',
                    'tags' => ['Sertifikat', 'Internship'],
                    'images' => [
                        'Lampir%20Portofolio/Jaringan%20Irigasi%20Desa%20Pakatellu/IMG_20261006_0001_page-0001.jpg'
                    ]
                ],
                [
                    'year' => '2026',
                    'company' => 'CV. BANGGAPUPA CONTRACTOR',
                    'role' => 'Site Engineer',
                    'description' => 'Pembuatan Jalan Akses Downstream Bendungan Selorejo, Desa Pandansari, Kec. Ngantang, Kabupaten Malang, Provinsi Jawa Timur.',
                    'tags' => ['Infrastruktur', 'Jalan'],
                    'images' => [
                        'Lampir%20Portofolio/Site%20Engineer%20jalan%20Downstream/WhatsApp%20Image%202026-10-06%20at%2018.15.10.jpeg',
                        'Lampir%20Portofolio/Site%20Engineer%20jalan%20Downstream/WhatsApp%20Image%202026-10-06%20at%2018.15.101.jpeg',
                        'Lampir%20Portofolio/Site%20Engineer%20jalan%20Downstream/WhatsApp%20Image%202026-10-06%20at%2018.16.04.jpeg'
                    ]
                ],
                [
                    'year' => '2026',
                    'company' => 'CV. SUMBER PANGREKSA ARTA',
                    'role' => 'Perencana DED',
                    'description' => 'Pemeliharaan Berkala Ruas Jalan Plosokandang-Ringinpitu, Kabupaten Tulungagung, Jawa Timur.',
                    'tags' => ['DED', 'Pemeliharaan'],
                    'images' => [
                        'Lampir%20Portofolio/DED%20Plosokandang-Ringinpitu/Screenshot%202026-10-06%20182223.png',
                        'Lampir%20Portofolio/DED%20Plosokandang-Ringinpitu/WhatsApp%20Image%202026-10-06%20at%2018.36.57.jpeg',
                        'Lampir%20Portofolio/DED%20Plosokandang-Ringinpitu/CROSS%20SECTION_page-0001.jpg',
                        'Lampir%20Portofolio/DED%20Plosokandang-Ringinpitu/DETAIL%20BOH%20OPRIT_page-0001.jpg',
                        'Lampir%20Portofolio/DED%20Plosokandang-Ringinpitu/LONG%20SECTION_page-0001.jpg',
                        'Lampir%20Portofolio/DED%20Plosokandang-Ringinpitu/STRIP%20MAPS_page-0001.jpg',
                        'Lampir%20Portofolio/DED%20Plosokandang-Ringinpitu/UMUM_page-0001.jpg'
                    ]
                ],
                [
                    'year' => '2026',
                    'company' => 'CV. DELTA MANDIRI CONSULTANT',
                    'role' => 'Drafter',
                    'description' => 'Kolam Retensi Pasar Amahami Kota Bima, Provinsi Nusa Tenggara Barat.',
                    'tags' => ['Drafter', 'Infrastruktur'],
                    'images' => [
                        'Lampir%20Portofolio/Kolam%20Retensi/WhatsApp%20Image%202026-10-06%20at%2020.58.53.jpeg',
                        'Lampir%20Portofolio/Kolam%20Retensi/WhatsApp%20Image%202026-10-06%20at%2020.59.10.jpeg',
                        'Lampir%20Portofolio/Kolam%20Retensi/WhatsApp%20Image%202026-10-06%20at%2021.01.00.jpeg'
                    ]
                ],
                [
                    'year' => '2026',
                    'company' => 'CV. DELTA MANDIRI CONSULTANT',
                    'role' => 'Drafter',
                    'description' => 'DED Lapak Paruga Nae, Kota Bima, Provinsi Nusa Tenggara Barat.',
                    'tags' => ['DED', 'Drafter'],
                    'images' => [
                        'Lampir%20Portofolio/DED%20Lapak%20Paruga%20Nae/WhatsApp%20Image%202026-10-06%20at%2021.21.19.jpeg',
                        'Lampir%20Portofolio/DED%20Lapak%20Paruga%20Nae/WhatsApp%20Image%202026-10-06%20at%2021.21.20.jpeg',
                        'Lampir%20Portofolio/DED%20Lapak%20Paruga%20Nae/WhatsApp%20Image%202026-10-06%20at%2021.21.201.jpeg'
                    ]
                ],
                [
                    'year' => '2026',
                    'company' => 'CV. DELTA MANDIRI CONSULTANT',
                    'role' => 'Perencana',
                    'description' => 'DED UMKM Eks Polindes Rabangodu Utara, Kota Bima, Provinsi Nusa Tenggara Barat.',
                    'tags' => ['DED', 'Perencanaan'],
                    'images' => [
                        'Lampir%20Portofolio/DED%20UMKM%20eks%20Polindes/WhatsApp%20Image%202026-10-06%20at%2021.30.54.jpeg',
                        'Lampir%20Portofolio/DED%20UMKM%20eks%20Polindes/WhatsApp%20Image%202026-10-06%20at%2021.32.14.jpeg'
                    ]
                ],
                [
                    'year' => '2026',
                    'company' => 'CV. ERCON',
                    'role' => 'Perencana DED',
                    'description' => 'Pemeliharaan Berkala Jalan Desa Ngunggahan, Kabupaten Tulungagung, Jawa Timur.',
                    'tags' => ['DED', 'Pemeliharaan'],
                    'images' => [
                        'Lampir%20Portofolio/DED%20Ngunggahan/PETA%20PENGAJUAN%20DAK.png',
                        'Lampir%20Portofolio/DED%20Ngunggahan/02%20LONGSECTION-Model_page-0001.jpg',
                        'Lampir%20Portofolio/DED%20Ngunggahan/03%20STRIPMAPS-Model_page-0001.jpg',
                        'Lampir%20Portofolio/DED%20Ngunggahan/04%20DETAIL%20BOH%20OPRIT-Model_page-0001.jpg',
                        'Lampir%20Portofolio/DED%20Ngunggahan/06%20CROSS%20SECTION-Model_page-0001.jpg'
                    ]
                ],
                [
                    'year' => '2025',
                    'company' => 'PT. NENDO MARGOMULYO GROUP',
                    'role' => 'Drafter',
                    'description' => 'Perumahan BTN Santi, Kota Bima, Provinsi Nusa Tenggara Barat.',
                    'tags' => ['Drafter', 'Perumahan'],
                    'images' => [
                        'Lampir%20Portofolio/BTN%20Santi/1.png'
                    ]
                ],
                [
                    'year' => '2025',
                    'company' => 'CV. DELTA MANDIRI CONSULTANT',
                    'role' => 'Perencana DED',
                    'description' => 'Pasar Eks Terminal Kota Bima, Provinsi Nusa Tenggara Barat.',
                    'tags' => ['DED', 'Fasilitas Umum'],
                    'images' => [
                        'Lampir%20Portofolio/Pasar%20Ruko/1.png'
                    ]
                ],
                [
                    'year' => '2025',
                    'company' => 'CV. LIMA PILAR CONSULTANT',
                    'role' => 'Perencana DED',
                    'description' => 'Pemeliharaan Berkala Ruas Jalan Plandaan-Boro, Kabupaten Tulungagung, Jawa Timur.',
                    'tags' => ['DED', 'Jalan'],
                    'images' => [
                        'Lampir%20Portofolio/DED%20Plandaan-Boro/CROSS%20SECTION_page-0001.jpg',
                        'Lampir%20Portofolio/DED%20Plandaan-Boro/DETAIL%20OPRIT%20DAN%20BOH%20OPRIT_page-0001.jpg',
                        'Lampir%20Portofolio/DED%20Plandaan-Boro/LONG%20SECTION_page-0001.jpg',
                        'Lampir%20Portofolio/DED%20Plandaan-Boro/STRIP%20MAPS_page-0001.jpg'
                    ]
                ],
                [
                    'year' => '2025',
                    'company' => 'CV. POLLACHEIAL NETWORKTECH',
                    'role' => 'Project Manager',
                    'description' => 'Pembangunan Cafe And Resto Twee Hander, Kota Malang, Provinsi Jawa Timur.',
                    'tags' => ['Project Manager', 'Konstruksi'],
                    'images' => [
                        'Lampir%20Portofolio/DED%20Twee%20Hander/WhatsApp%20Image%202026-10-06%20at%2021.50.33.jpeg',
                        'Lampir%20Portofolio/DED%20Twee%20Hander/WhatsApp%20Image%202026-10-06%20at%2021.51.11.jpeg'
                    ]
                ],
                [
                    'year' => '2025',
                    'company' => 'CV. DWI DIMITRA',
                    'role' => 'Perencana',
                    'description' => 'Footplate, Sloof, Pelat Lantai, dan Balok pada Perencanaan Pembangunan Gedung Olahraga Multi Fungsi, Kota Subulussalam, Aceh.',
                    'tags' => ['Struktur', 'Perencanaan'],
                    'images' => [
                        'Lampir%20Portofolio/Gedung%20Multi%20Fungsi%20(GOR)/1.jpg',
                        'Lampir%20Portofolio/Gedung%20Multi%20Fungsi%20(GOR)/Gambar%20Multi%20Fungsi-Model.jpg',
                        'Lampir%20Portofolio/Gedung%20Multi%20Fungsi%20(GOR)/Gambar%20Multi%20Fungsi-Model2_page-0001.jpg'
                    ]
                ],
                [
                    'year' => '2025',
                    'company' => 'CV. DWI DIMITRA',
                    'role' => 'Drafter dan Perencana',
                    'description' => 'Struktur Atas pada Pembangunan Jembatan Jalan Durian, Dusun Melati, Kampong Sepadan, Kota Subulussalam, Aceh.',
                    'tags' => ['Drafter', 'Jembatan'],
                    'images' => [
                        'Lampir%20Portofolio/Jembatan%20Sepadan/JEMBATAN%20SEPADAN-M1odel_page-0001.jpg',
                        'Lampir%20Portofolio/Jembatan%20Sepadan/JEMBATAN%20SEPADAN-Mod1el_page-0001.jpg',
                        'Lampir%20Portofolio/Jembatan%20Sepadan/JEMBATAN%20SEPADAN-Model_page-0001.jpg',
                        'Lampir%20Portofolio/Jembatan%20Sepadan/JEMBATAN%20SEPADAN-Model.pdf%20baru_page-0001.jpg'
                    ]
                ],
                [
                    'year' => '2024',
                    'company' => 'PT. NENDO MARGOMULYO GROUP',
                    'role' => 'Drafter',
                    'description' => 'Perumahan BTN Sambinae Grandhill, Kota Bima, Provinsi Nusa Tenggara Barat.',
                    'tags' => ['Drafter', 'Perumahan'],
                    'images' => [
                        'btn%20sambinae1.jpeg',
                        'Lampir%20Portofolio/BTN%20Sambinae/0.png',
                        'Lampir%20Portofolio/BTN%20Sambinae/1.png',
                        'Lampir%20Portofolio/BTN%20Sambinae/2.png'
                    ]
                ]
            ],
            'education' => [
                [
                    'degree' => 'S-1 Teknik Sipil',
                    'institution' => 'ITN Malang',
                    'gpa' => '3.34',
                ]
            ],
            'organizations' => [
                'Anggota Bidang Minat dan Bakat Himpunan Mahasiswa Teknik Sipil S-1 Periode XXVII 2024/2025, ITN Malang.',
                'Koordinator Bidang Kesektariatan Kuliah Lapangan 2024, ITN Malang.',
                'Panitia Bidang Acara NCF (National Civil Fest) 2024, ITN Malang.',
            ],
            'skills' => [
                ['name' => 'AutoCAD', 'category' => '2D/3D DRAFTING'],
                ['name' => 'BIM Revit', 'category' => 'B.I.M'],
                ['name' => 'SketchUp', 'category' => '3D MODELING'],
                ['name' => 'Enscape', 'category' => '3D RENDERING'],
                ['name' => 'ETABS', 'category' => 'STRUCTURAL ANALYSIS'],
                ['name' => 'SAP2000', 'category' => 'STRUCTURAL ANALYSIS'],
                ['name' => 'STAAD Pro', 'category' => 'STRUCTURAL ANALYSIS'],
                ['name' => 'ArcMap', 'category' => 'GIS / MAPPING'],
                ['name' => 'Canva', 'category' => 'GRAPHIC DESIGN'],
                ['name' => 'Microsoft Office', 'category' => 'DATA & DOCS'],
            ],
            'languages' => [
                'Inggris', 'Indonesia'
            ]
        ];

        return view('cv', compact('cvData'));
    }
}
