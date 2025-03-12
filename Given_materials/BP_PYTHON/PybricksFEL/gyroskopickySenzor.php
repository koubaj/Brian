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
            <section id="gyroSensor">
                <h1>Class gyroSensor(port, positive_direction=Direction.CLOCKWISE)</h1>
                <h2>Popis:</h2>
                <p>Třída inicializuje gyroskopický senzor.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                    <li><var>port</var> –⁠ <var class="typ">[Port]</var> určuje port, na kterém je senzor připojen</li>
                    <li><var>positive_direction</var> –⁠ <var class="typ">[Direction]</var> určuje kladný směr rotace</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace  gyroskopickeho senzoru na portu 3</code><br>
                    <b>g=GyroSensor(Port.S3)</b>
                </code>
            </section>

            <section id="angle">
                <h1>Function angle()</h1>
                <h2>Popis:</h2>
                <p>Funkce vrací úhel gyroskopického senzoru ve <var class="jedn">stupních</var>.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                    <li>Tato funkce nemá vstupní parametry.</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace  gyroskopickeho senzoru na portu 3</code><br>
                    g=GyroSensor(Port.S3)<br>
                    <code class="koment"># vypise uhel gyroskopickeho senzoru</code><br>
                    print(<b>g.angle()</b>)
                </code>
            </section>

            <section id="speed">
                <h1>Function speed()</h1>
                <h2>Popis:</h2>
                <p>Funkce vrací úhlovou rychlost gyroskopického senzoru ve <var class="jedn">°/s</var>.
                 Při zavolání funkce <var>speed()</var> se vynuluje úhel senzoru,
                  proto není vhodné využívat tyto funkce ve stejném kódu</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                    <li>Tato funkce nemá vstupní parametry.</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace  gyroskopickeho senzoru na portu 3</code><br>
                    g=GyroSensor(Port.S3)<br>
                    <code class="koment"># vypise uhlovou rychlost gyroskopickeho senzoru</code><br>
                    print(<b>g.speed()</b>)
                </code>
            </section>

            <section id="resetAngle">
                <h1>Function reset_angle(angle)</h1>
                <h2>Popis:</h2>
                <p>Funkce změní úhel gyroskopického senzoru na hodnotu <var>angle</var>.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                    <li><var>angle</var> –⁠ <var class="typ">[int]</var> určuje port, na kterém je senzor připojen</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace  gyroskopickeho senzoru na portu 3</code><br>
                    g=GyroSensor(Port.S3)<br>
                    <code class="koment"># zmeni hodnotu uhlu na 100°</code><br>
                    <b>g.reset_angle(100)</b> <br>
                    print(g.angle())
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