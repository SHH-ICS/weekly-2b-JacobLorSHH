import math

print('Your output must be a number!')
try:
    radius = float(input('What is the radius? '))
    area = (radius ** 2) * math.pi
    circumference = (radius * 2) * math.pi
    print('The area of your circle is:',area)
    print("The circumference of your circle is:",circumference)
except ValueError:
    print('Not a Number')
