<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laravel Project</title>

    <!-- Stylesheet -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<?php
$dataVideo = [
    [
        "title" => "Lokasi Acara",
        "embed_url" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.317288780929!2d100.36552317327534!3d-0.9080257353261607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b8c0efbbb207%3A0x4ca61154138a249a!2sUPGRISBA%20Convention%20Center!5e0!3m2!1sid!2sid!4v1699852552526!5m2!1sid!2sid",
        "provider" => "map.google.com",
    ],
    [
        "title" => "Video Profile",
        "embed_url" => "https://www.youtube.com/embed/7eszoybUk-Q?si=ATrTPSiURwgcEGTQ",
        "provider" => "youtube.com",
    ],
    [
        "title" => "Video Promosi",
        "embed_url" => "https://www.youtube.com/embed/iccZoTvbZ1c?si=T-VVcgOs5AlICy0P",
        "provider" => "youtube.com",
    ],
    /*[
        "title" => "Video Berita",
        "embed_url" => "https://www.youtube.com/embed/b9TBghL-D2U?si=fOCSnjHS5I_NbWvn",
        "provider" => "youtube.com",
    ]*/
];
$dataRank = [
    [
        "full_name" => "Finarizal Muntaha",
        "study_program" => "Bahasa Indonesia",
        "ttl" => "Padang, 16 Februari 2001",
        "nim" => "19090063",
        "ipk" => "4.0",
        "dad_name" => "Adrizal",
        "mom_name" => "Etnitawati",
        "from" => "Kota Batam",
        "profile_url" => "https://via.placeholder.com/150"
    ],
    [
        "full_name" => "Risma Yulia",
        "study_program" => "Pendidikan Akuntansi",
        "ttl" => "Andilan, 10 Agustus 2000",
        "nim" => "19090063",
        "ipk" => "4.0",
        "dad_name" => "Sutarman",
        "mom_name" => "Juniarti",
        "from" => "Kab. Pasaman",
        "profile_url" => "https://via.placeholder.com/150"
    ],
    [
        "full_name" => "Dara Puspa Mulyana",
        "study_program" => "Pendidikan Bahasa Dan Sastra",
        "ttl" => "Sungai Nanam, 03 Juli 2000",
        "nim" => "19090095",
        "ipk" => "4.0",
        "dad_name" => "Zulkifli",
        "mom_name" => "Marsa Yenti",
        "from" => "Solok",
        "profile_url" => "https://via.placeholder.com/150"
    ],
    [
        "full_name" => "Dinie Eka Putri",
        "study_program" => "Pendidikan BK",
        "ttl" => "Padang, 27 Mei 2001",
        "nim" => "19060023",
        "ipk" => "3.97",
        "dad_name" => "Eddy Wasono",
        "mom_name" => "Yarnita",
        "from" => "Kota Padang",
        "profile_url" => "https://via.placeholder.com/150"
    ],
    [
        "full_name" => "Gita Rahmadhani",
        "study_program" => "Pendidikan Sejarah",
        "ttl" => "Bukit Tandang, 09 Desember 2000",
        "nim" => "19020006",
        "ipk" => "3.95",
        "dad_name" => "Marjoni",
        "mom_name" => "Roswati",
        "from" => "Solok",
        "profile_url" => "https://via.placeholder.com/150"
    ],
    [
        "full_name" => "Radiatul Nisa",
        "study_program" => "Pendidikan PKN",
        "ttl" => "Bogor, 03 Januari 2001",
        "nim" => "19130008",
        "ipk" => "3.95",
        "dad_name" => "Yusri Fauzi",
        "mom_name" => "Gustina",
        "from" => "Kab. Tanggerang",
        "profile_url" => "https://via.placeholder.com/150"
    ],
    [
        "full_name" => "Qurratul 'Aini",
        "study_program" => "Pendidikan Sosioligi",
        "ttl" => "Tanjung Balai Karimun, 17 Juni 2001",
        "nim" => "19070039",
        "ipk" => "3.93",
        "dad_name" => "Marupianto",
        "mom_name" => "Yamsasni",
        "from" => "Karimun, Riau",
        "profile_url" => "https://via.placeholder.com/150"
    ],
    [
        "full_name" => "Andini Adia Fitri",
        "study_program" => "Pendidikan Geografi",
        "ttl" => "Ikan Banyak, 17 Juni 2001",
        "nim" => "19070039",
        "ipk" => "3.93",
        "dad_name" => "Wndri",
        "mom_name" => "Jusna",
        "from" => "Kab. 50 Kota",
        "profile_url" => "https://via.placeholder.com/150"
    ],
    [
        "full_name" => "Vivi Azizah",
        "study_program" => "Pendidikan IPS",
        "ttl" => "Taram, 02 Juni 2000",
        "nim" => "19120004",
        "ipk" => "3.86",
        "dad_name" => "Elpis Suheri",
        "mom_name" => "Yetti",
        "from" => "Kab. Pasaman Barat",
        "profile_url" => "https://via.placeholder.com/150"
    ],
    [
        "full_name" => "Yulistia Rahmi Putri",
        "study_program" => "Pendidikan Bahasa Inggris",
        "ttl" => "Taram, 02 Juni 2000",
        "nim" => "19040001",
        "ipk" => "3.81",
        "dad_name" => "Gusni",
        "mom_name" => "Khaira Wahyuni",
        "from" => "Kota Bukittingi",
        "profile_url" => "https://via.placeholder.com/150"
    ],
    [
        "full_name" => "Yulistia Rahmi Putri",
        "study_program" => "Pendidikan Biologi",
        "ttl" => "Taram, 21 Mei 2001",
        "nim" => "19040001",
        "ipk" => "3.81",
        "dad_name" => "Ngatiman",
        "mom_name" => "Ngalimah",
        "from" => "Kab. Muko-muko",
        "profile_url" => "https://via.placeholder.com/150"
    ],
    [
        "full_name" => "Sri Oktavia",
        "study_program" => "Pendidikan Biologi",
        "ttl" => "Taruang-Taruang, 02 Oktober 2001",
        "nim" => "19100037",
        "ipk" => "3.94",
        "dad_name" => "Edi Idris",
        "mom_name" => "Masneli",
        "from" => "Kab. Solok",
        "profile_url" => "https://via.placeholder.com/150"
    ],
    [
        "full_name" => "Maria Ulfani",
        "study_program" => "Pendidikan Biologi",
        "ttl" => "Kampung Tabu, 02 Juli 1998",
        "nim" => "19110016",
        "ipk" => "3.94",
        "dad_name" => "Muhammad Nasir",
        "mom_name" => "Salma",
        "from" => "Kab. Agam",
        "profile_url" => "https://via.placeholder.com/150"
    ],
    [
        "full_name" => "Wahyu Husni",
        "study_program" => "Pendidikan Biologi",
        "ttl" => "Tandai, 08 November 2000",
        "nim" => "19050019",
        "ipk" => "3.86",
        "dad_name" => "Alwison",
        "mom_name" => "Aslina",
        "from" => "Kab. Solok Selatan",
        "profile_url" => "https://via.placeholder.com/150"
    ],
];
?>
<body>
<div class="relative w-screen">
    <div class="absolute inset-0 bg-contain bg-center"
         style="background-image: url('http://localhost:8000/images/center.png');"></div>
    <div class="absolute inset-0 bg-contain bg-bottom bg-no-repeat"
         style="background-image: url('http://localhost:8000/images/bottom.png');"></div>
    <div class="absolute inset-0 bg-contain bg-top bg-no-repeat"
         style="background-image: url('http://localhost:8000/images/top.png');"></div>
    <div class="relative flex-col inset-0 flex py-28 px-5 space-y-5 items-center justify-center">
        <div class="p-8 rounded-lg text-center">
            <h1 class="text-6xl my-4">Universitas PGRI Sumatera Barat</h1>
            <h4 class="text-2xl">"Mencerahkan dan Menginspirasi Anak Bangsa"</h4>
        </div>
        @for($i = 0; $i < count($dataVideo); $i++)
            <div class="bg-black bg-opacity-50 p-8 rounded-lg">
                <h1 class="text-white text-4xl font-bold mb-4">{{$dataVideo[$i]['title']}}</h1>
                <iframe
                    class="bg-gray-100"
                    width="560"
                    height="315"
                    style="background: #f2f2f2;"
                    src="{{$dataVideo[$i]['embed_url']}}"
                    title="{{$dataVideo[$i]['provider']}} video player"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        @endfor
        <div class="flex-col overflow-x">
            <h1 class="text-white text-4xl font-bold mb-4">Pemuncak Akadmik</h1>
            <table class="table-auto overflow-scroll w-full">
                <thead>
                <tr class="bg-black bg-opacity-50 p-8 rounded-lg">
                    <th>No.</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Tempat, tanggal lahir</th>
                    <th>NIM</th>
                    <th>IPK</th>
                    <th>Ayah</th>
                    <th>Ibu</th>
                    <th>Daerah</th>
                </tr>
                </thead>
                <tbody>
                @for($i = 0, $j = 1; $i < count($dataRank); $i++, $j++)
                    <tr>
                        <td>{{$j}}.</td>
                        <td>
                            <img class="w-11 h-11 shrink-0 grow-0 rounded-full bg-green-300 text-green-700"
                                src="{{$dataRank[$i]['profile_url']}}"
                                alt="{{$dataRank[$i]['full_name'] ?? ''}}"
                                srcset="{{$dataRank[$i]['profile_url']}}">
                        </td>
                        <td>{{$dataRank[$i]['full_name'] ?? ''}}</td>
                        <td>{{$dataRank[$i]['ttl'] ?? ''}}</td>
                        <td>{{$dataRank[$i]['nim'] ?? ''}}</td>
                        <td>{{$dataRank[$i]['ipk'] ?? ''}}</td>
                        <td>{{$dataRank[$i]['dad_name'] ?? ''}}</td>
                        <td>{{$dataRank[$i]['mom_name'] ?? ''}}</td>
                        <td>{{$dataRank[$i]['from'] ?? ''}}</td>
                    </tr>
                @endfor
                </tbody>
            </table>
        </div>
        <a href="https://sit.upgrisba.ac.id/alumni/" target="_blank">Link Survey</a>
    </div>
</div>

</body>

</html>
