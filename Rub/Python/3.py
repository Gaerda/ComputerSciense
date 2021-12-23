class Home:
    def __init__(self, floors, name, years):
        self.floors = floors
        self.name = name
        self.years = years

    def __str__(self):
        return f'Количество этажей: {self.floors}\nНазвание дома: {self.name}\nГод постройки: {self.years}'

a = Home("9 этажей", "Oleg", "1990")
print (a)