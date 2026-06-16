"""Functions used in preparing Guido's gorgeous lasagna.

Learn about Guido, the creator of the Python language:
https://en.wikipedia.org/wiki/Guido_van_Rossum

This is a module docstring, used to describe the functionality
of a module and its functions and/or classes.
"""

EXPECTED_BAKE_TIME = 40
PREPARATION_TIME = 2


def bake_time_remaining(elapsed_bake_time):
    """Calculate the bake time remaining.

    Parameters:
        elapsed_bake_time (int): The baking time already elapsed.

    Returns:
        int: The remaining bake time (in minutes) derived from 'EXPECTED_BAKE_TIME'.

    Function that takes the actual minutes the lasagna has been in the oven as
    an argument and returns how many minutes the lasagna still needs to bake
    based on the `EXPECTED_BAKE_TIME`.
    """
    return EXPECTED_BAKE_TIME - elapsed_bake_time


def preparation_time_in_minutes(layers):
    """Calculate the lasagna preparation time based on layers amount.

    Parameters:
        layers (int): The amount of layers in the lasagna.

    Returns:
        int: The preparation time in minutes.

    Function that takes the actual layers of the lasagna an argument and
    returns how many minutes the lasagna preparation will take time.
    """

    return PREPARATION_TIME * layers


def elapsed_time_in_minutes(layers, minutes):
    """Calculate the elapsed time in minutes.

    Parameters:
        layers (int): The amount of layers in the lasagna.
        minutes (int): The amount of minutes already in the oven.

    Returns:
        int: The summaric time of lasagna preparation and cooking.

    Function that takes the actual lasagna layers amount and  minutes
    the lasagna has been in the oven as an argument and returns how many minutes
    will the lasagna will be done in sum.
    """

    return preparation_time_in_minutes(layers) + minutes
