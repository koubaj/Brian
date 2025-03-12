from pybricks.hubs import EV3Brick
from pybricks.ev3devices import (Motor, TouchSensor, ColorSensor,
                                 InfraredSensor, UltrasonicSensor, GyroSensor)
from pybricks.parameters import Port, Stop, Direction, Button, Color
from pybricks.tools import wait, StopWatch, DataLog
from pybricks.robotics import DriveBase
from pybricks.media.ev3dev import SoundFile, ImageFile
ev3 = EV3Brick()

def kresleniTExtu():
    #nakresli text bilou barvou, cernym pozadi a levy horni roh bude na pozici [0,0]
    ev3.screen.draw_text(0,50, "ahoj",Color.WHITE, Color.BLACK)
    wait(2000)
    #zmeni kazdy pixel na bily, "smaze" obrazovku
    ev3.screen.clear()
    wait(3000)
def psaniTextu():
#ukazka scrollovani vypisu
    for i in range(10):
        ev3.screen.print("ahoj",i,sep='=',end='\n-')
        wait(500)
    #text nebude zobrazen cely, je moc dlouhy
    ev3.screen.print("ahoj, jak se mas? Co delas?") 
    wait(2000)

def nastaveniFontu():
    #nastaveni velikosti fontu
    tiny_font = Font(size=6)
    #nastaveni velikosti a tucnosti fontu
    big_font = Font(size=24, bold=True)
    #vypsani vychozim fontem
    ev3.screen.print('Hello!')
    #zmena fontu na tiny_font
    ev3.screen.set_font(tiny_font)
    ev3.screen.print('hello')
    #zmena fontu na big_font
    ev3.screen.set_font(big_font)
    ev3.screen.print('HELLO')
    wait(5000)

def obrazky():
    #nacte a zobrazi obrazek z knihovny (vycentruje)
    ev3.screen.load_image(ImageFile.BACKWARD)
    wait(3000)
    #nacte a zobrazi obrazek ze souboru (vycentruje)
    ev3.screen.load_image("up.png")
    wait(3000)
    #vykresli obrazek z knihovny, levy horni roh je na pozici[50, 50]
    ev3.screen.draw_image(50, 50,ImageFile.BACKWARD)
    wait(3000)
    #vykresli obrazek ze souboru, levy horni roh je na pozici[0, 50]
    ev3.screen.draw_image(0, 50,"up.png",Color.BLUE)
    wait(3000)

def kresleniUtvaru():
    #obarvi pixel na pozici [50,50] na modrou barvu
    ev3.screen.draw_pixel(50, 50,Color.BLUE)
    ev3.screen.draw_pixel(50, 51,Color.BLUE)
    ev3.screen.draw_pixel(51, 50,Color.BLUE)
    ev3.screen.draw_pixel(51, 51,Color.BLUE)
    wait(3000)
    #nakresli usecku mezi body [50,50] a [150,100] modrou barvou
    ev3.screen.draw_line(50, 50, 150, 100, 3,Color.BLUE)
    wait(3000)
    #nakresli obdelniks s vrcholy [50,50] a [150, 100], bez zaobleni rohu
    # obdelnik bude vyplnen a bude nakreslen cernou barvou  
    ev3.screen.draw_box(50, 50, 150, 100, 0, True, Color.BLACK)
    wait(3000)
    ev3.screen.clear()
    x=ev3.screen.width/2#ziskame polovinu sirky displeje
    y=ev3.screen.height/2 #ziskame polovinu vysky displeje
    #nakreslime kruznici se stredem[x,y], polomerem 15, bez vyplne, cernou barvou
    ev3.screen.draw_circle(x, y, 15, False, Color.BLACK)
    wait(3000)
    #vytvorime screenshot obrazovky a ulozime ho do souboru s nazvem obr.png
    ev3.screen.save('obr')


### dalsi funkce nekresli na obrazovku EV3, ale vytvari obrazek, ktery neni zobrazen



def kresleniDoObr():
    #otevre obrazek UP z knihovny, ktery budeme upravovat
    obr=Image(ImageFile.UP,sub=False)
    # nakresli text na pozici [0,50]
    obr.draw_text(0,50, "ahoj",Color.WHITE, Color.BLACK)
    #zmeni kazdy pixel na bily, "smaze" obrazovku
    obr.screen.clear()
    #definovani fontu
    tiny_font = Font(size=6)
    # zmena na font tiny_font
    obr.screen.set_font(tiny_font)
    #vypsani textu zvolenum fontem
    obr.screen.print('hello')
    obr.screen.clear()
    #nvykresli obraz, levy roh horni roh ma pozici [50, 50]
    obr.screen.draw_image(50, 50,ImageFile.BACKWARD)
    #vykresli obrazek ze souboru, levy horni roh je na pozici[0, 50]
    obr.screen.draw_image(0, 50,"up.png",Color.BLUE)
    obr.screen.clear()
    #obarvi pixel na pozici [20,20] na modrou barvu
    obr.screen.draw_pixel(20, 20,Color.BLUE)
    wait(3000)
    #nakresli usecku mezi body [50,50] a [150,100] modrou barvou
    obr.screen.draw_line(50, 50, 150, 100, 3,Color.BLUE)
    wait(3000)
    #nakresli obdelniks s vrcholy [80,80] a [100, 90], bez zaobleni rohu
    # obdelnik bude vyplnen a bude nakreslen cernou barvou  
    obr.screen.draw_box(80, 80, 100, 90, 0, True, Color.BLACK)
    x=obr.screen.width/2#ziskame polovinu sirky displeje
    y=obr.screen.height/2 #ziskame polovinu vysky displeje
    #nakreslime kruznici se stredem[x,y], polomerem 15, bez vyplne, cernou barvou
    obr.screen.draw_circle(x, y, 30, False, Color.BLACK)
    wait(3000)
    #upraveny soubor ulozime jako obrazek s nazvem obr.png
    obr.screen.save('obr')




