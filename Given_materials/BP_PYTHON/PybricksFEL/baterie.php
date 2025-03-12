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
            <section id="voltage">
                <h1>Function battery.voltage()</h1>
                <h2>Popis:</h2>
                <p>Funkce vrací hodnotu napětí baterie v <var class="jedn">milivoltech</var>.
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li>Tato funkce nemá vstupní parametr</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace tridy EV3Brick</code><br>
                    ev3 = EV3Brick()<br>
                    <code class="koment"># vypise napeti baterie</code><br>
                    print(<b>ev3.battery.voltage()</b>)
                </code>
            </section>

            <section id="current">
                <h1>Function battery.current()</h1>
                <h2>Popis:</h2>
                <p>Funkce vrací hodnotu proudu baterie v <var class="jedn">miliamperech</var>.
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li>Tato funkce nemá vstupní parametr</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace tridy EV3Brick</code><br>
                    ev3 = EV3Brick()<br>
                    <code class="koment"># vypise proud baterie</code><br>
                    print(<b>ev3.battery.current()</b>)
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