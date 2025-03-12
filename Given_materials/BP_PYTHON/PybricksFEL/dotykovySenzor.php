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
            

            <section id="touchSensor">
                <h1>Class TouchSensort(port)</h1>
                <h2>Popis:</h2>
                <p>Třída inicializuje dotykový senzor.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                    <li><var>port</var> –⁠ <var class="typ">[Port]</var> určuje port, na kterém je senzor připojen</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace dotykove senzoru na portu 3</code><br>
                    <b>dot = TouchSensor(Port.S3)</b>
                </code>
            </section>

            <section id="pressed">
                <h1>Function pressed()</h1>
                <h2>Popis:</h2>
                <p>Funkce vrací <var class="typ">bool</var> hodnotu, zda je senzor sepnutý.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                    <li>Tato funkce nemá vstupní parametry.</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace dotykove senzoru na portu 3</code><br>
                    dot = TouchSensor(Port.S3)<br>
                    <code class="koment"># vypise true nebo false, jestli je senzor zmacknuty</code><br>
                    print(<b>dot.pressed()</b>) 
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