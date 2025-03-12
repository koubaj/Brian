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


            <section id="zapnout">
                <h1>Zapnutí bluetooth</h1>
                <ul>
                    <li>Zapnout bluetooth –⁠ (v menu<var> Wireless and Networks ->Bluetooth -> Powered</var>)</li>
                    <li>Zviditelnit zařízení –⁠ (v menu <var>Wireless and Networks ->Bluetooth -> Visible</var> )</li>
                    <li>Nalézt a spárovat zařízení přes Bluetooth</li>
                    <li>V kódu se první musí pustit EV3 chovající se jako server</li>
                </ul>
            </section>

            <section id="bluetoothMailboxServer">
                <h1>Class BluetoothMailboxServer()</h1>
                <h2>Popis:</h2>
                <p>Třída vytvoří objekt pro Bluetooth komunikaci jako server.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                    <li>Tato funkce nemá vstupní parametry</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># vytvoreni objektu chovajici se jako klient </code><br>
                    <b>client = BluetoothMailboxClient()</b>
                </code>
            </section>

            <section id="bluetoothMailboxClient">
                <h1>Class BluetoothMailboxClient()</h1>
                <h2>Popis:</h2>
                <p>Třída vytvoří objekt pro Bluetooth komunikaci jako klient.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                    <li>Tato funkce nemá vstupní parametry</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># vytvoreni objektu chovajici se jako server </code><br>
                    <b>server = BluetoothMailboxServer()</b>
                </code>
            </section>

            <section id="mailBox">
                <h1>Class MailBox(name, connection, encode=None, decode=None)</h1>
                <h2>Popis:</h2>
                <p>Třída vytvoří schránku pro získání posílaných zpráv.
                     Pro správnou funkci komunikace je nutné na obou zařízení pojmenovat schránku stejně.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                    <li><var>name</var> –⁠ <var class="typ">[str]</var> označuje název schránky</li>
                    <li><var>connection</var> –⁠ <var class="typ">[object]</var> určuje chování jako server nebo klient</li>
                    <li><var>encode</var> –⁠ <var class="typ">[funkce]</var> funkce, která zakódovává objekt do bytů </li>
                    <li><var>decode</var> –⁠ <var class="typ">[funkce]</var> funkce, která dekódovává byty do objektu </li>
                </ul>
                <h2>Další typy schránek:</h2>
                <ul>
                    <li><var>Class LogicMailBox(name, connection)</var> –⁠ posílání <var class="typ">bool</var> hodnot</li>
                    <li><var>Class NumericMailBox(name, connection)</var> –⁠ posílání <var class="typ">integer</var> hodnot</li>
                    <li><var>Class TextMailBox(name, connection)</var> –⁠ posílání <var class="typ">string</var> hodnot</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># vytvoreni objektu chovajici se jako klient </code><br>
                    client = BluetoothMailboxClient()<br>
                    <code class="koment"># vytvoreni schranky se jmenem 'greeting' </code><br>
                    <b>mbox = TextMailbox('greeting', client)</b>
                </code>
            </section>

            <section id="waitForConnection">
                <h1>Function wait_for_connection()</h1>
                <h2>Popis:</h2>
                <p>Funkce vyčkává, dokud se EV3 chovající se jako klient nepřipojí k serveru.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                    <li>Tato funkce nemá vstupní parametry</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># vytvoreni objektu chovajici se jako server </code><br>
                    server = BluetoothMailboxServer()<br>
                    <code class="koment"># vyckava na pripojeni klienta </code><br>
                    <b>server.wait_for_connection()</b>
                </code>
            </section>

            <section id="connect">
                <h1>Function connect()</h1>
                <h2>Popis:</h2>
                <p>Funkce vyčkává, dokud se EV3 chovající se jako klient nepřipojí k serveru.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                    <li>Tato funkce nemá vstupní parametry</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># vytvoreni objektu chovajici se jako klient </code><br>
                    client = BluetoothMailboxClient()<br>
                    <code class="koment"># pripoji s EV3 chovajici se jako server </code><br>
                    <b>client.connect('ev3dev')</b>
                </code>
            </section>

            <section id="read">
                <h1>Function read()</h1>
                <h2>Popis:</h2>
                <p>Funkce vrací hodnotu ve schránce nebo hodnotu None, pokud je schránka prázdná.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                    <li>Tato funkce nemá vstupní parametry</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                <code class="koment"># vytvoreni objektu chovajici se jako klient </code><br>
                    client = BluetoothMailboxClient()<br>
                    <code class="koment"># vytvoreni schranky </code><br>
                    mbox = TextMailbox('greeting', client)<br>
                    client.connect('ev3dev')<br>
                    <code class="koment"># vypise hodnotu ze schranky </code><br>
                    print(<b>mbox.read()</b>)
                </code>
            </section>

            <section id="send">
                <h1>Function send(value, brick=None)</h1>
                <h2>Popis:</h2>
                <p>Funkce pošle zprávu.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                    <li><var>value</var> –⁠ <var class="typ">[str]</var> určuje obsah zprávy, která se má poslat</li>
                    <li><var>brick</var> –⁠ <var class="typ">[str]</var> označuje EV3,
                     které se má daná zpráva poslat. Pokud je hodnota <var>None</var>, pošle se zpráva všem připojeným EV3.</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                    <code class="koment"># vytvoreni objektu chovajici se jako klient </code><br>
                    client = BluetoothMailboxClient()<br>
                    <code class="koment"># vytvoreni schranky </code><br>
                    mbox = TextMailbox('greeting', client)<br>
                    client.connect('ev3dev')<br>
                    <code class="koment"># posle zpravu vsem pripojenym zarizenim </code><br>
                    <b>mbox.send('hello to you!')</b>
                </code>
            </section>


            <section id="wait">
                <h1>Function wait()</h1>
                <h2>Popis:</h2>
                <p>Funkce vyčkává, dokud nepřijde nová zpráva do schránky.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                    <li>Tato funkce nemá vstupní parametry</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                <code class="koment"># vytvoreni objektu chovajici se jako klient </code><br>
                    client = BluetoothMailboxClient()<br>
                    <code class="koment"># vytvoreni schranky </code><br>
                    mbox = TextMailbox('greeting', client)<br>
                    client.connect('ev3dev')<br>
                    <code class="koment"># cekani na novou zpravu </code><br>
                    <b>mbox.wait()</b>
                </code>
            </section>

            <section id="waitNew">
                <h1>Function wait_new()</h1>
                <h2>Popis:</h2>
                <p>Funkce vyčkává, dokud nepřijde nová zpráva do schránky.
                     Navíc obsah zprávy musí být rozdílný od současné hodnoty ve schránce.</p>
                <h2>Proměnné třídy:</h2>
                <ul>
                    <li>Tato funkce nemá vstupní parametry</li>
                </ul>
                <h2>Ukázka:</h2>
                <code> 
                <code class="koment"># vytvoreni objektu chovajici se jako klient </code><br>
                    client = BluetoothMailboxClient()<br>
                    <code class="koment"># vytvoreni schranky </code><br>
                    mbox = TextMailbox('greeting', client)<br>
                    client.connect('ev3dev')<br>
                    <code class="koment"># cekani na novou zpravu </code><br>
                    <b>mbox.wait_new()</b>
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