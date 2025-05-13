class Reservation:
    def __init__(self, id, location, number_of_rental_days):
        self.id = id
        self.location = location
        self.number_of_rental_days = number_of_rental_days

    def get_id(self):
        return self.id

    def get_location(self):
        return self.location

    def get_number_of_rental_days(self):
        return self.number_of_rental_days