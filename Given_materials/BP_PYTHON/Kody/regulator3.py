from pybricks.hubs import EV3Brick
from pybricks.ev3devices import (Motor, TouchSensor, ColorSensor,
                                 InfraredSensor, UltrasonicSensor, GyroSensor)
from pybricks.parameters import Port, Stop, Direction, Button, Color
from pybricks.tools import wait, StopWatch, DataLog
from pybricks.robotics import DriveBase
from pybricks.media.ev3dev import SoundFile, ImageFile
import math

#touchL=TouchSensor(Port.S3)
#touchR=TouchSensor(Port.S2)
def kalibrace2():
    motC.run(-100)
    
    while(!(touchL.pressed())):
        uhelL=motC.angle()
    motC.run(100)
    while(!(touchR.pressed())):
        uhelL=motC.angle()
    motC.stop()
    uhelStred=(uhelL+uhelR)/2
    motC.run_target(100,)
def kalibraceUltrazvuku():
    uhelL=motC.run_until_stalled(-90, then=Stop.COAST, duty_limit=60)
    uhelR=motC.run_until_stalled(90, then=Stop.COAST, duty_limit=60)
    uhelStred=(uhelL+uhelR)/2
    motC.run_target(90, uhelStred, then=Stop.HOLD, wait=True)
    motC.reset_angle(0)
    print(uhelL, uhelStred, uhelR, motC.angle())


def PID2():
    cerna = 5
    bila = 75
    stred = 50
    rychlost = 250
    kp=1.5
    dt=0.00176
    pc=8.65/20
    k=1
    #P
    #P =kp
    #I=0
    #D=0

    #PI s navysenim o 10% I slozku pohoda
    #P=0.45 * kp
    #I=1.1*(1.2*P*dt)/pc
    #D=0

    #PD projede to az na prvotocivou, tu jel nadvakrat
    #P=0.8 * kp
    #D=P*pc/(8*dt)
    #I=0

    #PID moc vysoka konstanta, mozna doplnit antialiasing
    # pomohlo ale neporovnavat s nulou
    # zvysis o 10% I slozku a pak parada
    #P=0.6*kp
    #I=1.1*2*P*dt/pc
    #D=P*pc/(8*dt)

    #PID no overshoot
    P=0.3*kp
    I=1.2*2*P*dt/pc
    D=P*pc/(3*dt)

    chybaI=0
    staryD=0
    novyD=0
    zatoc=0
    flag=0
    strana=1# 1=L, -1=P
    while True:

        chybaP = ((senzorL.reflection()-cerna) *(100/(bila-cerna)))-stred #normalizovane
        if (chybaP <-49) and flag==0 :
            flag=1
            strana=strana*(-1)
            chybaI=0
            print("prehazuju")
        #if flag==100:

        #    flag=101
        if chybaP>49:
            flag=0
        chybaI=chybaI + chybaP
        if (chybaI>200000 and chybaP<0) or (chybaI<-200000 and chybaP>0):
            chybaI=0
        staryD=novyD
        novyD=chybaP
        chybaD=novyD-staryD
        zatoc = strana*( P * chybaP + D*chybaD + I * chybaI) #+uhel
        vzdalenost=senzorU.distance()
        """
        if vzdalenost<200:
            print("vyhybam se")
            vyhnise()
            print("konec")
        """
        rob.drive(rychlost, zatoc)    

def vyhnise():
    distance1=senzorU.distance()
    print("zacinam2")
    rychlost=150
    P=50
    refVzdal=80
    motC.run(90)
    distance=269
    
    while (distance<270):
        distance=senzorU.distance()
    print("nasel jsem uhel", motC.angle())
    rob.stop()
    motC.stop()
    krajniUhel=motC.angle()
    r=math.tan(math.radians(krajniUhel))*distance1 +55
    motC.run_target(90, 0, then=Stop.COAST, wait=False)
    krajniUhel=krajniUhel+math.degrees(abs(math.atan(refVzdal/distance)))
    rob.turn(krajniUhel)
    rob.drive(rychlost, 0)
    uhelC=motC.angle()
    print("jdu se otacet", r)
    while (uhelC>-90):
        uhelC=motC.angle()
        distance=senzorU.distance()
        #sledovani objektu
        while(distance>250):
            motC.run(-90)
            distance=senzorU.distance()
            if motC.angle()<-90:
                break
        motC.stop()
        maxVzdal=abs(math.sin(uhelC)*distance)
        zatoc=-P*(maxVzdal-(refVzdal+67))/distance
        #tretiStrana=(distance**2 +maxVzdal**2)**0.5
        #uhelOtoceni=math.atan((refVzdal-maxVzdal)/tretiStrana)
        #rob.turn(uhelOtoceni)
        #wait(100)
        #print("cus")
        #print("zatoc:",zatoc, maxVzdal, distance)
        #print("zatoc",zatoc)
        rob.drive(rychlost,zatoc)
        #print("uhel",uhelC)
    print("za uhlem")
    #rob.stop()
    #wait(1000)
    rob.drive(rychlost,0)
    #while(distance<250):
    #    distance=senzorU.distance()
    #robotUhel=rob.angle()
    #k=0
    #r=120
    zatoc=-(360*rychlost)/(2*math.pi*r)
    while(senzorL.reflection()>20):
        distance=senzorU.distance()
        if distance<400:
            rob.drive(rychlost,0)
        else:
            rob.drive(rychlost,zatoc)
    rob.stop()

