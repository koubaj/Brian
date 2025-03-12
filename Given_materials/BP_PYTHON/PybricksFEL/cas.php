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
            <section id="wait">
                <h1>Function wait(time)</h1>
                <h2>Popis:</h2>
                <p>Funkce pozastaví běh programu na dobu <var>time</var>
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li><var>time</var> –⁠ <var class="typ">[int]</var> určuje délku pozastavení programu v <var class="jedn">milisekundách</var></li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace motoru</code><br>
                    mot=Motor(Port.B)<br>
                    <code class="koment"># toci rychlosti 100deg/s, dokud neskonci kód nebo neprobehne prikaz pracujicc se servomotorem</code><br>
                    mot.run(100)<br>
                    <code class="koment"># pozastaveni prubehu programu na 100 ms</code><br>
                    <b>wait(100)</b> <br>
                    <code class="koment"># ukonci se program, motor se zastavi</code>
                </code>
            </section>

            <section id="time">
                <h1>Function time()</h1>
                <h2>Popis:</h2>
                <p>Funkce vrací uplynulý čas od inicializace třídy <var>StopWatch</var>. Vrácený čas je v <var class="jedn"> milisekundách</var>
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li>Tato funkce nemá vstupní parametry.</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace stopek (od teto chvile bezi cas)</code><br>
                    s=StopWatch()<br>
                    wait(100)<br>
                    <code class="koment"># vypise soucasny cas ,tedy kolem 100 ms</code><br>
                    print(<b>s.time()</b>) 

                </code>
            </section>

            <section id="pause">
                <h1>Function pause()</h1>
                <h2>Popis:</h2>
                <p>Funkce pozastaví měření času třídou <var>StopWatch</var>.
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li>Tato funkce nemá vstupní parametry.</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace stopek (od teto chvile bezi cas)</code><br>
                    s=StopWatch() <br>
                    wait(100)<br>
                    <code class="koment"># vypise soucasny cas ,tedy kolem 100 ms</code><br>
                    print(s.time())<br>
                    <code class="koment"># pozastavi mereni casu</code><br> 
                    <b>s.pause()</b> <br>
                    <code class="koment"># tento cas se nezapocitava</code><br> 
                    wait(50) <br>
                    <code class="koment"># vypise stejny nebo velmi blizky cas k prvnimu vypisu</code><br> 
                    print(s.time()) 
                </code>
            </section>

            <section id="resume">
                <h1>Function resume()</h1>
                <h2>Popis:</h2>
                <p>Funkce zajistí pokračování měření času třídou <var>StopWatch</var>.
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li>Tato funkce nemá vstupní parametry.</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace stopek (od teto chvile bezi cas)</code><br>
                    s=StopWatch()<br>
                    wait(100)<br>
                    print(s.time() ) <code class="koment"># vypise soucasny cas ,cca 100 ms</code><br>
                    s.pause() <code class="koment"># pozastavi mereni casu</code><br>
                    wait(50) <code class="koment"># tento cas se nezapocitava</code><br>
                    <b>s.resume()</b> <code class="koment"># pokracovani mereni casu</code><br>
                    wait(30)<br>
                    print(s.time()) <code class="koment"># vypise soucasny cas ,cca 130 ms</code><br>
                </code>
            </section>

            <section id="reset">
                <h1>Function reset()</h1>
                <h2>Popis:</h2>
                <p>Funkce vynuluje čas třídy <var>StopWatch</var>. Pokud je čas pozastaven, zůstane pozastaven.
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li>Tato funkce nemá vstupní parametry.</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace stopek (od teto chvile bezi cas)</code><br>
                    s=StopWatch()<br>
                    wait(100)<br>
                    print(s.time())<code class="koment"> # vypise soucasny cas ,cca 100 ms</code><br>
                    <b>s.reset()</b> <code class="koment"># vynuluje mereni casu</code> <br>
                    wait(20) <br>
                    print(s.time()) <code class="koment"># vypise soucasny cas od posledniho vynulovani ,cca 20 ms</code>
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