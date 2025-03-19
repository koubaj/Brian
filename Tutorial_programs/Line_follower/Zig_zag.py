"""
Jednoduchý program sledování čáry. Střídání rychlosti
jízdy levého a pravého motoru podle color sensoru.

"""

import brian.motors as motors
import brian.sensors as sensors

l_large = motors.EV3LargeMotor(motors.MotorPort.A)
r_large = motors.EV3LargeMotor(motors.MotorPort.D)
cl = sensors.EV3.ColorSensorEV3(sensors.SensorPort.S1)

# Odhadnutá hodnota černé barvy pro color sensor.
black = 25

while not cl.is_ready():
    pass

"""
Pokud color sensor vidí černou barvu, jede rychleji pravý motor.
Jinak pojede rychleji levý motor. To zajistí jednoduché, ale spolehlivé sledování čáry.

"""

while True:
    if cl.reflected_value() < black:
        l_large.run_at_speed(50)
        r_large.run_at_speed(150)
    else:
        l_large.run_at_speed(150)
        r_large.run_at_speed(50)

