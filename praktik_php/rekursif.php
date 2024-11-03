<?php
function tampilkanMenuBertingkat(array $menu) {
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li>{$item['nama']}";

        if (isset($item['subMenu'])) {
           
            tampilkanMenuBertingkat($item['subMenu']);
        }

        echo "</li>"; // Tutup tag <li> dengan benar
    }
    echo "</ul>";
}
?>

<?php

$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita", 
        "subMenu" => [
            [
                "nama" => "Wisata", 
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ]
];

// Panggil fungsi untuk menampilkan menu
tampilkanMenuBertingkat($menu);
?>
