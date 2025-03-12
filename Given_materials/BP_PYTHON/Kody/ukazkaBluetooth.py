from pybricks.hubs import EV3Brick
from pybricks.ev3devices import (Motor, TouchSensor, ColorSensor,
                                 InfraredSensor, UltrasonicSensor, GyroSensor)
from pybricks.parameters import Port, Stop, Direction, Button, Color
from pybricks.tools import wait, StopWatch, DataLog
from pybricks.robotics import DriveBase
from pybricks.media.ev3dev import SoundFile, ImageFile
from pybricks.messaging import BluetoothMailboxServer, TextMailbox, BluetoothMailboxClient, NumericMailbox
ev3 = EV3Brick()
"""
pred spustenim 
"""



def client():
    #zapnuti bluetooth spojeni jako client
    client = BluetoothMailboxClient()
    #vytvoreni textove schranky
    mbox = TextMailbox('greeting', client)
    #vytvoreni ciselne schranky
    mbox2 = NumericMailbox('number', client)
    #spojeni se zarizenim ev3dev 
    client.connect('ev3dev')
    #print('pripojeno')

    #posle hodnotu 3
    mbox2.send(3)
    #ceka dokud neprijme hodnotu
    mbox.wait()
    #ceka dokud neprijme jinou hodnotu nez je ve schrance
    #mbox.wait_new()
    #ev3.screen.print(mbox.read())
    wait(3000)

def server():
    #zapnuti bluetooth spojeni jako server
    server = BluetoothMailboxServer()
    #vytvoreni textove schranky
    mbox = TextMailbox('greeting', server)
    #vytvoreni ciselne schranky
    mbox2 = NumericMailbox('number', server)
    ev3.screen.print('waiting for connection...')
    #ceka dokud neni navazano spojeni
    server.wait_for_connection()
    ev3.screen.print('connected!')
    #ceka dokud neprijme hodnotu
    mbox2.wait()
    #precte hodnotu ze scharnky
    ev3.screen.print(mbox2.read())
    #posle text
    mbox.send('hello to you!')
    wait(3000)