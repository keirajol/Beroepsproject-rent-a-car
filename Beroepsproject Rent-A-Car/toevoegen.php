<!DOCTYPE html>
<html>
    <head>
        <title>Reserveren</title>
        <link rel="stylesheet" href="toevoegen.css">
        <?php
                
                require('../OOP/DatabaseConnection.php');
                $dbConnect = new DatabaseConnection("localhost", "rent_a_car", "root", "");
                $dbConnect->connect();
        
                require('../OOP/LayoutConventions.php');
                $getLayout = new LayoutConventions();
                
        ?>
    </head>
    <body>
    <?php
    $getLayout->getNavbarHead();
    ?>
        <div class="auto">

            <div class="row-1">
                <div class="auto-blokken">
                    <div class="toevoegen">
                        <img src="" alt="toevoegen" id="plus">
</div>
</div>
                <div class="auto-blokken">
            <div class="car-1">
                <h2>2022 BMW X3 ( G01 ) xDrive30d</h2>
                <img src="../IMG/bmw.jpg" alt="BMW-FOTO" id="bmw_pic" class="cars">
                <p class="informatie">€2570,- per dag<br></p>

                <button class="reserveren" type="button">Reserveer hier</button>
            </div>
            </div>
            <div class="auto-blokken">
            <div class="car-2">
                <h2>2021 Ferrari F8 spider by Novitec N-Largo</h2>
                <img src="../IMG/ferrari-f8-spider-by-novitec-n-largo-2021-649648.jpg" alt="spider-FOTO" id="spider_pic" class="cars">
                <p class="informatie">€3230,- per dag<br></p>
                <button class="reserveren" type="button">Reserveer hier</button>
            </div>
            </div>
            <div class="auto-blokken">
            <div class="car-3">
                <h2>2022 Audi R8 coupé V10 performance RWD</h2>
                <img src="../IMG/audi-r8-coupe-v10-performance-rwd-2022-646864.jpg" alt="audi-FOTO" id="audi_pic" class="cars">
                <p class="informatie">€2730,- per dag<br></p>
                <button class="reserveren" type="button">Reserveer hier</button>
            </div>
            </div>

            </div>

            <div class="row-2">
            <div class="auto-blokken">
            <div class="car-4">
                <h2>2021 Jeep Compass 80th Anniversary</h2>
                <img src="../IMG/jeep-compass-80th-anniversary-2021-626869.jpg" alt="jeep-FOTO" id="jeep_pic" class="cars">
                <p class="informatie">€2765,- per dag<br></p>
                <button class="reserveren" type="button">Reserveer hier</button>
            </div>
            </div>
                <div class="auto-blokken">
                <div class="car-5">
                    <h2>2022 Toyota Tundra 1794 Edition</h2>
                    <img src="../IMG/toyota-tundra-sr5-trd-2022-650062.jpg" alt="Toyota-FOTO" id="toyota_pic" class="cars">
                    <p class="informatie">€2365,- per dag<br></p>
                    <button class="reserveren" type="button">Reserveer hier</button>
                </div>
                </div>
                <div class="auto-blokken">
                <div class="car-6">
                    <h2>2022 Porsche 718 Cayman GT4 RS</h2>
                    <img src="../IMG/porsche-718-cayman-gt4-rs-2022-651513.jpg" alt="porsche-FOTO" id="porsche_pic" class="cars">
                    <p class="informatie">€3165,- per dag<br></p>
                    <button class="reserveren" type="button">Reserveer hier</button>
                </div>
                </div>
                <div class="auto-blokken">
                <div class="car-7">
                    <h2>2020 alfa romeo 4c spider</h2>
                    <img src="../IMG/alfa-romeo.jpg" alt="alfa-FOTO" id="alfa_pic" class="cars">
                    <p class="informatie">€2985,- per dag<br></p>
                    <button class="reserveren" type="button">Reserveer hier</button>
                </div>
                </div>

            </div>

            <div class="row-3">
            <div class="auto-blokken">
                <div class="car-8">
                    <h2>2022 Toyota highlander hybrid</h2>
                    <img src="../IMG/toyota.jpg" alt="toyota-2-FOTO" id="toyota-2_pic" class="cars">
                    <p class="informatie">€2450,- per dag<br></p>
                    <button class="reserveren" type="button">Reserveer hier</button>
                </div>
                </div>
                <div class="auto-blokken">
                <div class="car-9">
                    <h2>2021 Dodge Charger SRT Hellcat Redeye Widebody</h2>
                    <img src="../IMG/Redeye-Kendall-Dodge.jpg" alt="redeye-FOTO" id="redeye_pic" class="cars">
                    <p class="informatie">€2765,- per dag<br></p>
                    <button class="reserveren" type="button">Reserveer hier</button>
                </div>
                </div>
                <div class="auto-blokken">
                    <div class="car-10">
                        <h2>MClaren Artura PHEV hybrid</h2>
                        <img src="../IMG/mclaren-p1-hybride.jpg" alt="mclaren-FOTO" id="mclaren_pic" class="cars">
                        <p class="informatie">€3005,- per dag<br></p>
                        <button class="reserveren" type="button">Reserveer hier</button>
                    </div>
                    </div>
                    <div class="auto-blokken">
                        <div class="car-11">
                            <h2>Porsche cayenne limousine</h2>
                            <img src="../IMG/limo.jfif" alt="limo-FOTO" id="limo_pic" class="cars">
                            <p class="informatie">€3665,- per dag<br></p>
                            <button class="reserveren" type="button">Reserveer hier</button>
                        </div>
                        </div>

            </div>

            <div class="row-4">
            <div class="auto-blokken">
                            <div class="car-12">
                                <h2>2020 Audi R8 V10</h2>
                                <img src="../IMG/audi.jpg" alt="audi-2-FOTO" id="audi-2_pic" class="cars">
                                <p class="informatie">€2365,- per dag<br></p>
                                <button class="reserveren" type="button">Reserveer hier</button>
                            </div>
                            </div>
            </div>

        </div>
        <?php
        $getLayout->getNavbarFoot();
        ?>
    </body>
</html>