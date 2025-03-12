from pybricks.hubs import EV3Brick
from pybricks.ev3devices import (Motor, TouchSensor, ColorSensor,
                                 InfraredSensor, UltrasonicSensor, GyroSensor)
from pybricks.parameters import Port, Stop, Direction, Button, Color
from pybricks.tools import wait, StopWatch, DataLog
from pybricks.robotics import DriveBase
from pybricks.media.ev3dev import SoundFile, ImageFile
ev3 = EV3Brick()


def jednoduchaInicializace():
    mot=Motor(Port.B)# inicializace motoru zapojeného do portu B
    senzorL = ColorSensor(Port.S2)# inicializace  světelného senzoru na port 2

def inicializaceSeSmerem():
    mot=Motor(Port.B, Direction.COUNTERCLOCKWISE) 
    mot=Motor(Port.C, Direction.CLOCKWISE)

def barvy():
    #ulozeni definovanych barev do proměnných
    cerna=Color.BLACK
    modra=Color.BLUE
    zelena=Color.GREEN
    zluta=Color.YELLOW
    cervena=Color.RED
    bila=Color.WHITE
    oranzova=Color.ORANGE
    fialova=Color.PURPLE

def tlacitka():
    #ulozeni definovanych tlacitek do proměnných
    horni=Button.UP
    dolni=Button.DOWN
    levy=Button.LEFT
    prostredni=Button.CENTER
    pravy=Button.RIGHT

def vytvorFont():
    #vytvoreni 
    big_font = Font(family='Times',size=24, bold=True, monospace=True, lang='cs')
    print(big_font.family) #vraci font
    print(big_font.style) # jestli je tucne nebo klasicke
    print(big_font.width) # maximalni tloustka znaku
    print(big_font.height) # vyska znaku
    print(big_font.text_width('a')) #sirka textu
    print(big_font.text_width('aa')) # sirka textu, dvojnasobna narozdil od predchoziho radku
    print(big_font.text_height('a')) # vyska textu
    print(big_font.text_height('abfvdšdv\ndve\ndaa') # vyska texu, stejna jako v predchozim radku

def knihovnaZvukuAObrazku():
    #ulozeni zvuku z knihovny do proměnne
    zvuk=SoundFile.ERROR
    #ulozeni obrazku z knihovny do proměnne
    obr=ImageFile.BACKWARD
















