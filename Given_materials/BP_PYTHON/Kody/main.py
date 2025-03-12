#!/usr/bin/env pybricks-micropython
#import motory
#import senzory

from pybricks.hubs import EV3Brick
from pybricks.ev3devices import (Motor, TouchSensor, ColorSensor,
                                 InfraredSensor, UltrasonicSensor, GyroSensor)
from pybricks.parameters import Port, Stop, Direction, Button, Color
from pybricks.tools import wait, StopWatch, DataLog
from pybricks.robotics import DriveBase
from pybricks.media.ev3dev import SoundFile, ImageFile
from pybricks.messaging import BluetoothMailboxServer, TextMailbox, BluetoothMailboxClient, NumericMailbox
ev3 = EV3Brick()

#import regulator3


#definice
gyro= GyroSensor(Port.S2)
ultra = UltrasonicSensor(Port.S4) # krajni hodnoty jsou 4 a 13 cm
mot=Motor(Port.A) #kladny jede dopredu
rameno=Motor(Port.C) #kladny je nahoru, zaporny dolu
#print(ultra.presence())

#incializace
#mot.run(100)
stred=70#(130+40)/2 
P=0.28 #0.35
I=0.00002 #0.00002
#I=0
mot.hold()
uhelOpreni=rameno.run_until_stalled(-50, duty_limit=20)
#rameno.run_angle(200,20)
rameno.run_target(100, uhelOpreni+34, then=Stop.HOLD) #34
tlacitka=len(ev3.buttons.pressed())
rameno.reset_angle(0)
while(tlacitka==0):
    tlacitka=len(ev3.buttons.pressed())
#print('ultra',ultra.distance())
#print("zaciname")
#rychlost=-10
chybaI=0
mot.run(-300)
while(True):
    #rychlost -=0.1
    #if rychlost < -350:
    #    rychlost =-350
    uhel=gyro.angle()
    #mot.run_until_stalled(rychlost, duty_limit=100)
    chybaP=stred-ultra.distance(silent=False)
    #print(uhel,chybaP)
    chybaI=chybaI+chybaP
    if (abs(chybaP) <5):
        chybaI=0
    uhelNaklopeni=-uhel+chybaP*P +chybaI*I
    #print("uhel",uhelNaklopeni)
    rameno.run_target(200,uhelNaklopeni, then=Stop.HOLD, wait=False)
    






"""
def PIDantialiasing():
    stred = 50      #idealni vzdalenost
    rychlost = 200  #rychlost robota v mm/s
    P=1.5           #proporcionalni koeficient
    D=0.071         #derivacni koeficient
    I=0.0071        #integracni koeficient
    chybaI=0
    staryD=0
    novyD=0
    while True:
        chybaP = (senzorL.reflection() *(100/(bila-cerna+1))-3)-stred #normalizace senzoru
        staryD=novyD
        novyD=chybaP
        chybaD=novyD-staryD         #derivacni chyba
        chybaI=chybaI + chybaP      #integracni chyba
        #anti-aliasing
        if (chybaI>20000 and chybaP<0) or (chybaI<-20000 and chybaP>0):
            chybaI=0
        zatoc= P*chybaP + D * chybaD + I* chybaI    #vypocet regulatoru
        rob.drive(rychlost, zatoc)                  #zmena rotace robota
"""

"""

client = BluetoothMailboxClient()
mbox = TextMailbox('greeting', client)
mbox2 = NumericMailbox('number', client)

# The server must be started before the client!
client.connect('ev3dev')
print('pripojeno')

# In this program, the server waits for the client to send the first message
# and then sends a reply.

mbox2.send(3)
mbox.wait_new()
ev3.screen.print(mbox.read())
#client.close()
#ev3.screen.print("spojeni ukonceno")
wait(3000)
"""

"""
server = BluetoothMailboxServer()
mbox = TextMailbox('greeting', server)
mbox2 = NumericMailbox('number', server)

# The server must be started before the client!
ev3.screen.print('waiting for connection...')
server.wait_for_connection()
ev3.screen.print('connected!')

# In this program, the server waits for the client to send the first message
# and then sends a reply.
mbox2.wait()
ev3.screen.print(mbox2.read())
mbox.send('hello to you!')
# nefunguje server.close()
#ev3.screen.print("spojeni ukonceno")
wait(3000)
"""

