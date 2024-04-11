<?php

    const API_URL = "https://reqres.in/api/users?page=1";

    # cURL, ch = cURL handle
    $ch = curl_init(API_URL);

    // receive the result of req and dont show it in the screen
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($ch);

    $data = json_decode($result, true);

    $curl_close($ch);
?>

<head>
    <meta charset="UTF-8" />
    <title>PHP API</title>
    <meta name="description" content="PHP API" />
    <meta name="viewport" 
        content="width=device-width, initial-scale=1.0" />
</head>

<main>
    <section>
        <img src="<?= $data["avatar"]; ?>" 
            alt="Poster de <?= $data["first_name"]; ?>" 
            width="200"
            style="border-radius: 16px"    
        />
    </section>

    <hgroup>
        <h3>id: <?= $data["id"]; ?></h3>
        <p>Apellido: <?= $data["last_name"]; ?></p>
    </hgroup>
</main>

<style>
    :root {
        color-scheme: light dark;
    }

    main {
        display: grid;
        place-content: center;
    }

    section {
        display: flex;
        justify-content: center;
        text-align: center;
    }

    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    img {
        margin: 0 auto;
    }
</style>