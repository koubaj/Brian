"""
Sledování čáry pomocí P regulátoru. hodnotu stanovíme odchylkou
naměřené hodnoty color sensoru od předpokládáné hodnoty černé čáry.

"""

import brian.motors as motors
import brian.sensors as sensors

l_large = motors.EV3LargeMotor(motors.MotorPort.A)
r_large = motors.EV3LargeMotor(motors.MotorPort.D)
cl = sensors.EV3.ColorSensorEV3(sensors.SensorPort.S1)

base_speed = 150
# Bez dodatečných úprav může čeerná hrát roli při sledování čáry.
# Čím nižší číslo, tím více se bude robot držet uprostřed čáry. 
black = 25
# Násobek pro P regulátor. Musí se odladit podle robota a dráhy.
kp = 5

while not cl.is_ready():
    pass

# Funkce na spočítání odchylky od černé čáry.
# Jako vstup dostane aktuální odražené světlo,
# jako výstup vrací korekci podle P regulátoru.
def get_correction(input_value):
    error = black - input_value
    P = kp * error
    return P


while True:
    # Uložíme do proměnné correction odchylku získanou z funkce.
    # run_at_speed přijímá pouze int, musíme přetypovat.
    correction = int(get_correction(cl.reflected_value()))

    # K rychlosti levého motru přičreme correction, od rychlosti pravého
    # correction odečteme. Díky tomu se bude robot snažit snížit rozdíl mezi
    # černou v proměnné black a černou naměřenou sensorem.
    l_large.run_at_speed(base_speed + correction)
    r_large.run_at_speed(base_speed - correction)
