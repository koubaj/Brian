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
            <section id="Port">
                <h1>Class Port</h1>
                <h2>Popis:</h2>
                <p>Třída určuje port, do kterého je periférie zapojena.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                    <li>Pro motory {<var>Port.A</var>, <var>Port.B</var>, <var>Port.C</var>, <var>Port.D</var>}</li>
                    <li>Pro senzory {<var>Port.S1</var>, <var>Port.S2</var>, <var>Port.S3</var>, <var>Port.S4</var>}</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace motoru zapojeného do portu B</code><br>
                    mot=Motor(<b>Port.B</b>)<br>
                    <code class="koment"># inicializace  světelného senzoru na port 2</code><br>
                    senzorL = ColorSensor(<b>Port.S2</b>)
                </code>
            </section>

            <section id="Direction">
                <h1>Class Direction</h1>
                <h2>Popis:</h2>
                <p>Třída určuje kladný směr otáčení servomotoru.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                    <li>Po směru otáčení hodinových ručiček<var>Direction.CLOCKWISE</var>}</li>
                    <li>Proti směru otáčení hodinových ručiček<var>Dicertion.COUNTERCLOCKWISE</var>}</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># Motor v portu B se bude otáčet po hodinových ručičkách</code><br>
                    mot=Motor(Port.B, <b>Direction.COUNTERCLOCKWISE</b>)<br>
                    <code class="koment"># Motor v portu B se bude otáčet po hodinových ručičkách</code><br>
                    mot=Motor(Port.C, <b>Direction.CLOCKWISE</b>)
                </code>
            </section>

            <section id="Stop">
                <h1>Class Stop</h1>
                <h2>Popis:</h2>
                <p>Třída určuje chování motoru po zastavení.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                    <li><var>Stop.COAST</var> –⁠  s koly lze volně otáčet</li>
                    <li><var>Stop.BRAKE</var> –⁠  kola jsou pasivně bržděna</li>
                    <li><var>Stop.HOLD</var> –⁠  kola jsou držena na místě</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    mot=Motor(Port.B)   <code class="koment"># inicializace motoru</code><br>
                    <code class="koment">#rychlost 200 deg/s po dobu 2000 ms, pote drzi na miste, vyckava na konec akce </code><br>
                    mot.run_time(200, 2000,<b>Stop.HOLD</b>, True)<br>
                    wait(3000) <code class="koment"># ceka 3000 <var class="jedn">ms</var></code>
                </code>
            </section>

            <section id="Color">
                <h1>Class Color</h1>
                <h2>Popis:</h2>
                <p>Třída definuje 8 barev.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                    <li><var>Color.BLACK</var> –⁠ černá </li>
                    <li><var>Color.BLUE</var> –⁠ modrá</li>
                    <li><var>Color.GREEN</var> –⁠ zelená</li>
                    <li><var>Color.YELLOW</var> –⁠ žlutá</li>
                    <li><var>Color.RED</var> –⁠ červená</li>
                    <li><var>Color.WHITE</var> –⁠ bílá</li>
                    <li><var>Color.ORANGE</var> –⁠ oranžová</li>
                    <li><var>Color.PURPLE</var> –⁠ fialová</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># ulozeni definovanych barev do proměnných</code><br>
                    cerna=<b>Color.BLACK</b>
                </code>
            </section>

            <section id="Button">
                <h1>Class Button</h1>
                <h2>Popis:</h2>
                <p>Třída definuje tlačítka na EV3.</p>
                <h2>Proměnné třídy:</h2>
                <div>
                    <ul>
                        <li><var>Button.UP</var></li>
                        <li><var>Button.LEFT</var></li>
                        <li><var>Button.CENTER</var></li>
                        <li><var>Button.RIGHT</var></li>
                        <li><var>Button.DOWN</var></li>
                    </ul>
                </div>
                <div>
                    <h1>obrazek TODO !!!</h1>
                </div>
                <h2>Ukázka:</h2>
                <code> 
                    ev3 = EV3Brick() <code class="koment"># inicializace třidy EV3Brick</code><br>
                    tlacitka=ev3.buttons.pressed() <code class="koment"># vrací pole zmáčknutých tlačítek</code><br>
                    if tlacitka[0] == <b>Button.CENTER</b>:  <code class="koment"># pokud na pozici 0 je prostřední tlačítko</code><br>
                    &#8197; print(tlacitka)  <code class="koment"># vypíše pole zmaknutych tlacitek</code><br>
                </code>
            </section>

            <section id="Font">
                <h1>Class Font (family=None, size=12, bold=False, monospace=False, lang=None, script=None)</h1>
                <h2>Popis:</h2>
                <p>Třída vrací font, který splňuje požadavky určené vstupními parametry. Pokud nenastane úplná shoda,
                     třída vrací font, který se nejvíce blíží požadavkům.</p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li><var>family</var> –⁠ <var class="typ">[str]</var> určuje styl písma</li>
                    <li><var>size</var> –⁠ <var class="typ">[int]</var> určuje velikost písma od 6 do 24</li>
                    <li><var>bold</var> –⁠ <var class="typ">[bool]</var> určuje, zda má být písmo tučné</li>
                    <li><var>monospace</var> –⁠ <var class="typ">[str]</var> určuje, zda má být pevná šířka znaků</li>
                    <li><var>lang</var> –⁠ <var class="typ">[str]</var> určuje jazykovou sadu</li>
                    <li><var>script</var> –⁠ <var class="typ">[str]</var> určuje znakovou sadu (azbuka, latinka)</li>
                </ul>

                <h2>Ukázka:</h2>
                <code>
                    <code class="koment"># získáme font podle našich požadavků</code><br>
                    <b>big_font = Font(family='Times',size=24, bold=True, monospace=True, lang='cs')</b>
                </code>
                <h2>Proměnné třídy:</h2>
                <ul>
                    <li><var>family</var> –⁠ <var class="typ">[str]</var> vrací styl písma</li>
                    <li><var>style</var> –⁠ <var class="typ">[int]</var> vrací tučnost písma</li>
                    <li><var>width</var> –⁠ <var class="typ">[bool]</var> vrací maximální šířku znaku</li>
                    <li><var>height</var> –⁠ <var class="typ">[str]</var> vrací výšku znaku</li>
                    <li><var>text_width</var> –⁠ <var class="typ">[str]</var> vrací šířku text</li>
                    <li><var>text_height</var> –⁠ <var class="typ">[str]</var> vrací výšku textu</li>
                </ul>
                <h2>Ukázka:</h2>
                <code>
                    <code class="koment"># definujeme font</code><br>
                    big_font = Font(family='Times',size=24, bold=True, monospace=True, lang='cs')<br>
                    <code class="koment"># získáváme informace o fontu</code><br>
                    print(<b>big_font.family</b>)<br>
                    print(<b>big_font.style</b>)<br>
                    print(<b>big_font.width</b>)<br>
                    print(<b>big_font.height</b>)<br>
                    print(<b>big_font.text_width('a')</b>)<br>
                    print(<b>big_font.text_width('aa')</b>)<br>
                    print(<b>big_font.text_height('a')</b>)<br>
                    print(<b>big_font.text_height('PrvniRadek\nDruhyRadek\nTretiRadek')</b>)
                </code>
            </section>

            <section id="ImageFile">
                <h1>Class ImageFile</h1>
                <h2>Popis:</h2>
                <p>Třída obsahuje sadu obrázků.</p>
                <h2>Sady obrázků:</h2>
                    <ul>
                        <li>Information:<br>
                        <var>ImageFile.ACCEPT, ImageFile.BACKWARD, ImageFile.DECLINE, ImageFile.FORWARD, ImageFile.LEFT,
                             ImageFile.NO_GO, ImageFile.QUSETION_MARK, ImageFile.RIGHT, ImageFile.STOP_1, ImageFile.STOP_2,
                              ImageFile.THUMBS_DOWN, ImageFile.THUMBS_UP, WARNING</var></li><br>
                        <li>LEGO: <br>
                        <var>ImageFile.EV3, ImageFile.EV3_ICON</var></li><br>
                        <li>Objects: <br>
                        <var>ImageFile.TARGET</var></li><br>
                        <li>Eyes:<br>
                        <var>ImageFile.ANGRY, ImageFile.AWAKE, ImageFile.BOTTOM_LEFT, ImageFile.BOTTOM_RIGHT, ImageFile.CRAZY_1,
                            ImageFile.CRAZY_2, ImageFile.DIZZY, ImageFile.DOWN, ImageFile.EVIL, ImageFile.KNOCKED_OUT,
                            ImageFile.MIDDLE_LEFT, ImageFile.MIDDLE_RIGHT, ImageFile.NEUTRAL, ImageFile.PINCHED_LEFT,
                            ImageFile.PINCHED_RIGHT, ImageFile.SLEEPING, ImageFile.TIRED_LEFT, ImageFile.TIRED_MIDDLE,
                            ImageFile.TIRRED_RIGHT, ImageFile.UP, ImageFile.WINKING</var></li>
                    </ul>
                <h2>Ukázka:</h2>
                <code>
                    <code class="koment"># inicializace třídy EV3Brick</code> <br>
                    ev3 = EV3Brick()<br>
                    <code class="koment"># uložení obrázku do proměnné</code><br>
                    obr=<b>ImageFile.BACKWARD</b>
                    <code class="koment"># vykreslení obrázku na obrazovku EV3</code><br>
                    ev3.screen.draw_image(0, 0, obr)<br>
                    wait(3000) <code class="koment"># čekání 3 s</code>
                </code>
            </section>

            <section id="SoundFile">
                <h1>Class SoundFile</h1>
                <h2>Popis:</h2>
                <p>Třída obsahuje sadu zvukových stop.</p>
                <h2>Sady zvukových stop:</h2>
                    <ul>
                        <li>Expression:<br>
                        <var>SoundFile.BOING, SoundFile.BOO, SoundFile.CHEERING, SoundFile.CRUNCHING, SoundFile.CRYING,
                            SoundFile.FANFARE, SoundFile.LAUGHING_1, SoundFile.LAUGHING_2, SoundFile.MAGIC_WAND, SoundFile.OUCH,
                            SoundFile.SHOUTING, SoundFile.SNEEZING, SoundFile.UH_OH</var></li><br>
                        <li>Information:<br>
                        <var>SoundFile.ACTIVATE, SoundFile.ANALYZE, SoundFile.BACKWARDS, SoundFile.COLOR, SoundFile.DETECTED,
                            SoundFile.DOWN, SoundFile.ERROR, SoundFile.ERROR_ALARM, SoundFile.FLASHING, SoundFile.FORWARD,
                            SoundFile.LEFT, SoundFile.OBJECT, SoundFile.RIGHT, SoundFile.SEARCHING, SoundFile.START, SoundFile.STOP,
                            SoundFile.TOUCH, SoundFile.TURN, SoundFile.UP</var></li><br>
                        <li>Communication: <br>
                        <var>SoundFile.BRAVO, SoundFile.EV3, SoundFile.FANTASTIC, SoundFile.GAME_OVER, SoundFile.GO, SoundFile.GOOD_JOB,
                            SoundFile.GOOD, SoundFile.GOODBYE, SoundFile.HELLO, SoundFile.HI LEGO, SoundFile.MINDSTORMS,
                            SoundFile.MORNING, SoundFile.NO, SoundFile.OKAY, SoundFile.OKEY_DOKEY, SoundFile.SORRY,
                            SoundFile.THANK_YOU, SoundFile.YES</var></li><br>
                        <li>Movement<br>
                        <var>SoundFile.SPEED_DOWN, SoundFile.SPEED_IDLE, SoundFile.SPEED_UP</var></li><br>
                        <li>Colors: <br>
                        <var>SoundFile.BLACK, SoundFile.BLUE, SoundFile.BROWN, SoundFile.GREEN, SoundFile.RED, SoundFile.WHITE,
                            SoundFile.YELLOW</var></li><br>
                        <li>Mechanical: <br>
                        <var>SoundFile.AIR_RELEASE, SoundFile.AIRBRAKE, SoundFile.BACKING_ALERT, SoundFile.HORN_1, SoundFile.HORN_2,
                            SoundFile.LASER, SoundFile.MOTOR_IDLE, SoundFile.MOTOR_START, SoundFile.MOTOR_STOP, SoundFile.RATCHET,
                            SoundFile.SONAR, SoundFile.TICK_TACK</var></li><br>
                        <li>Animal: <br>
                        <var>SoundFile.CAT_PURR, SoundFile.DOG_BARK_1, SoundFile.DOG_BARK_2, SoundFile.DOG_GROWL, SoundFile.DOG_SNIFF,
                            SoundFile.DOG_WHINE, SoundFile.ELEPHANT_CALL, SoundFile.INSECT_BEZZ_1, SoundFile.INSECT_BUZZ_2,
                            SoundFile.INSECT_CHIRP, SoundFile.SNAKE_HISS, SoundFile.SNAKE_RATTLE, SoundFile.T_REX_ROAR</var></li><br>
                        <li>Numbers: <br>
                        <var>SoundFile.ZERO, SoundFile.ONE, SoundFile.TWO, SoundFile.THREE, SoundFile.FOUR, SoundFile.FIVE,
                            SoundFile.SIX, SoundFile.SEVEN, SoundFile.EIGHT, SoundFile.NINE, SoundFile.TEN</var></li><br>
                        <li>System: <br>
                        <var>SoundFile.CLICK, SoundFile.CONFIRM, SoundFile.GENERAL_ALERT, SoundFile.OVERPOWER, SoundFile.READY</var></li><br>
                    </ul>
                <h2>Ukázka:</h2>
                <code>
                    <code class="koment"># inicializace třídy EV3Brick</code> <br> 
                    ev3 = EV3Brick()<br>
                    <code class="koment"># uložení zvukové stopy do proměnné</code><br>
                    zvuk=<b>SoundFile.ERROR</b><br>
                    ev3.speaker.play_file(zvuk) <code class="koment"># EV3 přehraje zvukovou stopu</code>
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