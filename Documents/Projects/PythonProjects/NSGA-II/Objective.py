class Objectives:
    # Defining the objective function
    def f1(self):
        self.bit_series = []
        for i in range(0, 10):
            if(random.random() > 0.5):
               bit = 0
            else:
                bit = 1
            self.bit_series.append(bit)
        return self.bit_series
    # Defining the fitness function
    def fitness_calculation(self,arr):
        count = 0
        for i in range(0, 10):
            if(arr[i] == 1):
                count += 1
        return count