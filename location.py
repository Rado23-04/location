class Location:
    def __init__(self, id, name, is_reserved):
        self.id = id
        self.name = name
        self.is_reserved = is_reserved

    def get_name(self):
        return self.name

    def is_reserved_method(self):
        return self.is_reserved

    def get_id(self):
        return self.id
