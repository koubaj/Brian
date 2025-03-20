from brian.motors.MotorPort import *
from brian.motors.Motor import *
from brian.motors.EV3LargeMotor import *
from brian.motors.EV3MediumMotor import *
from brian.motors.NXTMotor import *
from brian.motors.MovementEnd import *
import brian.motors.motor_types
import brian.motors.motor_port_probe
import brian.motors.motor_limits


class MotorException(Exception):
    """Default motor Exception"""


class MotorAlreadyClosedError(MotorException):
    """Thrown when trying to access closed Motor"""


class MotorInitializationFailedError(MotorException):
    """Thrown when motor initialization fails during innit"""


class MotorPortAlreadyInUse(MotorException):
    """Thrown when trying to register motor or motor probe with port mode to already used port"""
