<?php
    $_str = [
        "Dengan nama Allah Yang Maha Pengasih, Maha Penyayang.",
        "Segala puji bagi Allah, Tuhan seluruh alam,",
        "Yang Maha Pengasih, Maha Penyayang,",
        "Pemilik hari pembalasan.",
        "Hanya kepada Engkaulah kami menyembah dan hanya kepada Engkaulah kami mohon pertolongan.",
        "Tunjukilah kami jalan yang lurus,",
        "(yaitu) jalan orang-orang yang telah Engkau beri nikmat kepadanya; bukan (jalan) mereka yang dimurkai, dan bukan (pula jalan) mereka yang sesat.",
    ];

    header('Content-Type: application/json');
    //echo json_encode(array('text' => 'omrele'));
    echo '{"ayat": "'.$_str[rand(0,6)].'"}';
?>