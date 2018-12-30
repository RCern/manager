package com.manager;

public class Bussiness {
    public Date getDate() {
        return date;
    }

    public void setDate(Date date) {
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

    private Date date;
    private double costs;
    private String description;

    public Bussiness(Date date, double costs, String description) {
        this.date = date;
        this.costs = costs;
        this.description = description;
    }
}
