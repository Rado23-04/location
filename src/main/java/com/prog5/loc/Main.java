package com.prog5.loc;

public class Main {
    public static void main(String[] args) {
        location loc = new location(1,"voiture",true);
        Reservation res = new Reservation(1,loc,20);

        System.out.println("Location: " + loc.getName() + ", reserved : " + loc.isReserved());
        System.out.println("Reservation of " + res.getNumberOfRentalDays() + " days for id location " + res.getLocation().getId());
    }
}
