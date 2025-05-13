def main():
    loc = Location(1, "voiture", True)
    res = Reservation(1, loc, 20)

    print("Location:", loc.get_name(), ", reserved:", loc.is_reserved_method())
    print("Reservation of", res.get_number_of_rental_days(),
          "days for id location", res.get_location().get_id())


if __name__ == "__main__":
    main()