#from  knihovna import rizeni
#import regulator3

# This program requires LEGO EV3 MicroPython v2.0 or higher.
# Click "Open user guide" on the EV3 extension tab for more information.


# Create your objects here.
#ev3 = EV3Brick()

#s prevodama
"""
motR=Motor(Port.B, Direction.COUNTERCLOCKWISE,[24, 8]) #rika prevody z 24 na 8 zubu
motL=Motor(Port.C, Direction.COUNTERCLOCKWISE, [24,8])
senzorL = ColorSensor(Port.S2)
# jiz nakonfigurovane nastaveni
rob=DriveBase(motL, motR, 68.7, 180) # motory, prumer kola, vzdalenost kol mezi dotyky k zemi
"""


# bez prevodu
"""
motR=Motor(Port.B, Direction.CLOCKWISE)
motL=Motor(Port.C, Direction.CLOCKWISE)
senzorL = ColorSensor(Port.S1)
"""
# jiz nakonfigurovane nastaveni
#rob=DriveBase(motL, motR, 69.2, 126) # motory, prumer kola, vzdalenost kol mezi dotyky k zemi
#rob.straight(1000) # ujed 100mm
#rob.turn(360) # otoc se na miste o 90 stupnu
#robot=rizeni(motL,motR, 34.35, 169)
#robot.settings( 100, 50, 245,0.5)
#robot.straight(600)
#robot.turn(360)
#print(robot.distance(), robot.angle())
#robot.reset()
#print(robot.distance(), robot.angle())
#robot.drive(150,20)
#wait(2000)
#print(robot.state())
#wait(2000)
#robot.stop()
#wait(5000)

#rob.drive(150,20)
#wait(10000)
"""
rob.settings(150,50,80,30) # nastavi rychlost, akceleracci translace i rotace, kdyz to neni nastaveno, je to max rychlost
rob.straight(1000) # ujed 100mm
rob.turn(360) # otoc se na miste o 90 stupnu
wait(1000)
rob.drive(70,-10)# rychlost translace a rotace dokud neskonci program :D
wait(1000)
print(rob.state())
wait(2000)
rob.stop()
wait(2000)
print(rob.distance())
print(rob.angle())
rob.reset()
print(rob.distance())
print(rob.angle())
print(rob.state())
#wait(1000)
#print(rob.distance())# vraci ujeta vzdalenost v mm
#print(rob.angle())# vraci ujety uhel v deg
#rob.reset()# vynuluje vzdalenost a ujety uhel
#print(rob.state()) # vraci (ujeta vzdalenost, rychlost translace, ujety uhel, rychlost rotace)
#rob.stop() #zastavi robota a od teto chvile je mozne ridit motory individualne
"""
# Write your program here.

#P controller s prevodama
"""
cerna = 3
bila = 75
stred = (cerna + bila) / 2
rychlost = 150
# P=1 nedotacivost, ale neni videt tolik kmitani
# P=1.5 lepsi dotacivost, ale stale neprojede drahu, lehke kmitani
# P=2.5 zvladne projet drahu, ale velke kmitani
P = 2
while True:
    chybaP = senzorL.reflection() - stred
    zatoc = -P * chybaP
    rob.drive(rychlost, zatoc)
"""



#P controller bez prevodu
"""
cerna = 2
bila = 61
stred = (cerna + bila) / 2
rychlost = 150
#rychlosr 150
# P=1 nedotacivost, ale neni videt tolik kmitani
# P=1.5 lepsi dotacivost, ale stale neprojede drahu, lehke kmitani
# P=2.5 zvladne projet drahu, ale velke kmitani
#rychlost 200
#ani zvysovanim to nejde projet nebliz je 4.5
P = 2.5
while True:
    chybaP = senzorL.reflection() - stred
    zatoc = -P * chybaP
    rob.drive(rychlost, zatoc)
"""




