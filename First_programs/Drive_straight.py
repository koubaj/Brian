"""
První program na ovládání motrů. Neomezená jízda vpřed.

"""

# Importování knihovny motors, abychom mohli ovládat motory Briana.
import brian.motors as motors

# Inicializace motorů - pojmenujeme si levý (l_large) a pravý (r_large) large motor.
l_large = motors.EV3LargeMotor(motors.MotorPort.A)
r_large = motors.EV3LargeMotor(motors.MotorPort.D)

# Nekonečný cyklus. Bude se opakovat, dokud manuálně nevypneme program.
while True:
    # Ať jede pravý / levý motor dopředu rychlostí 90 stupňů za sekundu.
    l_large.run_at_speed(90)
    r_large.run_at_speed(90)