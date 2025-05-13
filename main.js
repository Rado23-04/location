function main() {
  const loc = new Location(1, "voiture", true);
  const res = new Reservation(1, loc, 20);

  console.log("Location: " + loc.getName() + ", reserved : " + loc.isReserved());
  console.log("Reservation of " + res.getNumberOfRentalDays() + " days for id location " + res.getLocation().getId());
}
console.log(main());