#PD controller s prevodama
"""
cerna = 2
bila = 61
stred = (cerna + bila) / 2
rychlost = 200
P = 2
D=150
staryD=0
zatoc=0
while True:
    chybaP = senzorL.reflection() - stred
    novyD=chybaP
    chybaD=staryD-novyD
    zatoc =-( P * chybaP - D*chybaD)
    rob.drive(rychlost, zatoc)
    staryD=chybaP
    wait(2)
 """   
        


#PD controller bez prevodu
"""
cerna = 2
bila = 42
stred = (cerna + bila) / 2
rychlost = 200
P = 4.5
D=1500
#wait na 1s, P=2.5, D=50 se povedlo projet celou drahu (pote se to nepovedlo s 50 ale s 150), rychlost 200
#pokud byl wait vetsi nez 1s, P bez D slozky ztroskotala, pokud D byla nulova s wait 1, taky to neprojelo
# povedlo se wait 2, rychlost 200, D=1000, P=3.5
#po zmene na 42, P 4.5, D1500
staryD=0
zatoc=0
while True:
    chybaP = senzorL.reflection() - stred
    novyD=chybaP
    chybaD=staryD-novyD
    zatoc =-( P * chybaP - D*chybaD)
    rob.drive(rychlost, zatoc)
    staryD=chybaP
    wait(2)
""" 



#PID controller s prevodama
"""
cerna = 2
bila = 61
stred = (cerna + bila) / 2
rychlost = 100
P = 1.2
D=1
I=1
chybaI=0
staryD=0
while True:
    chybaP = senzorL.reflection() - stred
    chybaI=chybaI + chybaP
    novyD=chybaP
    chybaD=staryD-novyD
    zatoc = P * chybaP + D*chybaD + I * chybaI
    rob.drive(rychlost, zatoc)
    staryD=chybaP
    wait(10)
"""


#PID controller bez prevodu
"""
cerna = 2
bila = 42
stred = (cerna + bila) / 2
rychlost = 250
P =5
D=1300
I=0.021
chybaI=0
staryD=0
# P=3.5, D=1500, I=0.02 ,rychlost 200,lepe drzi na draze wait 2
# P 3.5, D 2500, I 0.015, rychlost 230, 
# pri zmene na 42, P=4.5, D=1500, I=0.015 ,rychlost 200,bez wait 
#po zmene , P 5, D 1500, I0.015, rychlosr 230
#vic jak 230 to nejde
while True:
    chybaP = senzorL.reflection() - stred
    chybaI=chybaI + chybaP
    #print("P=",chybaP,"   I=",chybaI)
    novyD=chybaP
    chybaD=staryD-novyD
    zatoc =- P * chybaP + D*chybaD - I * chybaI

    rob.drive(rychlost, zatoc)
    staryD=chybaP
    wait(1)
"""



#PID controller s nulovanim
"""
# az na posledni zatacku rychlost 250, P4.5, D1500, I 0.026, wait(1)
cerna = 2
bila = 42
stred = (cerna + bila) / 2
rychlost = 250
P = 4.5
D=1500
I=0.026
chybaI=0
staryD=0
staryDD=0
while True:
    chybaP = senzorL.reflection() - stred
    novyD=chybaP
    chybaI = chybaI + chybaP
    #if (novyD>0 and staryD<0 and staryDD<0) or (novyD<0 and staryD>0 and staryDD>0):
    #    chybaI=0
    chybaD=staryD-novyD
    zatoc = -P * chybaP + D*chybaD - I * chybaI
    rob.drive(rychlost, zatoc)
    staryDD=staryD
    staryD=chybaP
    wait(1)
"""

