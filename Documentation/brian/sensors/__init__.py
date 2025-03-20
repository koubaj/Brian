from brian.sensors.SensorPort import *
from brian.sensors.BrianBrianComm import *
from brian.sensors.Sensor import *
import brian.sensors.sensor_port_probe
import brian.sensors.NXT as NXT
import brian.sensors.EV3 as EV3
import brian.sensors.HiTec as HiTec


class SensorException(Exception):
    """Default sensor Exception"""


class SensorAlreadyClosedError(SensorException):
    """Thrown when trying to access closed Sensor"""


class SensorIsNotReadyError(SensorException):
    """Thrown when trying to read values from a sensor that is not ready"""


class SensorPortAlreadyInUse(SensorException):
    """Thrown when trying to register sensor or sensor probe with autodetect to already used port"""
