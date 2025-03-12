from pybricks.tools import wait, StopWatch
import math


class rizeni:
    def __init__ (self,motorLevy, motorPravy, polomer, rozvor):
        self.motorLevy=motorLevy
        self.motorPravy=motorPravy
        self.polomer=polomer
        self.rozvor=rozvor
        self.delkaKolo=2*math.pi *polomer
        self.delkaRozvor=math.pi*rozvor
        self.Kp=0.5
        self.Ki=0.0001
        self.Kd=0.02
        self.maxRychlost=150#750stupnu/s
        self.maxZrychleni=10
        self.maxRotace=30
        self.maxZrotace=100
        self.maxOdchylka=2
        self.cas=StopWatch()


    def settings(self, rychlost, zrychleni, rotace,zrotace):
        self.maxRychlost=rychlost
        self.maxRychlostDeg=(self.maxRychlost*360)/self.delkaKolo
        self.maxZrychleni=zrychleni
        self.maxRotace=rotace
        self.maxZrotace=zrotace

    def pid(self,Kp,Ki, Kd):
        self.Kp=Kp
        self.Ki=Ki
        self.Kd=Kd


    def straight(self, delka):
        sumaL=0
        sumaP=0
        minHodnotaL=0
        minHodnotaP=0
        otocKolo=delka/self.delkaKolo
        uhel=(delka/self.delkaKolo)*360
        rychlostL=0
        rychlostR=0
        cas2=0
        while ((abs(self.motorLevy.angle()-uhel)>self.maxOdchylka) or (abs(self.motorPravy.angle()-uhel)>self.maxOdchylka)):
            cas1=cas2
            cas2=self.cas.time()
            uhelL=self.motorLevy.angle()
            uhelP=self.motorPravy.angle()
            Pl=(uhel-uhelL)
            Pp=(uhel-uhelP)
            Dl=Pl-minHodnotaL
            Dp=Pp-minHodnotaP
            sumaL+=Pl
            sumaP+=Pp
            rychlostLmin=rychlostL
            rychlostRmin=rychlostR
            rychlostL=self.Kp*Pl+self.Kd*Dl+self.Ki*sumaL
            rychlostR=self.Kp*Pp+self.Kd*Dp+self.Ki*sumaP
            if (self.degtomm((rychlostL-rychlostLmin)/((cas2-cas1)/1000))>self.maxZrychleni):
                rychlostL=rychlostLmin+self.mmtodeg(self.maxZrychleni)
            if (self.degtomm((rychlostR-rychlostRmin)/((cas2-cas1)/1000))>self.maxZrychleni):
                rychlostR=rychlostRmin+self.mmtodeg(self.maxZrychleni)

            if abs(self.degtomm(rychlostL))>self.maxRychlost:
                if rychlostL<0:
                    rychlostL=-self.mmtodeg(self.maxRychlost)
                else:
                    rychlostL=self.mmtodeg(self.maxRychlost)
            if abs(self.degtomm(rychlostR))>self.maxRychlost:
                if rychlostR<0:
                    rychlostR=-self.mmtodeg(self.maxRychlost)
                else:
                    rychlostR=self.mmtodeg(self.maxRychlost)
            self.motorLevy.run(rychlostL)
            self.motorPravy.run(rychlostR)
        self.motorLevy.brake()
        self.motorPravy.brake()


    def turn(self,uhel):
        sumaL=0
        sumaP=0
        minHodnotaL=0
        minHodnotaP=0
        delkaOtocky=math.pi * self.rozvor*uhel/360
        otocKolo=delkaOtocky/self.delkaKolo
        uhel=(delkaOtocky/self.delkaKolo)*360
        print(uhel)
        rychlostOtacky=0
        uhel2=0
        cas2=0
        rychlostL=0
        rychlostR=0
        while ((abs(self.motorLevy.angle()-uhel)>self.maxOdchylka) or (abs(self.motorPravy.angle()+uhel)>self.maxOdchylka)):
            cas1=cas2
            cas2=self.cas.time()
            uhel1=uhel2
            #print('uhel:',uhel1)
            uhel2=self.angle()
            uhelL=self.motorLevy.angle()
            uhelP=self.motorPravy.angle()
            Pl=(uhel-uhelL)
            Pp=(uhel+uhelP)
            Dl=Pl-minHodnotaL
            Dp=Pp-minHodnotaP
            sumaL+=Pl
            sumaP+=Pp
            rychlostOtackyMin=rychlostOtacky
            rychlostOtacky=(uhel2-uhel1)/((cas2-cas1)/1000)
            rychlostLmin=rychlostL
            rychlostRmin=rychlostR
            rychlostL=self.Kp*Pl+self.Kd*Dl+self.Ki*sumaL
            rychlostR=self.Kp*Pp+self.Kd*Dp+self.Ki*sumaP
            zrychleniOtacky=self.degtorot((rychlostL-rychlostLmin)/((cas2-cas1)/1000))
            if (abs(zrychleniOtacky)>self.maxZrotace):
                d=self.rottodeg(self.maxZrotace)
                print("d:",d)
                if (zrychleniOtacky) >0:
                    print("zrychleni rotace oemzeni A")
                    rychlostL=rychlostLmin+d
                    rychlostR=rychlostRmin+d 
                else:
                    print("zrychleni rotace oemzeni B")
                    rychlostL=rychlostLmin-d
                    rychlostR=rychlostRmin-d
            if (abs(rychlostL)>self.rottodeg(self.maxRotace)):
                
                if rychlostOtacky >0:
                    print("rychlost rotace oemzeni A")
                    rychlostL=(self.rottodeg(self.maxRotace))
                    rychlostR=(self.rottodeg(self.maxRotace))
                else:
                    print("rychlost rotace oemzeni B")
                    rychlostL=-(self.rottodeg(self.maxRotace))
                    rychlostR=-(self.rottodeg(self.maxRotace))
            self.motorLevy.run(rychlostL)
            self.motorPravy.run(-rychlostR)
            wait(10)
        self.motorLevy.brake()
        self.motorPravy.brake()

    def drive(self, rychlost, otaceni): #mm/s, deg/s
        rychlostRov=(rychlost*360)/(self.delkaKolo)
        rychlostOtoc=(self.rozvor*otaceni)/(2*self.polomer)
        self.motorLevy.run(rychlostRov+rychlostOtoc)
        self.motorPravy.run(rychlostRov-rychlostOtoc)

    def distance(self):
        #vraci urazenou vzdalenost
        stupneL=self.motorLevy.angle()
        stupneR=self.motorPravy.angle()
        delka=(self.delkaKolo*stupneL/360+self.delkaKolo*stupneR/360)/2
        return delka
    def angle(self):
        #vraci uhel otoceni robota
        stupneL=self.motorLevy.angle()
        stupneR=self.motorPravy.angle()
        rozdilStupne=(stupneL-stupneR)/2
        delkaObvod=self.delkaKolo*rozdilStupne/360
        otoceni=(delkaObvod/self.delkaRozvor)*360
        return otoceni


    def state(self):
        #vraci [vzdalenost, rychlost, uhel robota, rychlost otaceni robota]
        cas1=self.cas.time()
        vzdalenost1=self.distance()
        uhel1=self.angle()
        wait(50)
        cas2=self.cas.time()
        vzdalenost2=self.distance()
        uhel2=self.angle()
        rychlostT=(vzdalenost2-vzdalenost1)/((cas2-cas1)/1000)
        rychlostR=(uhel2-uhel1)/((cas2-cas1)/1000)
        return [vzdalenost2,rychlostT, uhel2, rychlostR]
        
    def reset(self):
        #vynuluje vzdalenost a rotaci robota
        self.motorLevy.reset_angle(0)
        self.motorPravy.reset_angle(0)
    def stop(self):
        self.motorLevy.stop()
        self.motorPravy.stop()
    def mmtodeg(self, rychlost):
        return  (rychlost*360)/self.delkaKolo

    def degtomm(self, rychlost):
        return  (rychlost*self.delkaKolo)/360
    def rottodeg(self,rychlost):
        return (self.rozvor*rychlost)/(2*self.polomer)
    def degtorot(self,rychlost):
        return (2*self.polomer*rychlost)/(self.rozvor)


