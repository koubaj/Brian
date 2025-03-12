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

            <section id="beep">
                <h1>Function speaker.beep(frequency=500, duration=100)</h1>
                <h2>Popis:</h2>
                <p>Zazní tón o frekvenci <var>frequency</var> a o délce <var>duration</var>. 
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li><var>frequency</var> –⁠ <var class="typ">[int]</var> určuje výšku tónu v <var class="jedn">Hz</var> </li>
                    <li><var>duration</var> –⁠ <var class="typ">[int]</var> určuje délku tónu v <var class="jedn">ms</var> </li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace tridy EV3Brick</code><br>
                    ev3 = EV3Brick()<br>
                    <code class="koment"># zazni to o vysce 800Hz a delce 1500 ms</code><br>
                    <b>ev3.speaker.beep(800,1500)</b>
                </code>
            </section>

            <section id="playNotes">
                <h1>Function speaker.play_notes(notes, tempo=120)</h1>
                <h2>Popis:</h2>
                <p>Funkce zahraje sekvenci not <var>notes</var> v tempu <var>tempo</var>.
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li><var>notes</var> –⁠ <var class="typ">[array of str]</var> určuje noty a jejich délky</li>
                    <li><var>tempo</var> –⁠ <var class="typ">[int]</var> určuje počet čtvťových dob za minutu </li>
                </ul>
                <h2>Zápis not:</h2>
                <h1>TODO !!!</h1>

                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace tridy EV3Brick</code><br>
                    ev3 = EV3Brick()<br>
                    <code class="koment"># noty, ktere chceme zahrat</code><br>
                    noty=['C4/4_','D4/4','E4/4_','F4/4','G4/4_','A4/4','B4/4_','C5/4']<br>
                    <b>ev3.speaker.play_notes(noty,150)</b>
                </code>
            </section>

            <section id="playFile">
                <h1>Function speaker.play_file(file_name)</h1>
                <h2>Popis:</h2>
                <p>Funkce přehraje zvukový soubor <var>file_name</var>. 
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li><var>file_name</var> –⁠ <var class="typ">[str]</var> označuje název souboru</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace tridy EV3Brick</code><br>
                    ev3 = EV3Brick()<br>
                    <code class="koment"># rehraje dany soubor</code><br>
                    <b>ev3.speaker.play_file('boing.wav')</b> 
                </code>
            </section>


            <section id="say">
                <h1>Function speaker.say(text)</h1>
                <h2>Popis:</h2>
                <p>Funkce přečte zadaný text v proměnné <var>text</var>. 
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li><var>text</var> –⁠ <var class="typ">[str]</var> označuje text, který má být přečten</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace tridy EV3Brick</code><br>
                    ev3 = EV3Brick()<br>
                    <code class="koment"># precte dany text</code><br>
                    <b>ev3.speaker.say('I love EV3')</b> 
                </code>
            </section>

            <section id="setSpeechOptions">
                <h1>Function speaker.set_speech_options(language=None, voice=None, speed=None, pitch=None)</h1>
                <h2>Popis:</h2>
                <p>Funkce nastavuje styl, jakým bude text přečten. 
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li><var>language</var> –⁠ <var class="typ">[str]</var> určuje jazyk, kterým bude text přečten</li>
                    <li><var>voice</var> –⁠ <var class="typ">[str]</var> určuje hlas, kterým bude text přečten</li>
                    <li><var>speed</var> –⁠ <var class="typ">[int]</var> určuje počet přečtených slov za minutu</li>
                    <li><var>pitch</var> –⁠ <var class="typ">[int]</var> určuje výšku hlasu  v rozmezí 0 až 99</li>
                </ul>
                <h2>Dostupné parametry:</h2>
                <h1>TODO !!!</h1>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace tridy EV3Brick</code><br>
                    ev3 = EV3Brick()<br>
                    <code class="koment"># nastavi se cesky jazyk, zensky hlas c.4, rychlost 150 slov/min a vyska 90</code><br>
                    <b>ev3.speaker.set_speech_options('cs', 'f4', 150, 90)</b><br>
                    ev3.speaker.say('Ahoj, jak se máš?') 
                </code>
            </section>

            <section id="setVolume">
                <h1>Function speaker.set_volume(volume, which='_all_')</h1>
                <h2>Popis:</h2>
                <p>Funkce změní hlasitost reproduktoru na hodnotu <var>volume</var>. 
                </p>
                <h2>Vstupní parametry:</h2>
                <ul>
                    <li><var>volume</var> –⁠ <var class="typ">[int]</var> určuje hlasitost reproduktorů v <var class="jedn">%</var></li>
                    <li><var>which</var> –⁠ <var class="typ">[str]</var> určuje pro které funkce hlasitost bude použita </li>
                    <ul>
                        <li><var>'Beep'</var> – platí pro funkce <var>beep()</var></li>
                        <li><var>'PCM'</var> – platí pro funkce <var>play_file()</var> a <var>say()</var></li>
                        <li><var>'_all_'</var> – platí pro všechny funkce</li>
                    </ul>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># inicializace tridy EV3Brick</code><br>
                    ev3 = EV3Brick()<br>
                    <code class="koment"># snizi hlasitost reproduktoru na 20%, hlasitost plati pro vse</code><br>
                    <b>ev3.speaker.set_volume(20, which='_all_')</b><br>
                    ev3.speaker.say('I love EV3')

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