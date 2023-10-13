import math

print('Your output most be a number!')
try:
    radius = float(input('What is the radius?'))
    area = (radius ** 2) * math.pi
    circumference = (radius * 2) * math.pi
    print('area:',area)
    print("circumference:",circumference)
except ValueError:
    print('Not a Number')
