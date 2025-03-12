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

            <section id="dataLog">
                <h1>Class DataLog(*headers, name='log', timestamp=True, extension='csv', append=False)</h1>
                <h2>Popis:</h2>
                <p>Třída vytvoří nový soubor.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                    <li><var>*header </var> –⁠ <var class="typ">[str]</var> určuje jména sloupců, která se v souboru vytvoří</li>
                    <li><var>name</var> –⁠ <var class="typ">[str]</var> určuje název souboru</li>
                    <li><var>timestamp</var> –⁠ <var class="typ">[bool]</var> určuje,
                         zda má být za název přidána informace o datu a času</li>
                    <li><var>extension</var> –⁠ <var class="typ">[str]</var> určuje příponu souboru</li>
                    <li><var>append</var> –⁠ <var class="typ">[bool]</var> určuje, zda má být existující soubor otevřen,
                         nebo nahrazen</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># vytvoreni souboru 'cas.csv' </code><br>
                    <b>data = DataLog('cas', 'uhel',name='rozbehMotoru', timestamp=False, extension='csv', append='False')</b>
                </code>
            </section>

            <section id="log">
                <h1>Function log(*values)</h1>
                <h2>Popis:</h2>
                <p>Funkce vytvoří záznam v souboru na nový řádek.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                    <li><var>*values</var> –⁠ <var class="typ">[objects]</var> určuje, jaké hodnoty budou zapsány na jeden řádek</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># vytvoreni souboru 'cas.csv' </code><br>
                    data = DataLog('cas', 'uhel',name='rozbehMotoru', timestamp=False, extension='csv', append='False')<br>
                    mot = Motor(Port.B)<br>
                    mot.run(500)<br>
                    stopky = StopWatch()<br>
                    for i in range(50):<br>
                    &#8197&#8197uhel = mot.angle()<br>
                    &#8197&#8197cas = stopky.time()<br>
                    &#8197&#8197<code class="koment"># zapsani aktualniho casu a uhlu do souboru </code><br>
                    <b>&#8197&#8197data.log(cas, uhel)</b><br>
                    &#8197&#8197wait(100)

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