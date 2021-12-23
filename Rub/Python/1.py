import random
from typing import Counter

count = 0
x = random.randint(0,20)
counter = 0
print("Отгадай число от 0 до 20")
print("Как тебя зовут?")
player = input()
print(player)
while count !=x:
    count = int(input(str(player)+ "введите число:\n"))
    counter = counter + 1
    if count > x:
        print("Число должно быть меньше")
    elif count < x:
        print("Число должно быть больше")
    else:
        print("Вы угадали загаданное число за "+ str(counter) + "попыток")
        break