#PID controller s nulovanim
""""
cerna = 2
bila = 42
stred = (cerna + bila) / 2
rychlostRev=150
rychlost = 270
P = 0.15
D=1.5
I=0.013
chybaI=0
staryD=0
staryDD=0
hraniceI=2000
hodnotyD=[0,0,0,0,0,0,0,0]
print(hodnotyD)
while True:
    chybaP = senzorL.reflection() - stred
    if chybaP >0:
        Kp=1*P
    else:
        Kp=-1*P
    novyD=chybaP
    chybaI = chybaI + chybaP
    #print(chybaI)
    if (chybaP>0 and chybaI<-hraniceI) or (chybaP<0 and chybaI>hraniceI):
        chybaI=0
        #print("nuluju")

    chybaD=0
    for stary in hodnotyD:
        if stary-chybaP >chybaD:
            chybaD=stary-chybaP
    hodnotyD.pop(0)
    hodnotyD.append(chybaP)
    if abs(chybaP)<7 and rychlost <400:
        rychlost+=0.25
        #print("zvysuju")
    elif abs(chybaP)>15 and rychlost > 230:
        rychlost=rychlost-6
        #print("snizuju")
    ErP=chybaP*chybaP
    zatoc = -Kp * ErP + D*chybaD - I * chybaI
    rob.drive(rychlost, zatoc)
    staryDD=staryD
    staryD=chybaP
    #wait(1)
"""



#PID controller s nulovanim s prevodama
"""
cerna = 3
bila = 75
stred = (cerna + bila) / 2
rychlostRev=150
rychlost = 200
P = 0.0017
D=0#1.5
I=0#.013
chybaI=0
staryD=0
staryDD=0
#hraniceI=2000
#hodnotyD=[0,0,0,0,0,0,0,0]
#print(hodnotyD)
while True:
    chybaP = senzorL.reflection() - stred
    if chybaP >0:
        Kp=1*P
    else:
        Kp=1*P
    novyD=chybaP
    chybaI = chybaI + chybaP
    #print(chybaI)
    #if (chybaP>0 and chybaI<-hraniceI) or (chybaP<0 and chybaI>hraniceI):
    #    chybaI=0
        #print("nuluju")

    chybaD=0
    #for stary in hodnotyD:
    #    if stary-chybaP >chybaD:
    #        chybaD=stary-chybaP
    #hodnotyD.pop(0)
    #hodnotyD.append(chybaP)
    #if abs(chybaP)<7 and rychlost <800:
    #    rychlost+=0.25
    #    #print("zvysuju")
    #elif abs(chybaP)>15 and rychlost > 230:
    #    rychlost=rychlost-6
        #print("snizuju")
    ErP=chybaP*chybaP*chybaP
    zatoc = -Kp * ErP + D*chybaD - I * chybaI
    rob.drive(rychlost, zatoc)
    staryDD=staryD
    staryD=chybaP
    #wait(1)
"""







#PID controller s nulovanim s prevodama
"""
cerna = 3
bila = 75
stred = (cerna + bila) / 2
rychlostRev=150
rychlost = 270
P = 0.003
D=30
I=0.015
# rychlost 250, P4, D40, I0.013 dojeto
chybaI=0
staryD=0
staryDD=0
hraniceI=2000
hodnotyD=[0,0,0,0]
#print(hodnotyD)
while True:
    chybaP = senzorL.reflection() - stred
    if chybaP >0:
        Kp=1*P
    else:
        Kp=1*P
    novyD=chybaP
    chybaI = chybaI + chybaP
    #print(chybaI)
    if (chybaP>0 and chybaI<-hraniceI) or (chybaP<0 and chybaI>hraniceI):
        chybaI=0
        #print("nuluju")

    chybaD=0
    for stary in hodnotyD:
        if stary-chybaP >chybaD:
            chybaD=stary-chybaP
    hodnotyD.pop(0)
    hodnotyD.append(chybaP)
    if abs(chybaP)<15 and rychlost <800:
        rychlost+=0.25
    #    #print("zvysuju")
    elif abs(chybaP)>30 and rychlost > 150:
        rychlost=rychlost-6
        #print("snizuju")
    ErP=chybaP*chybaP*chybaP
    zatoc = -Kp * ErP + D*chybaD - I * chybaI
    #rob.drive(rychlost, zatoc)
    motL.run(rychlost+zatoc)
    motR.run(rychlost-zatoc)
    staryDD=staryD
    staryD=chybaP
    #wait(1)
"""

