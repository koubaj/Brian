<!DOCTYPE html>
<html lang="CS">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="LEGO MINDSTORMS EV3 Pybricks dokumentace documentation MicroPython Python">
    <meta name="description" content="Dokumentace pro použití MicroPythonu a knihovny Pybricks na LEGO MINDSTORMS EV3.
         Documentation for use Micropython and library Pybricks on LEGO MINDSTORMS EV3.">
    <meta name="robots" content="index, follow">
    <meta name="DC.title" content="Dokumentace knihovny Pybricks pro LEGO MINDSTORMS EV3">
    <title>Knihovna Pybricks EV3</title>
    <link rel="stylesheet" href="indexCSS.css">
    
</head>
<body >
    
    <div id="stred">
        <div id="sideBar">
           <!--imporovany sidebar pres JS--> 
           <script src="sideBar.js"></script>
        </div>
        <div id="obsah">
            <img id="backgroundImage" src="logo.svg">
            <!--<p><var>promenna</var>-dela neco v <var class="jedn">jednotkach</var></p>-->
            <section id="Intro">
                <h1>Dokumetace knihovny Pybricks</h1>
                <p>Tento web obsahuje dokumentaci knihovny Pybricks v češtině. Funkce jsou rozděleny do 15 skupiny podle tříd a
                     periférií. Funkce jsou seřazeny tak, aby uživatel se nesetkal s novou funkcí dříve, než je vysvětlena, proto
                    se doporučuje dokumentaci procházet postupně.</p> 
                <p>Každá část knihovny má několik náležitostí. V první řadě obsahuje pojmenování, ze kterého lze zjistit,
                     zda se jedná o třídu nebo funkci. Z názvu lze rozpoznat název entity a parametry, se kterými se volá.
                     Následně je popsán hlavní účel funkce. V popisu jsou začleněny i proměnné, které funkce vrací. 
                     Pokud funkce má vstupní parametry, typ proměnných a jejich význam je rozebrán v dalším odstavci.
                    Funkce jsou dále demonstrovány na ukázkovém kódu, který má za cíl ukázat volání jednotlivých funkcí. 
                    Pokud funkce kreslí na obrazovku EV3, je pod ukázkový kód vložen obrázek, který vznikl provedením ukázkového kódu.</p>
                <h1>Import knihoven</h1>
                <p>Aby všechny dále vložené kódy byly korektně provedeny, je nutné provést na začátku kódu import knihovny.
                     Především si dejte pozor, že je nutné některé třídy knihovny do importu dopsat. Tyto třídy jsou tučne vyznačeny
                      v textu níže. Tyto třídy nejsou zahrnuty v kódu po vytvoření nového projektu ve vývojovém prostředí Visual Studio Code. </p>
                <h2>Vzorový import tříd knihovny:</h2>
                <code><code class="koment">#!/usr/bin/env pybricks-micropython</code><br>
                    from pybricks.hubs import EV3Brick<br>
                    from pybricks.ev3devices import (Motor, TouchSensor, ColorSensor,
                                                    InfraredSensor, UltrasonicSensor, GyroSensor)<br>
                    from pybricks.parameters import Port, Stop, Direction, Button, Color<br>
                    from pybricks.tools import wait, StopWatch, DataLog<br>
                    from pybricks.robotics import DriveBase<br>
                    from pybricks.media.ev3dev import SoundFile, ImageFile<br>
                    from pybricks.messaging import BluetoothMailboxServer, TextMailbox, BluetoothMailboxClient, NumericMailbox<br>
                </code>
                <h1>Autor a doplňující materiály</h1>
                <p>Tento web vznikl jako součást bakalářské práce Adama Jáneše na téma "Uživatelský manuál na použití programovacího jazyka Python pro LEGO MINDSTORMS EV3".
                Bakalářská práce obsahuje kódy a popis řešení 3 regulačních úloh. Úlohy řeší balancování vozíku na plošině, sledování černé čáry
                 a vyhýbání se překážky. Pro zájemce  lze níže nalézt popis funkcí v PDF formátu, bakalářskou práci a návody na sestavení robota,
                 který se v bakalářské práci vyskytoval.
                </p>
                <h2>Dokumentace knihovny Pybricks:</h2>
                <ul>
                <li><a class="downl" href="soubory/Manual.pdf" download> dokumentace v PDF </a>
                <li><a class="downl" href="soubory/Manual.pptx" download> dokumentace v PPTX </a>
                </ul>
                <h2>Bakalářská práce:</h2>
                <ul>
                <li><a class="downl" href="soubory/Bakalářská práce.docx" download> bakalářská práce v DOCX </a>
                <li><a class="downl" href="soubory/Bakalářská práce.pdf" download> bakalářská práce v PDF </a>
                </ul>
                <h2>Instalační manuál:</h2>
                <ul>
                <li><a class="downl" href="soubory/Instalace.pdf" download> návod na instalaci v PDF </a>
                <li><a class="downl" href="soubory/Instalace.mp4" download> videonávod na instalaci </a>
                </ul>
                <h2>Regulátory:</h2>
                <ul>
                <li><a class="downl" href="soubory/Nastavení regulátorů.pptx" > Návod na nastavení regulátorů v PPTX </a>
                </ul>
                <h2>Návody na sestavení robota:</h2>
                <ul>
                <li><a class="downl" href="soubory/RobotCara.pdf" > návod na sestavení robota sledující černou čáru v PDF</a>
                <li><a class="downl" href="soubory/RobotRampa.pdf" > návod na sestavení robota s plošinou v PDF </a>
                <li><a class="downl" href="soubory/Vozík.pdf" > návod na sestavení vozíku na plošinu v PDF </a>
                </ul>
            </section>
            <div id="zapati">
                <script src="footer.js"></script>
            </div>
    </div>
</div>

</body>
</html>