"""
Jízda vpřed po zvolený čas podle knihovny time.

"""

import brian.motors as motors
import time # Abychom mohli použít modul time.

l_large = motors.EV3LargeMotor(motors.MotorPort.A)
r_large = motors.EV3LargeMotor(motors.MotorPort.D)

l_large.run_at_speed(90)
r_large.run_at_speed(90)

# Program se přeruší na pět sekund, ale robot bude pokračovat v jízdě.
time.sleep(5)