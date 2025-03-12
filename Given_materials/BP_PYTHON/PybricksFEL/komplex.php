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
    
    <!--
    <div id="topBar">
        <a class="active" href=#>polozka1</a>
        <a href=#>polozka2</a>
        <a href=#>polozka3</a>
        <a href=#>polozka4</a>
        <a href=#>polozka5</a>
    </div>
-->
<!-- &#8197;   tabulator-->
    <div id="stred">
        <div id="sideBar">
           <!--imporovany sidebar pres JS--> 
           <script src="sideBar.js"></script>
        </div>
        <div id="obsah">
            <img id="backgroundImage" src="logo.svg">
            <!--<p><var>promenna</var>-dela neco v <var class="jedn">jednotkach</var></p>-->

            <section id="driveBase">
                <h1>Class DriveBase(left_motor, right_motor, wheel_diameter, axle_track)</h1>
                <h2>Popis:</h2>
                <p>Třída inicializuje komplexní řízení celého robota.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                    <li><var>left_motor</var> –⁠ <var class="typ">[Class]</var> určuje třídu pro levý motor robota</li>
                    <li><var>right_motor</var> –⁠ <var class="typ">[Class]</var> určuje třídu pro pravý motor robota</li>
                    <li><var>wheel_diameter</var> –⁠ <var class="typ">[int]</var> určuje průměr kol v 
                        <var class="jedn"> milimetrech</var></li>
                    <li><var>axle_track</var> –⁠ <var class="typ">[int]</var> určuje vzdálenost mezi body dotyku kol se zemí
                         v<var class="jedn"> milimetrech</var></li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    motR=Motor(Port.B, Direction.CLOCKWISE)<br>
                    motL=Motor(Port.C, Direction.CLOCKWISE)<br>
                    <code class="koment"># inicializace rizeni robota s 2 motory, polomerem kola 68.7 mm a 169 mm vzdalenosti kol </code><br>
                    <b>rob=DriveBase(motL, motR, 68.7, 169)</b>
                </code>
            </section>

            <section id="straight">
                <h1>Function straight(distance)</h1>
                <h2>Popis:</h2>
                <p>Robot ujede vzdálenost <var>distance</var> bez zatáčení.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                    <li><var>distance</var> –⁠ <var class="typ">[int]</var> určuje vzdálenost v <var class="jedn">milimetrech</var>,
                     která má být robotem uražena</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    motR=Motor(Port.B, Direction.CLOCKWISE)<br>
                    motL=Motor(Port.C, Direction.CLOCKWISE)<br>
                    <code class="koment"># inicializace rizeni robota s 2 motory,
                         polomerem kola 68.7 mm a 169 mm vzdalenosti kol </code><br>
                    rob=DriveBase(motL, motR, 68.7, 169)<br>
                    <code class="koment"># urazi 1000 milimetru </code><br>
                    <b>rob.straight(1000)</b>
                </code>
            </section>

            <section id="turn">
                <h1>Function turn(angle)</h1>
                <h2>Popis:</h2>
                <p>Robot se otočí na místě o úhel <var>angle</var>.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                    <li><var>angle</var> –⁠ <var class="typ">[int]</var> určuje úhel otočení ve <var class="jedn">stupních</var></li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    motR=Motor(Port.B, Direction.CLOCKWISE)<br>
                    motL=Motor(Port.C, Direction.CLOCKWISE)<br>
                    <code class="koment"># inicializace rizeni robota s 2 motory,
                         polomerem kola 68.7 mm a 169 mm vzdalenosti kol </code><br>
                    rob=DriveBase(motL, motR, 68.7, 169)<br>
                    <code class="koment"># otoci se o 360 °</code><br>
                    <b>rob.turn(360)</b>
                </code>
            </section>

            <section id="drive">
                <h1>Function drive(drive_speed, turn_rate)</h1>
                <h2>Popis:</h2>
                <p>Robot se pohybuje rychlostí <var>drive_speed</var> dopředu a otáčí se rychlostí <var>turn_rate</var>.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                    <li><var>drive_speed</var> –⁠ <var class="typ">[int]</var> určuje rychlost pohybu robota v <var class="jedn">mm/s</var></li>
                    <li><var>turn_rate</var> –⁠ <var class="typ">[int]</var> určuje rychlost otáčení robota v <var class="jedn">°/s</var></li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    motR=Motor(Port.B, Direction.CLOCKWISE)<br>
                    motL=Motor(Port.C, Direction.CLOCKWISE)<br>
                    <code class="koment"># inicializace rizeni robota s 2 motory,
                         polomerem kola 68.7 mm a 169 mm vzdalenosti kol </code><br>
                    rob=DriveBase(motL, motR, 68.7, 169)<br>
                    <code class="koment"># jede rychlosti 100 mm/s a otaci se rychlosti 20 °/s</code><br>
                    <b>rob.drive(100,20)</b>
                </code>
            </section>

            <section id="settings">
                <h1>Function settings(straight_speed, straight_acceleration, turn_rate, turn_acceleration)</h1>
                <h2>Popis:</h2>
                <p>Funkce nastaví maximální rychlost a zrychlení translačního a rotačního pohybu.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                    <li>Tato funkce nemá vstupní parametry.</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    motR=Motor(Port.B, Direction.CLOCKWISE)<br>
                    motL=Motor(Port.C, Direction.CLOCKWISE)<br>
                    <code class="koment"># inicializace rizeni robota s 2 motory,
                         polomerem kola 68.7 mm a 169 mm vzdalenosti kol </code><br>
                    rob=DriveBase(motL, motR, 68.7, 169)<br>
                    <code class="koment"># omezi maximalni rychlosti a zrychleni</code><br>
                    <b>rob.settings(150,50,80,30)</b><br>
                    rob.turn(360) # otoc se na miste o 360 stupnu
                </code>
            </section>


            <section id="stop">
                <h1>Function stop()</h1>
                <h2>Popis:</h2>
                <p>Funkce zastaví robota, po zastavení se kola mohou volně otáčet.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                    <li>Tato funkce nemá vstupní parametry</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    motR=Motor(Port.B, Direction.CLOCKWISE)<br>
                    motL=Motor(Port.C, Direction.CLOCKWISE)<br>
                    <code class="koment"># inicializace rizeni robota s 2 motory,
                         polomerem kola 68.7 mm a 169 mm vzdalenosti kol </code><br>
                    rob=DriveBase(motL, motR, 68.7, 169)<br>
                    rob.drive(70,-10)<br>
                    wait(1000)<br>
                    <code class="koment"># zastavi robota </code><br>
                    <b>rob.stop()</b><br>
                    wait(2000)
                </code>
            </section>

            <section id="reset">
                <h1>Function reset()</h1>
                <h2>Popis:</h2>
                <p>Funkce vynuluje uraženou vzdálenost a rotaci robota.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                <li>Tato funkce nemá vstupní parametry</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    motR=Motor(Port.B, Direction.CLOCKWISE)<br>
                    motL=Motor(Port.C, Direction.CLOCKWISE)<br>
                    <code class="koment"># inicializace rizeni robota s 2 motory,
                         polomerem kola 68.7 mm a 169 mm vzdalenosti kol </code><br>
                    rob=DriveBase(motL, motR, 68.7, 169)<br>
                    rob.drive(70,-10)<br>
                    wait(1000)<br>
                    rob.stop()<br>
                    wait(2000)<br>
                    <code class="koment"># vynuluje urazenou vzdalenost a uhel robota </code><br>
                    <b>rob.reset()</b><br>
                    print(rob.distance())
                </code>
            </section>

            <section id="distance">
                <h1>Function distance()</h1>
                <h2>Popis:</h2>
                <p>Funkce vrací uraženou vzdálenost v <var class="jedn">milimetrech</var> od posledního zavolání
                 funkce <var>reset()</var> nebo od začátku kódu.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                <li>Tato funkce nemá vstupní parametry</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    motR=Motor(Port.B, Direction.CLOCKWISE)<br>
                    motL=Motor(Port.C, Direction.CLOCKWISE)<br>
                    <code class="koment"># inicializace rizeni robota s 2 motory,
                         polomerem kola 68.7 mm a 169 mm vzdalenosti kol </code><br>
                    rob=DriveBase(motL, motR, 68.7, 169)<br>
                    rob.drive(70,-10)<br>
                    wait(1000)<br>
                    rob.stop()<br>
                    wait(2000)<br>
                    <code class="koment"># vypise urazenou vzdalenost</code><br>
                    print(<b>rob.distance()</b>)<br>
                    rob.reset()<br>
                    print(<b>rob.distance()</b>)<br>
                </code>
            </section>


            <section id="angle">
                <h1>Function angle()</h1>
                <h2>Popis:</h2>
                <p>Funkce vrací úhel ve <var class="jedn">stupních</var>, o který se robot otočil od posledního zavolání funkce
                    <var>reset()</var> nebo od začátku kódu.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                <li>Tato funkce nemá vstupní parametry</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    motR=Motor(Port.B, Direction.CLOCKWISE)<br>
                    motL=Motor(Port.C, Direction.CLOCKWISE)<br>
                    <code class="koment"># inicializace rizeni robota s 2 motory,
                         polomerem kola 68.7 mm a 169 mm vzdalenosti kol </code><br>
                    rob=DriveBase(motL, motR, 68.7, 169)<br>
                    rob.drive(70,-10)<br>
                    wait(1000)<br>
                    rob.stop()<br>
                    wait(2000)<br>
                    <code class="koment"># vypise uhel robota</code><br>
                    print(<b>rob.angle()</b>)<br>
                    rob.reset()<br>
                    print(<b>rob.angle()</b>)<br>
                </code>
            </section>


            <section id="state">
                <h1>Function state()</h1>
                <h2>Popis:</h2>
                <p>Funkce vrací 4 hodnoty v poli. Hodnoty označují uraženou vzdálenost v <var class="jedn">milimetrech</var>,
                 rychlost translace v <var class="jedn">mm/s</var>, úhel robota ve <var class="jedn"> stupních</var> a
                  rychlost rotace ve <var class="jedn">°/s</var>.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                <li>Tato funkce nemá vstupní parametry</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    motR=Motor(Port.B, Direction.CLOCKWISE)<br>
                    motL=Motor(Port.C, Direction.CLOCKWISE)<br>
                    <code class="koment"># inicializace rizeni robota s 2 motory,
                         polomerem kola 68.7 mm a 169 mm vzdalenosti kol </code><br>
                    rob=DriveBase(motL, motR, 68.7, 169)<br>
                    rob.drive(70,-10)<br>
                    wait(1000)<br>
                    rob.stop()<br>
                    wait(2000)<br>
                    <code class="koment"># vypise info o robotovi</code><br>
                    print(<b>rob.state()</b>)
                </code>
            </section>


            <div id="zapati">
                <script src="footer.js"></script>
            </div>


        </div>
    </div>


    <script src="indexJS.js"></script>
</body>
</html>