from pybricks.hubs import EV3Brick
from pybricks.ev3devices import (Motor, TouchSensor, ColorSensor,
                                 InfraredSensor, UltrasonicSensor, GyroSensor)
from pybricks.parameters import Port, Stop, Direction, Button, Color
from pybricks.tools import wait, StopWatch, DataLog
from pybricks.robotics import DriveBase
from pybricks.media.ev3dev import SoundFile, ImageFile
ev3 = EV3Brick()

###### cas ######
def cas():
    s=StopWatch() #inicializace stopek (od teto chvíle běží čas)
    wait(100) #ceka 100ms
    print(s.time()) #vypíše současný čas, tedy kolem 100
    s.pause() #pozastaví měření času
    wait(50) # tento čas se nezapočítává
    print(s.time()) # vypíše stejný nebo velmi blízký čas k prvnímu výpisu
    s.resume() #pokračování měření času
    wait(30)
    print(s.time()) # vypíše současný čas ,tedy kolem 130
    s.reset() #vynuluje měření času 
    wait(20) 
    print(s.time()) # vypíše současný čas od posledního vynulování ,tedy kolem 20

#### tlacitka #####
def tlacitka():
    tlacitka=ev3.buttons.pressed() # vypise v poli, jaka tlacitka jsou sepnuta
    print(tlacitka)
    if tlacitka[0] ==Button.CENTER:  #pokud na pozici 0 je prostřední tlačítko
        print("prostredni tlacitko je zmackle")
    ev3.light.on(Color.RED) #zapne podsviceni tlacitek v cervene barve
    wait(5000)
    ev3.light.off() #vypne podsviceni tlacitek
    wait(5000)

#### baterie #####
def baterie():
    print("proud baterie v mA:"ev3.battery.current())
    print("napeti baterie v mV:"ev3.battery.voltage())




#### data ####
def zapisDat():
    data = DataLog('mereni', 'autor', 'napeti baterie',name='mereniBaterie', timestamp=False, extension='csv', append='False')
    for i in range(10):
        mereni=i
        autor = 'Adam'
        napeti=ev3.battery.voltage()#zjisti aktualni napeti baterie
        data.log(mereni, autor, napeti)
        wait(100)
