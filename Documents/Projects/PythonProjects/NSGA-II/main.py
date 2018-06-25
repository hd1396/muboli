import random


class Individual:

    def __init__(self, arr, x, y):
        self.arr = arr
        self.dominated_solution = x
        self.domination_count = y



# Main Program
# Getting the parent population
S = [0] * 10
for i in range(0,6):
    S[i] = Objectives().f1()

F = S[:]

m = Generation(F).fast_non_dominated_sort()

# Now, for crowding distance we need to sort the population
