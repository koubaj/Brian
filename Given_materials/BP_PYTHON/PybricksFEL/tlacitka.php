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
            <section id="pressed">
                <h1>Function buttons.pressed()</h1>
                <h2>Popis:</h2>
                <p>Funkce vrací seznam zmáčknutých tlačítek ve formátu Button.</p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li>Tato funkce nemá vstupní parametry</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace tridy EV3Brick</code><br>
                    ev3 = EV3Brick()<br>
                    tlacitka=<b>ev3.buttons.pressed()</b><br>
                    <code class="koment"># vrati napriklad [Button.CENTER]</code><br>
                    print(tlacitka)
                    

                </code>
            </section>

            <section id="lightOn">
                <h1>Function light.on(color)</h1>
                <h2>Popis:</h2>
                <p>Funkce zapne podsvícení tlačítek na kostce EV3. Dostupné barvy jsou {zelená, žlutá, oranžová, červená}.
                    Pokud je zvolena jiná barva, podstvícení bude vypnuto.
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li><var>color</var> –⁠ <var class="typ">[Color]</var> určuje barvu podsvícení </li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace tridy EV3Brick</code><br>
                    ev3 = EV3Brick()<br>
                    <code class="koment"># zapne podstviceni cervene barvy</code><br>
                    <b>ev3.light.on(Color.RED)</b><br>
                    wait(5000)
                </code>
            </section>

            <section id="lightOff">
                <h1>Function light.off()</h1>
                <h2>Popis:</h2>
                <p>Funkce vypne podsvícení tlačítek na kostce EV3.</p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li>Tato funkce nemá vstupní parametry </li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace tridy EV3Brick</code><br>
                    ev3 = EV3Brick()<br>
                    <code class="koment"># vypne podsviceni tlacitek</code><br>
                    ev3.light.off()<br>
                    wait(5000)<br>
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