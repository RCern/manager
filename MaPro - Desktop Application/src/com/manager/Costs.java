package com.manager;

import java.util.Date;

public class Costs {
    private int costID;
    private double expanses;
    private double furniture;
    private double salary;
    private Date month;

    public Costs(int costID, double expanses, double furniture, double salary, Date month) {
        this.costID = costID;
        this.expanses = expanses;
        this.furniture = furniture;
        this.salary = salary;
        this.month = month;
    }

    public int getCostID() {
        return costID;
    }

    public void setCostID(int costID) {
        this.costID = costID;
    }

    public double getExpanses() {
        return expanses;
    }

    public void setExpanses(double expanses) {
        this.expanses = expanses;
    }

    public double getFurniture() {
        return furniture;
    }

    public void setFurniture(double furniture) {
        this.furniture = furniture;
    }

    public double getSalary() {
        return salary;
    }

    public void setSalary(double salary) {
        this.salary = salary;
    }

    public Date getMonth() {
        return month;
    }

    public void setMonth(Date month) {
        this.month = month;
    }


}
