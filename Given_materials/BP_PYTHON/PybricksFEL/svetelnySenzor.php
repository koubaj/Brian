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
            <section id="colorSensor">
                <h1>Class ColorSensor(port)</h1>
                <h2>Popis:</h2>
                <p>Třída inicializuje světelný senzor.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                    <li><var>port</var> –⁠ <var class="typ">[Port]</var> určuje port, na kterém je senzor připojen</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace svetelneho senzoru na portu 2</code><br>
                    <b>c=ColorSensor(Port.S2)</b>
                </code>
            </section>

            <section id="color">
                <h1>Function color()</h1>
                <h2>Popis:</h2>
                <p>Funkce vrací hodnotu typu <var class="typ">Color</var>. Hodnota určuje barvu povrchu, na který senzor míří.
                 Pokud barva nebyla rozeznána, funkce vrací hodnotu <var class="typ">None</var></p>
                <h2>Proměnné třídy:</h2>
                <ul>
                    <li>Tato funkce nemá vstupní parametry.</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace svetelneho senzoru na portu 2</code><br>
                    c=ColorSensor(Port.S2)<br>
                    <code class="koment"># vypise barvu povrchu</code><br>
                    print(<b>c.color()</b>)
                </code>
            </section>

            <section id="ambient">
                <h1>Function ambient()</h1>
                <h2>Popis:</h2>
                <p>Funkce vrací hodnotu okolního osvětlení v<var class="jedn"> %</var>.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                    <li>Tato funkce nemá vstupní parametry.</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace svetelneho senzoru na portu 2</code><br>
                    c=ColorSensor(Port.S2)<br>
                    <code class="koment"># vypise intenzitu okolniho osvetleni</code><br>
                    print(<b>c.ambient()</b>)
                </code>
            </section>

            <section id="reflection">
                <h1>Function reflection()</h1>
                <h2>Popis:</h2>
                <p>Funkce vrací hodnotu odražených paprsků červeného světla v<var class="jedn"> %</var>.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                    <li>Tato funkce nemá vstupní parametry.</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace svetelneho senzoru na portu 2</code><br>
                    c=ColorSensor(Port.S2)<br>
                    <code class="koment"># vypise odrazivost cerveneho svetla od povrchu</code><br>
                    print(<b>c.reflection()</b>)
                </code>
            </section>

            <section id="rgb">
                <h1>Function rgb()</h1>
                <h2>Popis:</h2>
                <p>Funkce vrací hodnoty odražených paprsků červeného, zeleného a modrého světla v <var class="jedn">%</var>.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                    <li>Tato funkce nemá vstupní parametry.</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace svetelneho senzoru na portu 2</code><br>
                    c=ColorSensor(Port.S2)<br>
                    <code class="koment"># vraci odrazivost barev jako trojici cisel [R,G,B]</code><br>
                    print(<b>c.rgb()</b>)
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