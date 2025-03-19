"""
Vypisuj hodnotu odraženého světla na obrazovku Briana.

"""

import brian.sensors as sensors

# Inicializace color sensoru na portu 1. Pojmenujeme ho jako cl.
cl = sensors.EV3.ColorSensorEV3(sensors.SensorPort.S1)

# Počkej, dokud nebude sensor nachystaný k použití.
while not cl.is_ready():
    pass

while True:
    # Vypisuj odražené světlo. Rozezí 0 - 100 (černá - bílá). 
    print(cl.reflected_value())
