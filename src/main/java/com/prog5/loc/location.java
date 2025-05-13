package com.prog5.loc;

import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;

@Data
@AllArgsConstructor
@NoArgsConstructor
public class location {
    private long id;
    private String name;
    private boolean isReserved;
}