#podle navodu
"""
cerna = 3
bila = 69
stred = (cerna + bila) / 2
rychlost = 200
#vyslo ze kmitajici je 3.5 a 20 kmitu za 7.5 s pro pravouhlou zatacku to nestaci
#PD, P2.8, D 0.375 i s delenim 8 i bez je to ok
#PID  proste nefunguje podle tech jeho konstant
P = 3.5*0.3
D=0.375/8
I=0.375/25
chybaI=0
staryD=0
staryDD=0
hraniceI=1000
while True:
    chybaP = senzorL.reflection() - stred
    novyD=chybaP
    chybaI = chybaI + chybaP
    if (chybaP>0 and chybaI<-hraniceI) or (chybaP<0 and chybaI>hraniceI):
        chybaI=0
    chybaD=staryD-novyD
    zatoc = -P * chybaP + D*chybaD - I * chybaI
    rob.drive(rychlost, zatoc)
    staryDD=staryD
    staryD=chybaP
"""


"""
from pybricks.ev3devices import (Motor)
from pybricks.parameters import Port
from pybricks.tools import wait

mot=Motor(Port.B)
mot.run(100) #toci rychlosti 100deg/s, dokud neskončí kód nebo neproběhne příkaz pracující se servomotorem
wait(100) #čeká 100 ms
mot.stop()#zastaví motor, ale následně je možné otáčet volně servomotorem
#mot.brake()#zastaví moto a následně pasivně zabraňuje rotaci servomotoru
#mot.hold()#zastaví motor a zamezuje vychýlení od cíleného úhlu
wait(100)
"""

"""
from pybricks.hubs import EV3Brick
from pybricks.parameters import  Button
ev3 = EV3Brick()
tlacitka=ev3.buttons.pressed()
#if tlacitka[0] ==Button.CENTER:
print(tlacitka)
"""

"""
from pybricks.hubs import EV3Brick
from pybricks.ev3devices import (Motor, TouchSensor, ColorSensor,
                                 InfraredSensor, UltrasonicSensor, GyroSensor)
from pybricks.parameters import Port, Stop, Direction, Button, Color
from pybricks.tools import wait, StopWatch, DataLog
from pybricks.robotics import DriveBase
from pybricks.media.ev3dev import SoundFile, ImageFile
"""
"""
from pybricks.tools import wait, StopWatch
s=StopWatch() #inicializace stopek (od teto chvile bezi cas)
wait(100)
print(s.time() ) #vypise soucasny cas ,tedy kolem 100
s.pause() #zastavi cas
wait(50) # tento cas se nezapocitava
#print(s.time())
s.resume() #opet zapne cas
wait(30)
print(s.time()) # celkem tedy kolem 130
s.reset() #vynuluje, kdy to bylo pausly, bude to pauslt, pokud to bezi, pobezi to dal
wait(20)
print(s.time())
"""

"""
from pybricks.hubs import EV3Brick
from pybricks.parameters import  Color
from pybricks.tools import wait
ev3 = EV3Brick()
ev3.light.on(Color.RED)
wait(1000)
ev3.light.off()
wait(5000)
"""
"""
from pybricks.hubs import EV3Brick
ev3 = EV3Brick()
ev3.speaker.beep(800,1500)
"""

"""
from pybricks.hubs import EV3Brick
ev3 = EV3Brick()
#noty=['C4/4_','D4/4','E4/4_','F4/4','G4/4_','A4/4','B4/4_','C5/4']
#ev3.speaker.play_notes(noty,150)
#ev3.speaker.play_file('boing.wav') #prehraje dany soubor
ev3.speaker.set_volume(20, which='_all_')
#ev3.speaker.set_speech_options('cs', 'f4', 150, 90)
ev3.speaker.say('I love EV3') #precte dany textev
"""
"""

#ev3.screen.set_font() #nastaveni fontu
#draw_text(x, y, text, text_color=Color.BLACK, background_color=None)
from pybricks.hubs import EV3Brick
from pybricks.media.ev3dev import Font
from pybricks.parameters import  Color
from pybricks.tools import wait
from pybricks.media.ev3dev import SoundFile, ImageFile,Font, Image

ev3 = EV3Brick()
"""
#obr=Image(ImageFile.UP,sub=False)
#br.print("ahoj")
#obr.draw_line(20,20,90,90, 3,Color.BLUE)
#obr.save('Picasso')
#big_font = Font(family='Times',size=24, bold=True, monospace=True, lang='cs')
#print(big_font.family) #vraci font
#print(big_font.style) # vraci jestli je tucne nebo klasicke
#print(big_font.width) # maximalni tloustka znaku
#print(big_font.height) # vyska znaku
#print(big_font.text_width('a')) #sirka textu
#print(big_font.text_width('aa')) # sirka textu, dvojnasobna narozdil od predchoziho radku
#print(big_font.text_height('a')) # vyska textu
#print(big_font.text_height('abfvdšdv\ndve\ndaa') # vyska texu, stejna jako v predchozim radku
#obr=ImageFile.BACKWARD
#nastaveni fontu
#tiny_font = Font(size=6)
#big_font = Font(size=24, bold=True)

