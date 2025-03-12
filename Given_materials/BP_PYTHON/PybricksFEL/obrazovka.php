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
            <section id="drawText">
                <h1>Function screen.draw_text(x, y, text, text_color=Color.BLACK , background_color=None)</h1>
                <h2>Popis:</h2>
                <p>Funkce zakreslí text na danou pozici. 
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li><var>x</var> –⁠ <var class="typ">[int]</var> určuje vodorovnou souřadnici umístění textu</li>
                    <li><var>y</var> –⁠ <var class="typ">[int]</var> určuje svislou souřadnici umístění textu </li>
                    <li><var>text</var> –⁠ <var class="typ">[str]</var> určuje text, který bude vyspán </li>
                    <li><var>text_color</var> –⁠ <var class="typ">[Color]</var> určuje barvu textu </li>
                    <li><var>background_color</var> –⁠ <var class="typ">[Color]</var> určuje barvu pozadí </li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace tridy EV3Brick</code><br>
                    ev3 = EV3Brick()<br>
                    <code class="koment"># vypise 'ahoj' na pozici [0,50] bilym textem na cernem pozadi</code><br>
                    <b>ev3.screen.draw_text(0,50, "ahoj",Color.WHITE, Color.BLACK)</b><br>
                    wait(2000)

                </code>
                <h2>Výsledek kódu:</h2>
                <img class="funkce" src="obr/obr.png" alt="výsledek funkce">
            </section>

            <section id="print">
                <h1>Function screen.print(*args, sep=' ', end='\n')</h1>
                <h2>Popis:</h2>
                <p>Funkce vypíše text na obrazovku. 
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li><var>*args</var> –⁠ <var class="typ">[object]</var> určuje objekty, jejichž hodnoty se mají vypsat</li>
                    <li><var>sep</var> –⁠ <var class="typ">[str]</var> určuje znaky, které rozdělují 2 vypsané objekty </li>
                    <li><var>end</var> –⁠ <var class="typ">[str]</var> určuje znaky, které budou vypsány za posledním objektem </li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace tridy EV3Brick</code><br>
                    ev3 = EV3Brick()<br>
                    <code class="koment"># ukazka scrollovani vypisu</code><br>
                    for i in range(10):<br>
                    &#8197&#8197<b>ev3.screen.print("ahoj",i,sep='=',end='\n-')</b><br>
                    wait(500)<br>
                    <code class="koment"># tento text nebude zobrazen cely</code><br>
                    <b>ev3.screen.print("ahoj, jak se mas? Co delas?")</b> <br>
                    wait(2000)
                </code>
                <h2>Výsledek kódu:</h2>
                <img class="funkce" src="obr/obr2.png" alt="výsledek funkce">
            </section>

            <section id="setFont">
                <h1>Function screen.set_font(font)</h1>
                <h2>Popis:</h2>
                <p>Funkce změní styl písma.
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li><var>font</var> –⁠ <var class="typ">[Font]</var> určuje proměnnou obsahující vlastnosti písma</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace tridy EV3Brick</code><br>
                    ev3 = EV3Brick()<br>
                    <code class="koment"># vytvoreni fontu</code><br>                
                    tiny_font = Font(size=6)<br>
                    big_font = Font(size=24, bold=True)<br>
                    ev3.screen.print('Hello!')<br>
                    <code class="koment"># nastaveni fontu</code><br>    
                    <b>ev3.screen.set_font(tiny_font)</b><br>
                    ev3.screen.print('hello')<br>
                    <b>ev3.screen.set_font(big_font)</b><br>
                    ev3.screen.print('HELLO')<br>
                    wait(5000)
                </code>
                <h2>Výsledek kódu:</h2>
                <img class="funkce" src="obr/obr3.png" alt="výsledek funkce">
            </section>

            <section id="clear">
                <h1>Function screen.clear()</h1>
                <h2>Popis:</h2>
                <p>Funkce smaže celou obrazovku, neboli každý pixel obrazovky bude bílý.
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li>Tato funkce nemá vstupní parametry.</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace tridy EV3Brick</code><br>
                    ev3 = EV3Brick()<br>
                    ev3.screen.draw_text(0,50, "ahoj",Color.WHITE, Color.BLACK)<br>
                    wait(2000)<br>
                    <code class="koment"># smaze celou obrazovku</code><br>
                    <b>ev3.screen.clear()</b><br>
                    wait(3000)
                </code>
                <h2>Výsledek kódu:</h2>
                <img class="funkce" src="obr/obr4.png" alt="výsledek funkce">
            </section>

            <section id="loadImage">
                <h1>Function screen.load_image(source)</h1>
                <h2>Popis:</h2>
                <p>Funkce zobrazí obrázek na obrazovku.
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li><var>source</var> –⁠ <var class="typ">[Image nebo str]</var> určuje obrázek, který bude zobrazen na displej. Obrázek může být součástí knihovny nebo proměnná určuje název přiloženého souboru. </li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace tridy EV3Brick</code><br>
                    ev3 = EV3Brick()<br>
                    <code class="koment"># nacteni obrazku z knihovny</code><br>
                    <b>ev3.screen.load_image(ImageFile.BACKWARD)</b> <br>
                    wait(3000)<br>
                    <code class="koment"># nacteni obrazku z prilozeneho souboru</code><br>
                    <b>ev3.screen.load_image("up.png")</b> <br>
                    wait(3000)
                </code>
                <h2>Výsledek kódu:</h2>
                <img class="funkce" src="obr/obr5.png" alt="výsledek funkce">
            </section>

            <section id="drawImage">
                <h1>Function screen.draw_image(x, y, source, transparent=None)</h1>
                <h2>Popis:</h2>
                <p>Funkce vykreslí obrázek na dané souřadnice.
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li><var>x</var> –⁠ <var class="typ">[int]</var> určuje vodorovnou souřadnici </li>
                    <li><var>y</var> –⁠ <var class="typ">[int]</var> určuje svislou souřadnici </li>
                    <li><var>source</var> –⁠ <var class="typ">[Image or str]</var> určuje obrázek, který bude vykreslen</li>
                    <li><var>transparent</var> –⁠ <var class="typ">[Color]</var> určuje barvu, která bude považována za průhlednou </li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace tridy EV3Brick</code><br>
                    ev3 = EV3Brick()<br>
                    <code class="koment"># vykresli obrazek z knihovny na pozici [50, 50]</code><br>
                    <b>ev3.screen.draw_image(50, 50,ImageFile.BACKWARD)</b><br>
                    wait(3000)<br>
                    <code class="koment"># vykresli obrazek z prilozeneho souboru na pozici [0, 50]</code><br>
                    <b>ev3.screen.draw_image(0, 50,"up.png",Color.BLUE)</b><br>
                    wait(3000)
                </code>
                <h2>Výsledek kódu:</h2>
                <img class="funkce" src="obr/obr6.png" alt="výsledek funkce">
            </section>

            <section id="drawPixel">
                <h1>Function screen.draw_pixel(x, y, color=Color.BLACK)</h1>
                <h2>Popis:</h2>
                <p>Funkce obarví pixel na daných souřadnicích určenou barvou.
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li><var>x</var> –⁠ <var class="typ">[int]</var> určuje vodorovnou souřadnici </li>
                    <li><var>y</var> –⁠ <var class="typ">[int]</var> určuje svislou souřadnici </li>
                    <li><var>color</var> –⁠ <var class="typ">[Color]</var> určuje barvu pixelu</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace tridy EV3Brick</code><br>
                    ev3 = EV3Brick()<br>
                    <code class="koment"># obravime 4 pixely na pozicich [50,50], [50,51], [51,50], [51,51] modrou barvou</code><br>
                    <b>ev3.screen.draw_pixel(50, 50,Color.BLUE)</b><br>
                    <b>ev3.screen.draw_pixel(50, 51,Color.BLUE)</b><br>
                    <b>ev3.screen.draw_pixel(51, 50,Color.BLUE)</b><br>
                    <b>ev3.screen.draw_pixel(51, 51,Color.BLUE)</b><br>
                    wait(3000)
                </code>
                <h2>Výsledek kódu:</h2>
                <img class="funkce" src="obr/obr7.png" alt="výsledek funkce">
            </section>

            <section id="drawLine">
                <h1>Function screen.draw_line(x1, y1, x2, y2, width=1, color=Color.BLACK)</h1>
                <h2>Popis:</h2>
                <p>Funkce nakreslí úsečku mezi dvěma pixely.
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li><var>x1</var> –⁠ <var class="typ">[int]</var> určuje vodorovnou souřadnici prvního pixelu</li>
                    <li><var>y1</var> –⁠ <var class="typ">[int]</var> určuje svislou souřadnici prvního pixelu</li>
                    <li><var>x2</var> –⁠ <var class="typ">[int]</var> určuje vodorovnou souřadnici druhého pixelu</li>
                    <li><var>y2</var> –⁠ <var class="typ">[int]</var> určuje svislou souřadnici druhého pixelu</li>
                    <li><var>width</var> –⁠ <var class="typ">[int]</var> určuje tloušťku čáry </li>
                    <li><var>color</var> –⁠ <var class="typ">[Color]</var> určuje barvu čáry</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace tridy EV3Brick</code><br>
                    ev3 = EV3Brick()<br>
                    <code class="koment"># nakresli usecku mezi body [50, 50] a [150,100] tloustkou 3 a modrou barvou</code><br>
                    <b>ev3.screen.draw_line(50, 50, 150, 100, 3,Color.BLUE)</b><br>
                    wait(3000)
                </code>
                <h2>Výsledek kódu:</h2>
                <img class="funkce" src="obr/obr8.png" alt="výsledek funkce">
            </section>

            <section id="drawBox">
                <h1>Function screen.draw_box(x1, y1, x2, y2, r=0, fill=False, color=Color.BLACK)</h1>
                <h2>Popis:</h2>
                <p>Funkce nakreslí obdélník mezi dvěma pixely.
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li><var>x1</var> –⁠ <var class="typ">[int]</var> určuje vodorovnou souřadnici prvního pixelu</li>
                    <li><var>y1</var> –⁠ <var class="typ">[int]</var> určuje svislou souřadnici prvního pixelu</li>
                    <li><var>x2</var> –⁠ <var class="typ">[int]</var> určuje vodorovnou souřadnici druhého pixelu</li>
                    <li><var>y2</var> –⁠ <var class="typ">[int]</var> určuje svislou souřadnici druhého pixelu</li>
                    <li><var>r</var> –⁠ <var class="typ">[int]</var> určuje zaoblení rohů obdélníku </li>
                    <li><var>fill</var> –⁠ <var class="typ">[bool]</var> určuje, zda obdélník bude vybarvený </li>
                    <li><var>color</var> –⁠ <var class="typ">[Color]</var> určuje barvu obdélníku</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace tridy EV3Brick</code><br>
                    ev3 = EV3Brick()<br>
                    <code class="koment"># nakresli cerny obdelnik mezi pixely [50, 50] a [150, 100] se zaoblenim 10, vyplneny</code><br>
                    <b>ev3.screen.draw_box(50, 50, 150, 100, 10, True, Color.BLACK)</b><br>
                    wait(3000)
                </code>
                <h2>Výsledek kódu:</h2>
                <img class="funkce" src="obr/obr9.png" alt="výsledek funkce">
            </section>

            <section id="drawCircle">
                <h1>Function screen.draw_circle(x, y, r, fill=False, color=Color.BLACK)</h1>
                <h2>Popis:</h2>
                <p>Funkce nakreslí kružnici se středem <var>[x,y]</var> a poloměrem <var>r</var>.
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li><var>x</var> –⁠ <var class="typ">[int]</var> určuje vodorovnou souřadnici středu kružnice</li>
                    <li><var>y</var> –⁠ <var class="typ">[int]</var> určuje svislou souřadnici prvního pixelu</li>
                    <li><var>r</var> –⁠ <var class="typ">[int]</var> určuje poloměr kružnice </li>
                    <li><var>fill</var> –⁠ <var class="typ">[bool]</var> určuje, zda kružnice bude vybarvená </li>
                    <li><var>color</var> –⁠ <var class="typ">[Color]</var> určuje barvu kružnice</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace tridy EV3Brick</code><br>
                    ev3 = EV3Brick()<br>
                    <code class="koment"># nakresli cernou kruznici se stredem [70, 50] a polomerem 15, nevyplneny</code><br>
                    <b>ev3.screen.draw_circle(70, 50, 15, False, Color.BLACK)</b><br>
                    wait(3000)
                </code>
                <h2>Výsledek kódu:</h2>
                <img class="funkce" src="obr/obr10.png" alt="výsledek funkce">
            </section>

            <section id="width">
                <h1>Parametr screen.width</h1>
                <h2>Popis:</h2>
                <p>Parametr obsahuje šířku obrazovky v <var class="jedn">pixelech</var>.
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li>Neobsahuje vstupní parametry.</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace tridy EV3Brick</code><br>
                    ev3 = EV3Brick()<br>
                    <code class="koment"># ziskame polovinu sirky obrazovky</code><br>
                    <b>x=ev3.screen.width/2</b><br>
                    ev3.screen.draw_circle(x, 50, 15, False, Color.BLACK)<br>
                    wait(3000)
                </code>
                <h2>Výsledek kódu:</h2>
                <img class="funkce" src="obr/obr11.png" alt="výsledek funkce">
            </section>

            <section id="height">
                <h1>Parametr screen.height</h1>
                <h2>Popis:</h2>
                <p>Parametr obsahuje výšku obrazovky v <var class="jedn">pixelech</var>.
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li>Neobsahuje vstupní parametry.</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace tridy EV3Brick</code><br>
                    ev3 = EV3Brick()<br>
                    x=ev3.screen.width/2<br>
                    <code class="koment"># ziskame polovinu vysky obrazovky</code><br>
                    <b>y=ev3.screen.height/2</b><br>
                    ev3.screen.draw_circle(x, y, 15, False, Color.BLACK) <code class="koment"># vycentrovana kruznice</code><br>
                    wait(3000)
                </code>
                <h2>Výsledek kódu:</h2>
                <img class="funkce" src="obr/obr12.png" alt="výsledek funkce">
            </section>

            <section id="save">
                <h1>Function screen.save(filename)</h1>
                <h2>Popis:</h2>
                <p>Funkce uloží screenshot obrazovky jako PNG soubor.
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li><var>filename</var> –⁠ <var class="typ">[str]</var> určuje název souboru</li>

                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace tridy EV3Brick</code><br>
                    ev3 = EV3Brick()<br>
                    x=ev3.screen.width/2<br>
                    y=ev3.screen.height/2<br>
                    ev3.screen.draw_circle(x, y, 15, False, Color.BLACK)<br>
                    wait(3000)<br>
                    <code class="koment"># ulozi obrazovku do souboru obr.png</code><br>
                    <b>ev3.screen.save('obr')</b>
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