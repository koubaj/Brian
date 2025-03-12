from pybricks.hubs import EV3Brick
from pybricks.ev3devices import (Motor, TouchSensor, ColorSensor,
                                 InfraredSensor, UltrasonicSensor, GyroSensor)
from pybricks.parameters import Port, Stop, Direction, Button, Color
from pybricks.tools import wait, StopWatch, DataLog
from pybricks.robotics import DriveBase
from pybricks.media.ev3dev import SoundFile, ImageFile
ev3 = EV3Brick()

def kontrolaZvuku():
    ev3.speaker.beep(800,1500) # zvuk o frekvenci 800Hz a delky 1500ms
    wait(100)
    ev3.speaker.beep(1000,1300)
    wait(100)
    ev3.speaker.beep(1200,1100)

def noty():
    #urcuje sekvenci not
    noty=['C4/4_','D4/4','E4/4_','F4/4','G4/4_','A4/4','B4/4_','C5/4']
    #prehraje sekvenci not tempem 150 ctvrtovych not za minutu
    ev3.speaker.play_notes(noty,150) 

def prehrajSoubor():
    ev3.speaker.play_file('boing.wav') #prehraje prilozeny soubor
    wait(100)
    ev3.speaker.play_file(SoundFile.boing)

def rec():
    ev3.speaker.say('I love EV3') #precte dany text
    #nastavi, aby mluvci text cetl ceskt, zenskym hlasem,rychlosti 150 slov za min a vyska tonu 90%
    ev3.speaker.set_speech_options('cs', 'f4', 150, 90)
    wait(100)
    ev3.speaker.say('Ahoj, jak se máš?')
    wait(100)
    ev3.speaker.say('I love EV3')
    #snizi na hlasitost 20% pro vsechny funkce
    ev3.speaker.set_volume(20, which='_all_')
    ev3.speaker.say('I love EV3')
