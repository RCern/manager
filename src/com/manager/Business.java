package com.manager;

import java.util.Calendar;

public class Business {
    private Calendar date;
    private double costs;
    private String description;
    public Calendar getDate() {
        return date;
    }

    public void setDate(Calendar date) {
        this.date = date;
    }

    public double getCosts() {
        return costs;
    }

    public void setCosts(double costs) {
        this.costs = costs;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }



    public Business(Calendar date, double costs, String description) {
        this.date = date;
        this.costs = costs;
        this.description = description;
    }
}
