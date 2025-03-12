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
            <section id="run">
                <h1>Function run(speed)</h1>
                <h2>Popis:</h2>
                <p>Funkce roztočí servomotor rychlostí <var>speed</var>. 
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li><var>speed</var> –⁠ <var class="typ">[int]</var> určuje rychlost, jakou se motor bude otáčet v <var class="jedn">deg/s</var></li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace motoru</code><br>
                    mot=Motor(Port.B, Direction.COUNTERCLOCKWISE)<br>
                    <code class="koment"># roztoci moto rychlosti 100 °/s</code><br>
                    <b>mot.run(100)</b><br>  
                    wait(2000)
                </code>
            </section>

            <section id="runTime">
                <h1>Function run_time(speed, time, then=Stop.HOLD, wait=True)</h1>
                <h2>Popis:</h2>
                <p>Funkce roztočí servomotor konstantní rychlostí <var>speed</var> po dobu <var>time</var>. 
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li><var>speed</var> –⁠ <var class="typ">[int]</var> určuje rychlost, jakou se motor bude otáčet v <var class="jedn">°/s</var></li>
                    <li><var>time</var> –⁠ <var class="typ">[int]</var> určuje délku trvání manévru v <var class="jedn">milisekundách</var></li>
                    <li><var>then</var> –⁠ <var class="typ">[Stop]</var> určuje, jestli po zastavení motorů budou motory působit pasivně nebo aktivně proti změně úhlu nebo nebudou působit proti pohybu žádnou silou.</li>
                    <li><var>wait</var> –⁠ <var class="typ">[bool]</var> určuje, zda program čeká na dokončení funkce <var>run_time()</var></li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace motoru</code><br>
                    mot=Motor(Port.B, Direction.COUNTERCLOCKWISE)<br>
                    <code class="koment"># roztoci moto rychlosti 100 °/s po dobu 2 s, po zastaveni motor drzi uhel, program ceka na dokonceni funkce</code><br>
                    <b>mot.run_time(200, 2000,Stop.HOLD, True)</b> <br>
                    wait(3000)
                </code>
            </section>

            <section id="runAngle">
                <h1>Function run_angle(speed, rotation_angle, then=Stop.HOLD, wait=True)</h1>
                <h2>Popis:</h2>
                <p>Funkce roztočí servomotor konstantní rychlostí <var>speed</var> o úhel <var>rotation_angle</var>. 
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li><var>speed</var> –⁠ <var class="typ">[int]</var> určuje rychlost, jakou se motor bude otáčet v <var class="jedn">°/s</var></li>
                    <li><var>rotation_angle</var> –⁠ <var class="typ">[int]</var> určuje úhel <var class="jedn">stupních</var>,
                         o který se motor otočí</li>
                    <li><var>then</var> –⁠ <var class="typ">[Stop]</var> určuje, jestli po zastavení motorů 
                        budou motory působit pasivně nebo aktivně proti změně úhlu nebo nebudou působit proti pohybu žádnou silou.</li>
                    <li><var>wait</var> –⁠ <var class="typ">[bool]</var> určuje, zda program čeká na dokončení funkce <var>run_angle()</var></li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace motoru</code><br>
                    mot=Motor(Port.B, Direction.COUNTERCLOCKWISE)<br>
                    <code class="koment"># roztoci moto rychlosti 100 °/s o uhel 360 °, po zastaveni motor drzi uhel,
                             program ceka na dokonceni funkce</code><br>
                    <b>mot.run_angle(100, 360, then = Stop.HOLD, wait= True)</b><br>
                    wait(1000)
                </code>
            </section>

            <section id="runTarget">
                <h1>Function run_target(speed, target_angle, then=Stop.HOLD, wait=True)</h1>
                <h2>Popis:</h2>
                <p>Funkce roztočí servomotor konstantní rychlostí <var>speed</var>, abychom dosáhli úhlu <var>rotation_angle</var>. 
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li><var>speed</var> –⁠ <var class="typ">[int]</var> určuje rychlost, jakou se motor bude otáčet v <var class="jedn">°/s</var></li>
                    <li><var>target_angle</var> –⁠ <var class="typ">[int]</var> určuje cílený úhel ve 
                        <var class="jedn">stupních</var>, kterého chceme dosáhnout</li>
                    <li><var>then</var> –⁠ <var class="typ">[Stop]</var> určuje, jestli po zastavení motorů 
                        budou motory působit pasivně nebo aktivně proti změně úhlu nebo nebudou působit proti pohybu žádnou silou.</li>
                    <li><var>wait</var> –⁠ <var class="typ">[bool]</var> určuje, zda program čeká na dokončení funkce <var>run_angle()</var></li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace motoru</code><br>
                    mot=Motor(Port.B, Direction.COUNTERCLOCKWISE)<br>
                    <code class="koment"># posun o daný úhel, takře se otočí o 360 stupňů</code><br>
                    mot.run_angle(100, 360, then = Stop.HOLD, wait= True) <br>
                    wait(1000)<br>
                    <code class="koment"># posun <b>NA URCITY</b> uhel, z minuleho funkce jsme na uhlu 360 a my chceme na 370,
                         motor se otoci pouze o 10 stupnu</code><br>
                    <b>mot.run_target(100, 370, then=Stop.HOLD, wait=True)</b>
                </code>
            </section>

            <section id="runUntilStalled">
                <h1>Function run_until_stalled(speed, then=Stop.COAST, duty_limit=None)</h1>
                <h2>Popis:</h2>
                <p>Funkce roztočí servomotor konstantní rychlostí <var>speed</var>, dokud není zastaven vnější silou. Po zastavení vrací úhel motoru 
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li><var>duty</var> –⁠ <var class="typ">[int]</var> určuje rychlost, jakou se motor bude otáčet v <var class="jedn">°/s</var></li>
                    <li><var>then</var> –⁠ <var class="typ">[Stop]</var> určuje, jestli po zastavení motorů budou motory působit pasivně nebo aktivně proti změně úhlu nebo nebudou působit proti pohybu žádnou silou.</li>
                    <li><var>duty_limit</var> –⁠ <var class="typ">[int]</var> určuje, jak velká síla bude považována dostatečnou pro zastavení v <var class="jedn">%</var></li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace motoru</code><br>
                    mot=Motor(Port.B, Direction.COUNTERCLOCKWISE)<br>
                    <code class="koment"># motor se toci rychlosti 200 °/s, dokud neni zastaven vetsi silou,
                         nez dohaze motor vydat v plnem zatizeni, kola se pote volne mohou otacet </code><br>
                    <b>uhel=mot.run_until_stalled(200, then=Stop.COAST, duty_limit=50)</b><br>
                    print(uhel)<code class="koment"># vraci konecny uhel otaceni</code><br>
                </code>
            </section>


            <section id="dc">
                <h1>Function dc(duty)</h1>
                <h2>Popis:</h2>
                <p>Funkce roztočí motor pomocí nastavení procentuálního výkonu. 
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li><var>speed</var> –⁠ <var class="typ">[int]</var> určuje výkon motoru v
                         <var class="jedn">%</var>. Záporné hodnoty využívají stejného výkonu jako jejich kladné ekvivalenty,
                         avšak rotace probíhá na opačnou stranu. </li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace motoru</code><br>
                    mot=Motor(Port.B, Direction.COUNTERCLOCKWISE)<br>
                    <code class="koment"># 50% výkon na opačnou stranu, než je motor definovaný</code><br>
                    <b>mot.dc(-50)</b><br> 
                    wait(1000)
                </code>
            </section>

            <section id="stop">
                <h1>Function stop()</h1>
                <h2>Popis:</h2>
                <p>Funkce zastaví motor, ale dále nepůsobí silou proti změně úhlu.
                     Zastavení je postupné, protože brždění je prováděno pouze pomocí tření.
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li>Tato funkce nemá vstupní parametry. </li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace motoru</code><br>
                    mot=Motor(Port.B, Direction.COUNTERCLOCKWISE)<br>
                    mot.dc(100)<br>
                    wait(2000)<br>
                    <b>mot.stop()</b><br>
                    <code class="koment"># s koly lze volne otacet</code><br>
                    wait(2000)
                </code>
            </section>

            <section id="brake">
                <h1>Function brake()</h1>
                <h2>Popis:</h2>
                <p>Funkce zastaví motor a dále působí pasivní silou proti změně úhlu.
                     Zastavení je téměř okamžité, protože brždění je prováděno pomocí tření a napětí.
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li>Tato funkce nemá vstupní parametry. </li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace motoru</code><br>
                    mot=Motor(Port.B, Direction.COUNTERCLOCKWISE)<br>
                    mot.dc(100)<br>
                    wait(2000)<br>
                    <b>mot.brake()</b><br>
                    <code class="koment"># na kola pusobi mala sila</code><br>
                    wait(2000)
                </code>
            </section>

            <section id="hold">
                <h1>Function hold()</h1>
                <h2>Popis:</h2>
                <p>Funkce zastaví motor a dále udržuje konečný úhel servomotoru.
                     Zastavení je téměř okamžité, protože brždění je prováděno pomocí tření a napětí.
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li>Tato funkce nemá vstupní parametry. </li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace motoru</code><br>
                    mot=Motor(Port.B, Direction.COUNTERCLOCKWISE)<br>
                    mot.dc(100)<br>
                    wait(2000)<br>
                    <b>mot.hold()</b><br>
                    <code class="koment"># kola udrzuji uhel</code><br>
                    wait(2000)
                </code>
            </section>


            <section id="speed">
                <h1>Function speed()</h1>
                <h2>Popis:</h2>
                <p>Funkce vrací rychlost motor ve <var class="jedn">°/s</var>
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li>Tato funkce nemá vstupní parametry. </li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace motoru</code><br>
                    mot=Motor(Port.B, Direction.COUNTERCLOCKWISE)<br>
                    mot.dc(100) <br>
                    wait(2000)<br>
                    <code class="koment"># vypise rychlost motoru</code><br>
                    print(<b>mot.speed()</b>)<br>
                    wait(2000)
                </code>
            </section>

            <section id="angle">
                <h1>Function angle()</h1>
                <h2>Popis:</h2>
                <p>Funkce vrací úhel motor ve <var class="jedn">vstupních</var>
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li>Tato funkce nemá vstupní parametry. </li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace motoru</code><br>
                    mot=Motor(Port.B, Direction.COUNTERCLOCKWISE)<br>
                    mot.dc(100) <br>
                    wait(2000)<br>
                    <code class="koment"># vypise uhel motoru</code><br>
                    print(<b>mot.angle()</b>)<br>
                    wait(2000)
                </code>
            </section>

            <section id="resetAngle">
                <h1>Function reset_angle()</h1>
                <h2>Popis:</h2>
                <p>Funkce změní hodnotu úhlu motoru na hodnotu <var>angle</var>
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                <li><var>angle</var> –⁠ <var class="typ">[int]</var> určuje hodnotu úhlu motoru  v <var class="jedn">stupních</var> po provedení funkce </li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace motoru</code><br>
                    mot=Motor(Port.B, Direction.COUNTERCLOCKWISE)<br>
                    mot.dc(100)<br> 
                    wait(2000)<br>
                    <code class="koment"># nastavi hodnotu uhlu na 20 stupnu</code><br>
                    <b>mot.reset_angle(20)</b><br>
                    print(mot.angle())  <code class="koment"># vypise hodnotu uhlu, cca 20</code><br>
                    wait(2000)
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