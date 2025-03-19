"""
Jízda vpřed po zvolený čas podle knihovny time.

"""

import brian.motors as motors
import brian.sensors as sensors

l_large = motors.EV3LargeMotor(motors.MotorPort.A)
r_large = motors.EV3LargeMotor(motors.MotorPort.D)
cl = sensors.EV3.ColorSensorEV3(sensors.SensorPort.S1)

# Proměnná. Odhadnutá hodnota černé barvy pro color sensor.
# Obvykle se pohybuje kolem hodnoty 20, ale záleží na okolních podmínkách.
black = 25

while not cl.is_ready():
    pass

# Dokud vidí color sensor bílou, pokračuj v cyklu.
while cl.reflected_value() > black:
    l_large.run_at_speed(90)
    r_large.run_at_speed(90)

# Zastav motory pomocí příkazu brake - motory aktivně zastaví pohyb.
l_large.brake()
r_large.brake()
