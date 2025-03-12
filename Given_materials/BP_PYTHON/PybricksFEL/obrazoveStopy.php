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
            <section id="image">
                <h1>Class Image(source, sub=False)</h1>
                <h2>Popis:</h2>
                <p>Třída vytvoří obrázek, se kterým dále budeme moct pracovat. 
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li><var>source</var> –⁠ <var class="typ">[Image nebo str]</var> určuje obrázek, se kterým budeme pracovat</li>
                    <li><var>sub</var> –⁠ <var class="typ">[bool]</var> určuje zda se jedná o celá obrázek nebo jen o jeho část, je možné přidat nepovinné parametry {x1, y1, x2, y2} </li>

                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># vytvoří třídu obrázku, podklad je obrazek UP</code><br>
                    <b>obr=Image(ImageFile.UP,sub=False)</b>

                </code>
            </section>

            <section id="drawText">
                <h1>Function draw_text(x, y, text, text_color=Color.BLACK , background_color=None)</h1>
                <h2>Popis:</h2>
                <p>Funkce zakreslí text na danou pozici do obrázku. 
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
                    <code class="koment"># inicializace tridy Image</code><br>
                    obr=Image(ImageFile.UP,sub=False)<br>
                    <code class="koment"># vypise 'ahoj' na pozici [0,50] bilym textem na cernem pozadi</code><br>
                    <b>obr.draw_text(0,50, "ahoj",Color.WHITE, Color.BLACK)</b><br>
                    wait(2000)

                </code>
            </section>

            <section id="print">
                <h1>Function print(*args, sep=' ', end='\n')</h1>
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
                    <code class="koment"># inicializace tridy Image</code><br>
                    obr=Image(ImageFile.UP,sub=False)<br>
                    <code class="koment"># vypise 'ahoj' do obrazku</code><br>
                    <b>obr.print("ahoj")</b> <br>
                    wait(2000)
                </code>
            </section>

            <section id="setFont">
                <h1>Function set_font(font)</h1>
                <h2>Popis:</h2>
                <p>Funkce změní styl písma.
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li><var>font</var> –⁠ <var class="typ">[Font]</var> určuje proměnnou obsahující vlastnosti písma</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace tridy Image</code><br>
                    obr=Image(ImageFile.UP,sub=False)<br>
                    <code class="koment"># vytvoreni fontu</code><br>                
                    tiny_font = Font(size=6)<br>
                    big_font = Font(size=24, bold=True)<br>
                    obr.print('Hello!')<br>
                    <code class="koment"># nastaveni fontu v obrazku</code><br>    
                    <b>obr.set_font(tiny_font)</b><br>
                    obr.print('hello')<br>
                    <b>obr.set_font(big_font)</b><br>
                    obr.print('HELLO')<br>
                    wait(5000)
                </code>
            </section>

            <section id="clear">
                <h1>Function clear()</h1>
                <h2>Popis:</h2>
                <p>Funkce každý pixel obrázku změní bílý.
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li>Tato funkce nemá vstupní parametry.</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace tridy Image</code><br>
                    obr=Image(ImageFile.UP,sub=False)<br>
                    obr.draw_text(0,50, "ahoj",Color.WHITE, Color.BLACK)<br>
                    wait(2000)<br>
                    <code class="koment"># smaze cely obrazek</code><br>
                    <b>obr.clear()</b><br>
                    wait(3000)
                </code>
            </section>

            <section id="loadImage">
                <h1>Function load_image(source)</h1>
                <h2>Popis:</h2>
                <p>Funkce nahraje obrázek do obrázku.
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li><var>source</var> –⁠ <var class="typ">[Image nebo str]</var> určuje obrázek, který bude nahrán. Obrázek může být součástí knihovny nebo proměnná určuje název přiloženého souboru. </li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace tridy Image</code><br>
                    obr=Image(ImageFile.UP,sub=False)<br>
                    <code class="koment"># nacteni obrazku z knihovny</code><br>
                    <b>obr.load_image(ImageFile.BACKWARD)</b> <br>
                    wait(3000)<br>
                    <code class="koment"># nacteni obrazku z prilozeneho souboru</code><br>
                    <b>obr.load_image("up.png")</b> <br>
                    wait(3000)
                </code>
            </section>

            <section id="drawImage">
                <h1>Function draw_image(x, y, source, transparent=None)</h1>
                <h2>Popis:</h2>
                <p>Funkce vloží obrázek na dané souřadnice obrázku.
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li><var>x</var> –⁠ <var class="typ">[int]</var> určuje vodorovnou souřadnici </li>
                    <li><var>y</var> –⁠ <var class="typ">[int]</var> určuje svislou souřadnici </li>
                    <li><var>source</var> –⁠ <var class="typ">[Image or str]</var> určuje obrázek, který bude vložen</li>
                    <li><var>transparent</var> –⁠ <var class="typ">[Color]</var> určuje barvu, která bude považována za průhlednou </li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace tridy Image</code><br>
                    obr=Image(ImageFile.UP,sub=False)<br>
                    <code class="koment"># vlozi obrazek z knihovny na pozici [50, 50]</code><br>
                    <b>obr.draw_image(50, 50,ImageFile.BACKWARD)</b><br>
                    wait(3000)<br>
                    <code class="koment"># vlozi obrazek z prilozeneho souboru na pozici [0, 50]</code><br>
                    <b>obr.draw_image(0, 50,"up.png",Color.BLUE)</b><br>
                    wait(3000)
                </code>
            </section>

            <section id="drawPixel">
                <h1>Function draw_pixel(x, y, color=Color.BLACK)</h1>
                <h2>Popis:</h2>
                <p>Funkce obarví pixel obrázku na daných souřadnicích určenou barvou.
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li><var>x</var> –⁠ <var class="typ">[int]</var> určuje vodorovnou souřadnici </li>
                    <li><var>y</var> –⁠ <var class="typ">[int]</var> určuje svislou souřadnici </li>
                    <li><var>color</var> –⁠ <var class="typ">[Color]</var> určuje barvu pixelu</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace tridy Image</code><br>
                    obr=Image(ImageFile.UP,sub=False)<br>
                    <code class="koment"># obravime 4 pixely obrazku na pozicich [50,50], [50,51], [51,50], [51,51] modrou barvou</code><br>
                    <b>ev3.screen.draw_pixel(50, 50,Color.BLUE)</b><br>
                    <b>ev3.screen.draw_pixel(50, 51,Color.BLUE)</b><br>
                    <b>ev3.screen.draw_pixel(51, 50,Color.BLUE)</b><br>
                    <b>ev3.screen.draw_pixel(51, 51,Color.BLUE)</b><br>
                    wait(3000)
                </code>
            </section>

            <section id="drawLine">
                <h1>Function draw_line(x1, y1, x2, y2, width=1, color=Color.BLACK)</h1>
                <h2>Popis:</h2>
                <p>Funkce nakreslí úsečku mezi dvěma pixely do obrázku.
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
                    <code class="koment"># inicializace tridy Image</code><br>
                    obr=Image(ImageFile.UP,sub=False)<br>
                    <code class="koment"># nakresli usecku mezi body [50, 50] a [150,100] tloustkou 3 a modrou barvou</code><br>
                    <b>obr.draw_line(50, 50, 150, 100, 3,Color.BLUE)</b><br>
                    wait(3000)
                </code>
            </section>

            <section id="drawBox">
                <h1>Function draw_box(x1, y1, x2, y2, r=0, fill=False, color=Color.BLACK)</h1>
                <h2>Popis:</h2>
                <p>Funkce nakreslí obdélník mezi dvěma pixely v obrázku.
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
                    <code class="koment"># inicializace tridy Image</code><br>
                    obr=Image(ImageFile.UP,sub=False)<br>
                    <code class="koment"># nakresli cerny obdelnik mezi pixely [50, 50] a [150, 100] se zaoblenim 10, vyplneny</code><br>
                    <b>obr.draw_box(50, 50, 150, 100, 10, True, Color.BLACK)</b><br>
                    wait(3000)
                </code>
            </section>

            <section id="drawCircle">
                <h1>Function draw_circle(x, y, r, fill=False, color=Color.BLACK)</h1>
                <h2>Popis:</h2>
                <p>Funkce nakreslí kružnici se středem <var>[x,y]</var> a poloměrem <var>r</var> do obrázku.
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
                    <code class="koment"># inicializace tridy Image</code><br>
                    obr=Image(ImageFile.UP,sub=False)<br>
                    <code class="koment"># nakresli cernou kruznici do obrazku se stredem [70, 50] a polomerem 15, nevyplneny</code><br>
                    <b>obr.draw_circle(70, 50, 15, False, Color.BLACK)</b><br>
                    wait(3000)
                </code>
            </section>

            <section id="width">
                <h1>Parametr width</h1>
                <h2>Popis:</h2>
                <p>Parametr obsahuje šířku obrázku v <var class="jedn">pixelech</var>.
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li>Neobsahuje vstupní parametry.</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace tridy Image</code><br>
                    obr=Image(ImageFile.UP,sub=False)<br>
                    <code class="koment"># ziskame polovinu sirky obrazku</code><br>
                    <b>x=obr.width/2</b><br>
                    obr.draw_circle(x, 50, 15, False, Color.BLACK)<br>
                    wait(3000)
                </code>
            </section>

            <section id="height">
                <h1>Parametr height</h1>
                <h2>Popis:</h2>
                <p>Parametr obsahuje výšku obrázku v <var class="jedn">pixelech</var>.
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li>Neobsahuje vstupní parametry.</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace tridy Image</code><br>
                    obr=Image(ImageFile.UP,sub=False)<br>
                    x=obr.width/2<br>
                    <code class="koment"># ziskame polovinu vysky obrazovky</code><br>
                    <b>y=obr.height/2</b><br>
                    obr.draw_circle(x, y, 15, False, Color.BLACK) <code class="koment"># vycentrovana kruznice</code><br>
                    wait(3000)
                </code>
            </section>

            <section id="save">
                <h1>Function save(filename)</h1>
                <h2>Popis:</h2>
                <p>Funkce uloží obrázek jako PNG soubor.
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li><var>filename</var> –⁠ <var class="typ">[str]</var> určuje název souboru</li>

                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace tridy Image</code><br>
                    obr=Image(ImageFile.UP,sub=False)<br>
                    x=obr.width/2<br>
                    y=obr.height/2<br>
                    obr.draw_circle(x, y, 15, False, Color.BLACK)<br>
                    wait(3000)<br>
                    <code class="koment"># ulozi obrazek do souboru obr.png</code><br>
                    <b>obr.save('obr')</b>
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