def vyhnise2():
    print("spusteno")
    uhel1=rob.angle()
    r1=70
    rychlost=100
    zatoc=(360*rychlost)/(2*math.pi*r1)
    rob.drive(rychlost,zatoc)
    uhel2=rob.angle()
    while((uhel2-uhel1)<45):
        uhel2=rob.angle()
    print("konec prvni kruznice")
    r2=160
    rychlost=200
    zatoc=-(360*rychlost)/(2*5.65*math.pi*r2)
    print("zatoc:", zatoc)
    rob.drive(rychlost,zatoc)
    print("druha kruznice")
    light=100
    while(light>40):
        light=((senzorL.reflection()-cerna) *(100/(bila-cerna)))
    rob.stop()
    """ 
    motL.brake()
    motR.brake()
    motL.stop()
    motR.stop()
    """
    

def vyhnise3():
    print("spusteno")
    uhel1=rob.angle()
    r1=70
    rychlost=200
    zatoc=(360*rychlost)/(2*math.pi*r1)
    rob.drive(rychlost,zatoc)
    uhel2=rob.angle()
    while((uhel2-uhel1)<90):
        uhel2=rob.angle()
    print("konec prvni kruznice")
    uhel1=rob.angle()
    r1=160
    rychlost=200
    zatoc=-(360*rychlost)/(2*math.pi*r1)
    rob.drive(rychlost,zatoc)
    uhel2=rob.angle()
    while((uhel2-uhel1)<180):
        uhel2=rob.angle()


    r2=160
    rychlost=200
    zatoc=-(360*rychlost)/(2*5.65*math.pi*r2)
    print("zatoc:", zatoc)
    rob.drive(rychlost,zatoc)
    print("druha kruznice")
    light=100
    while(light>40):
        light=((senzorL.reflection()-cerna) *(100/(bila-cerna)))
    rob.stop()

    return 0







def PID():
    cerna = 5
    bila = 83
    
    stred = 50
    rychlost = 200
    #wait(1000)
    #motC.run_angle(100, 45, then = Stop.HOLD, wait= True)
    #wait(1000)
    kp=1.3
    dt=0.00176
    pc=8.65/20
    #P
    #P =kp
    #I=0
    #D=0

    #PI s navysenim o 10% I slozku pohoda
    #P=kp * 0.45
    #I=1.1*(1.2*P*dt)/pc
    #D=0

    #PD projede to az na prvotocivou, tu jel nadvakrat
    #P=0.8 * kp
    #D=P*pc/(8*dt)
    #I=0

    #PID moc vysoka konstanta, mozna doplnit antialiasing
    # pomohlo ale neporovnavat s nulou
    # zvysis o 10% I slozku a pak parada
    P=0.6*kp
    I=1.2*2*P*dt/pc
    D=P*pc/(8*dt)

    #poleD=[0, 0, 0,0,0,0,0,0,0,0,0,0]
    chybaI=0
    staryD=0
    novyD=0
    zatoc=0
    k=0
    #cas jednoho pruchodu je 1.2 ms
    #kmit 6.98/20
    #P=1.2
    cas=StopWatch()
    cas1=cas.time()
    while True:

        if k==10000:
            cas2=cas.time()
            rych=(cas2-cas1)/10000
            print('cas:', rych)
        k+=1

        chybaP = ((senzorL.reflection()-cerna) *(100/(bila-cerna)))-stred #normalizovane
        #uhel=motC.angle()
        chybaI=chybaI + chybaP
        if (chybaI>2000 and chybaP<0) or (chybaI<-2000 and chybaP>0):
            chybaI=0
        staryD=novyD
        novyD=chybaP
        chybaD=novyD-staryD
        #poleD.pop(0)
        #poleD.append(chybaD)
        #chybaD=max(poleD, key=abs)
        zatoc = -( P * chybaP + D*chybaD + I * chybaI) #+uhel
        vzdalenost=senzorU.distance()
        """
        if vzdalenost<200:
            print("vyhybam se")
            vyhnise()
            print("konec")
        """
        rob.drive(rychlost, zatoc)


motR=Motor(Port.B, Direction.CLOCKWISE)
motL=Motor(Port.D, Direction.CLOCKWISE)
motC=Motor(Port.A, Direction.CLOCKWISE)
#touchL=TouchSensor(Port.S3)
#touchR=TouchSensor(Port.S2)
senzorL = ColorSensor(Port.S2)
senzorU= UltrasonicSensor(Port.S3)
rob=DriveBase(motL, motR, 69.2, 126)

PID()
#kalibraceUltrazvuku()
#rob.drive(100,0)
#while(True):
#    if senzorU.distance()<250:
#        vyhnise()