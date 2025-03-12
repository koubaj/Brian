from pybricks.hubs import EV3Brick
from pybricks.ev3devices import (Motor, TouchSensor, ColorSensor,
                                 InfraredSensor, UltrasonicSensor, GyroSensor)
from pybricks.parameters import Port, Stop, Direction, Button, Color
from pybricks.tools import wait, StopWatch, DataLog
from pybricks.robotics import DriveBase
from pybricks.media.ev3dev import SoundFile, ImageFile
ev3 = EV3Brick()
motR=Motor(Port.B, Direction.CLOCKWISE) #definuje pravy motor
motL=Motor(Port.C, Direction.CLOCKWISE) #definuje levy motor
senzorL = ColorSensor(Port.S2) # definuje svetelny senzor
rob=DriveBase(motL, motR, 68.7, 169) #definuje rizeni celeho robota


def P():
    cerna = 3       #hodnota senzoru na cernem podkladu
    bila = 58       #hodnota senzoru na bilem podkladu
    stred = 50      #idealni hodnota svtelneho senzoru
    rychlost = 200  #rychlost robota v mm/s
    zatoc=0         #uhlova rychlost robota v deg/s
    P=1.5           #proporcionalni koeficient
    while True:
        chybaP = (senzorL.reflection() *(100/(bila-cerna+1))-3)-stred #normalizace senzoru
        zatoc= P*chybaP                 #vypocet P regulatoru
        rob.drive(rychlost, zatoc)      #zmena rotace robota


def PD():
    cerna = 3       #hodnota senzoru na cernem podkladu
    bila = 58       #hodnota senzoru na bilem podkladu
    stred = 50      #idealni hodnota svtelneho senzoru
    rychlost = 200  #rychlost robota v mm/s
    zatoc=0         #uhlova rychlost robota v deg/s
    P=1.5           #proporcionalni koeficient
    D=0.071         #derivacni koeficient
    staryD=0
    novyD=0
    while True:
        chybaP = (senzorL.reflection() *(100/(bila-cerna+1))-3)-stred #normalizace senzoru
        staryD=novyD
        novyD=chybaP
        chybaD=novyD-staryD             #derivacni chyba
        zatoc= P*chybaP + D * chybaD    #regulator
        rob.drive(rychlost, zatoc)      #zmena rotace robota


def PID():
    cerna = 3       #hodnota senzoru na cernem podkladu
    bila = 58       #hodnota senzoru na bilem podkladu
    stred = 50      #idealni hodnota svtelneho senzoru
    rychlost = 200  #rychlost robota v mm/s
    zatoc=0         #uhlova rychlost robota v deg/s
    P=1.5           #proporcionalni koeficient
    D=0.071         #derivacni koeficient
    I=0.0071        #integracni koeficient
    chybaI=0
    staryD=0
    novyD=0
    while True:
        chybaP = (senzorL.reflection() *(100/(bila-cerna+1))-3)-stred #normalizace 
        staryD=novyD
        novyD=chybaP
        chybaD=novyD-staryD                         #derivacni chyba
        chybaI=chybaI + chybaP                      #integracni chyba
        zatoc= P*chybaP + D * chybaD + I* chybaI    #vypocet regulatoru
        rob.drive(rychlost, zatoc)                  #zmena rotace robota

def PIDantialiasing():
    cerna = 3       #hodnota senzoru na cernem podkladu
    bila = 58       #hodnota senzoru na bilem podkladu
    stred = 50      #idealni hodnota svtelneho senzoru
    rychlost = 200  #rychlost robota v mm/s
    zatoc=0         #uhlova rychlost robota v deg/s
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

