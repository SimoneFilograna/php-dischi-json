<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Disk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<body>
    <div id="app">

        <header>
            <div class="container mt-5">
                <h1 class="display-1 text-center">Your favourite Music CD</h1>
            </div>
        </header>

        <main>
            <div class="container mt-5">
                <div class="row row-cols-3">
                    <div class="col g-5" v-for="singDisk in diskList">
                        <div class="card text-center ratio ratio-1x1">
                            <img :src="singDisk.bg_album" class="card-img" alt="">
                            <div class="card-img-overlay d-flex flex-column gap-5 justify-content-center text-light px-2">
                                <h3 class="card-title">{{singDisk.nome_disco}}</h3>
                                <p class="card-text fs-5"> {{singDisk.anno_uscita}} </p>
                                <p class="card-text fs-4">{{singDisk.cantante}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="./main.js"></script>
</body>
</html>