#ev3.screen.print('Hello!')
#ev3.screen.set_font(tiny_font)
#ev3.screen.print('hello')
#ev3.screen.set_font(big_font)
#ev3.screen.print('HELLO')
#ev3.screen.draw_image(0, 0, obr)
#wait(3000)
#ev3.screen.draw_line(50, 50, 150, 100, 3,Color.BLUE)
#ev3.screen.draw_box(50, 50, 150, 100, 10, True, Color.BLACK)
#x=ev3.screen.width
#y=ev3.screen.height
#print (x ,y)
#ev3.screen.draw_circle(x, y, 15, False, Color.BLACK)
#ev3.screen.draw_pixel(50, 51,Color.BLUE)
#ev3.screen.draw_pixel(51, 50,Color.BLUE)
#ev3.screen.draw_pixel(51, 51,Color.BLUE)
#wait(3000)
#ev3.screen.save('obr')
#from pybricks.hubs import EV3Brick
#ev3 = EV3Brick()
#zvuk=SoundFile.ERROR
#ev3.speaker.play_file(zvuk) #prehraje dany soubor


"""
ev3 = EV3Brick()
for i in range(10):
    ev3.screen.print("ahoj",i,sep='=',end='\n-')
    wait(500)
ev3.screen.print("ahoj, jak se mas? Co delas?") #tento text nebude zobraen cely
#ev3.screen.draw_text(0,50, "ahoj",Color.BLUE) #pise na obrazek zacatek na pixelu 1,1 s textem "ahoj..."
wait(2000)
#ev3.screen.clear()
#wait(3000)

for i in range(100):
    #draw_pixel(x, y, color=Color.BLACK)
    ev3.screen.draw_pixel(i,i) #vykresli po pixelech diagonalu na x=i, y=i
wait(1000)
#draw_line(x1, y1, x2, y2, width=1, color=Color.BLACK)
ev3.screen.draw_line(1,1,1,100,10) #vykresli svislou caru o tlouste 10
wait(1000)
#vykresli obdelnik, kde se zadavaji dva rohy, r je zaobleni
ev3.screen.draw_box(50, 50, 100, 120, r=5, fill=False, color=Color.BLACK)#vyska obrazovky bude asi 128
wait(2000)
ev3.screen.draw_circle(150,100,10, fill=False)
wait(2000)
ev3.screen.save('obr')#udela screnshot obrzovky a ulozi to jako 'obr.png'
ev3.screen.load_image('up')#vycisti plochu a zobraci obrazek, kterz bude centrovany
wait(1000)
ev3.screen.clear()#vycisti celou obrazovku
wait(1000)
"""
"""
from pybricks.parameters import Color
from pybricks.tools import DataLog

# Create a data log file called my_file.txt
data = DataLog('time', 'angle', name='my_file', timestamp=False, extension='csv')

# The log method uses the print() method to add a line of text.
# So, you can do much more than saving numbers. For example:
data.log('Temperature', 25)
data.log('Sunday', 'Monday', 'Tuesday')
data.log({'Kiwi': Color.GREEN}, {'Banana': Color.YELLOW})

# You can upload the file to your computer, but you can also print the data:
print(data)
"""
"""
data = DataLog('cas', 'uhel',name='rozbehMotoru', timestamp=False, extension='csv', append='False')

mot = Motor(Port.B)
mot.run(500)
stopky = StopWatch()

for i in range(50):
    uhel = mot.angle()
    cas = stopky.time()
    data.log(cas, uhel)
    wait(100)
"""