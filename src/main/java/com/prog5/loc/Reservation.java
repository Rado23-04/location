package com.prog5.loc;

import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;

@Data
@NoArgsConstructor
@AllArgsConstructor
public class Reservation {
    private long id;
    private location location;
    private int numberOfRentalDays;
}
