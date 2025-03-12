from pybricks.hubs import EV3Brick
from pybricks.ev3devices import (Motor, TouchSensor, ColorSensor,
                                 InfraredSensor, UltrasonicSensor, GyroSensor)
from pybricks.parameters import Port, Stop, Direction, Button, Color
from pybricks.tools import wait, StopWatch, DataLog
from pybricks.robotics import DriveBase
from pybricks.media.ev3dev import SoundFile, ImageFile
ev3 = EV3Brick()
motR=Motor(Port.B, Direction.CLOCKWISE) #definice pravyho motoru
motL=Motor(Port.C, Direction.CLOCKWISE) #definice levyho motoru
#definice robota, levy a pravy motor, 68.7 mm polomer kola, 169 vzdalenost kol od sebe
rob=DriveBase(motL, motR, 68.7, 169) 


def jedAOtoc():
    #urci maximalni rychlost 150mm/s, max zruchleni 50mm/s^2
    #max rotace 80 deg/s, max zrychleni rotace 30deg/s^2
    rob.settings(150,50,80,30)
    rob.straight(1000) #ujede 1 metr
    wait(100)
    rob.turn(360) # otoci se na miste o 360 stupnu

def jedAInfo():
    rob.drive(70,-10) #jed rychlosti 70mm/s, rotuj -10 deg/s
    wait(1000)
    rob.stop() #zastavi robota, potom nebrzdi kola
    print(rob.distance()) # vraci urazenou vzdalenost
    print(rob.angle()) # vraci uhel, o ktery se robot otocil
    rob.reset() # vynuluje vzdalenost a uhel
    print(rob.distance()) #vraci vzdalenost, nyni 0
    print(rob.angle()) # vraci uhel, nyni 0
    rob.drive(70,-10)
    wait(2000)
    #vraci pole s urazenou vzdalenosti, s rychlosti, uhlem robota a s rychlosti rotace
    print(rob.state())
    rob.stop()

