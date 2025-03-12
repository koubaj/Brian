from pybricks.hubs import EV3Brick
from pybricks.ev3devices import (Motor, TouchSensor, ColorSensor,
                                 InfraredSensor, UltrasonicSensor, GyroSensor)
from pybricks.parameters import Port, Stop, Direction, Button, Color
from pybricks.tools import wait, StopWatch, DataLog
from pybricks.robotics import DriveBase
from pybricks.media.ev3dev import SoundFile, ImageFile
ev3 = EV3Brick()
#motor zapojen na port B, klasny smer proti hodinovym rucickam
mot=Motor(Port.B, Direction.COUNTERCLOCKWISE)

def startStop():
    mot.run(100)   #toci rychlosti 100deg/s, dokud neskončí kód nebo neproběhne příkaz pracující se servomotorem
    wait(1000)     #čeká 1000 ms
    mot.stop()     #zastaví motor, ale následně je možné otáčet volně servomotorem
    #mot.brake()   #zastaví moto a následně pasivně zabraňuje rotaci servomotoru
    #mot.hold()    #zastaví motor a zamezuje vychýlení od cíleného úhlu
    wait(1000)
    #otaci se 200 deg/s, 2000ms, pote zastavi a drzi, ceka dokud neni funkce dokoncena
    mot.run_time(200, 2000,Stop.HOLD, True)
    wait(100)
    
def runAngleTargetStalled():
    #otaci rychlosti 100deg/s, otoci se o 360 stupnu, pote zastavi a drzi, ceka dokud neni funkce dokoncena
    mot.run_angle(100, 360, then = Stop.HOLD, wait= True)
    wait(1000)
    #posun NA URCITY uhel, takže pokud z minuleho prikazu jsme na uhlu 360 a my chceme na 370, #proto se otoci pouze o 10 stupnu
    mot.run_target(100, 370, then=Stop.HOLD, wait=True)
    #otacei se rychlosti 200deg/s dokud neni zastaven vnejsi silou, pote zastavi ale kola se mohou volne tocit
    #limit pro zastaveni je 100% sily 
    uhel=mot.run_until_stalled(200, then=Stop.COAST, duty_limit=100)
    print(uhel)    #vraci konecny uhel otaceni

def infoMotor():
    mot.dc(-50) # 50% výkon na opačnou stranu, než je motor definovaný
    print(mot.speed()) # vraci uhlovou rychlost motoru ve deg/s
    wait(1000)
    mot.stop()      #zastavi, kola jsou pote volne otocne
    mot.brake()     #zastavi, kola jsou lehce brzdena
    #mot.hold()     #zastavi, kola se nenechaji vychylit od urceneho uhlu
    print(mot.angle()) #vraci uhel motoru
    mot.reset_angle(20) #zmeni hodnotu uhlu motoru na 20
    print(mot.angle()) #vypíše hodnotu úhlu, v tomto případě kolem 20 










