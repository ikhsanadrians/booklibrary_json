<?php

$book = file_get_contents('book.json');
$json = json_decode($book, true);

$json = $json["buku"];

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Project Perpustakaan</title>
    <script src="https://use.fontawesome.com/2b4fa9e5cb.js"></script>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Roboto+Condensed:wght@300;700&family=Smooch+Sans&display=swap');


* {
    font-family: 'Montserrat', sans-serif;

}
</style>

<body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->



    <div class="shadow p-3 mb-5 bg-body rounded" style="height: 100px;">
        <nav class="navbar navbar-light bg-light">
            <div class="container" style="padding-bottom:5px">
                <img src="navbarlogo.png" alt="" height="95 "
                    style="position:absolute; margin-left:-21px; margin-bottom:10px;">

                <a class="navbar-brand" href="#" style="padding-left:60px;">
                    Ojo Keos Bookstore <span style="font-size:15px; display:block">Since 2001</span>
                </a>
                <form class="d-flex" style="margin-right:50px" ;>
                    <input class="form-control me-2" type="search" placeholder="Cari Buku" aria-label="Search">
                    <button class="search" style="border-radius: 5px" ;>Cari</button>
                </form>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                    style="height:40px; position:absolute; margin-left: 1120px;" ; id="buttonnight">
                    <path
                        d="M421.6 379.9c-.6641 0-1.35 .0625-2.049 .1953c-11.24 2.143-22.37 3.17-33.32 3.17c-94.81 0-174.1-77.14-174.1-175.5c0-63.19 33.79-121.3 88.73-152.6c8.467-4.812 6.339-17.66-3.279-19.44c-11.2-2.078-29.53-3.746-40.9-3.746C132.3 31.1 32 132.2 32 256c0 123.6 100.1 224 223.8 224c69.04 0 132.1-31.45 173.8-82.93C435.3 389.1 429.1 379.9 421.6 379.9zM255.8 432C158.9 432 80 353 80 256c0-76.32 48.77-141.4 116.7-165.8C175.2 125 163.2 165.6 163.2 207.8c0 99.44 65.13 183.9 154.9 212.8C298.5 428.1 277.4 432 255.8 432z" />
                </svg>
            </div>
        </nav>
    </div>

    <div class=" container" style="margin:auto">
        <h1>Daftar Buku-Buku </h1>
        <hr>





        <div class="row">
            <?php foreach ($json as $son) : ?>

            <div class="col-md-4 mt-5 ">

                <div class="card col-md-offset-2" style="width: 18rem; ">

                    <img src="img/<?= $son["gambar"] ?>" class="card-img-top" alt="...">
                    <div class="card-body">





                        <h5 class="card-title" style="font-weight:600; font-size:30px;"><?= $son["nama_buku"] ?>

                        </h5>
                        <hr>
                        <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                style="height:18px; padding-right: 7px;">

                                <path
                                    d="M373.5 27.11C388.5 9.885 410.2 0 433 0C476.6 0 512 35.36 512 78.98C512 101.8 502.1 123.5 484.9 138.5L277.7 319L192.1 234.3L373.5 27.11zM255.1 341.7L235.9 425.1C231.9 442.2 218.9 455.8 202 460.5L24.35 510.3L119.7 414.9C122.4 415.6 125.1 416 128 416C145.7 416 160 401.7 160 384C160 366.3 145.7 352 128 352C110.3 352 96 366.3 96 384C96 386.9 96.38 389.6 97.08 392.3L1.724 487.6L51.47 309.1C56.21 293.1 69.8 280.1 86.9 276.1L170.3 256.9L255.1 341.7z" />
                            </svg>

                            </svg></i><?= $son["penulis"] ?></p>
                        <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                style="height:18px; padding-right:10px;">

                                <path
                                    d="M152 64H296V24C296 10.75 306.7 0 320 0C333.3 0 344 10.75 344 24V64H384C419.3 64 448 92.65 448 128V448C448 483.3 419.3 512 384 512H64C28.65 512 0 483.3 0 448V128C0 92.65 28.65 64 64 64H104V24C104 10.75 114.7 0 128 0C141.3 0 152 10.75 152 24V64zM48 448C48 456.8 55.16 464 64 464H384C392.8 464 400 456.8 400 448V192H48V448z" />
                            </svg><?= $son["tahun"] ?></p>
                        <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                style="height:18px; padding-right:10px;">
                                <path
                                    d="M384 96L384 0h-112c-26.51 0-48 21.49-48 48v288c0 26.51 21.49 48 48 48H464c26.51 0 48-21.49 48-48V128h-95.1C398.4 128 384 113.6 384 96zM416 0v96h96L416 0zM192 352V128h-144c-26.51 0-48 21.49-48 48v288c0 26.51 21.49 48 48 48h192c26.51 0 48-21.49 48-48L288 416h-32C220.7 416 192 387.3 192 352z" />
                            </svg><?= $son["kategori"] ?></p>
                    </div>


                </div>
            </div>



            <?php endforeach ?>
        </div>




    </div>

    <br><br><br>


    <script>
    let nightmode = document.getElementById("buttonnight").addEventListener("click", function() {
        alert("tes");

    });
    </script>

</body>



</html>