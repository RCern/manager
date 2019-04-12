package com.manager;

import java.util.Date;

public class Liecences {
    public Liecences(int licenceID, String name, Date expiration_date, double costs) {
        LicenceID = licenceID;
        this.name = name;
        this.expiration_date = expiration_date;
        this.costs = costs;
    }

    public int getLicenceID() {
        return LicenceID;
    }

    public void setLicenceID(int licenceID) {
        LicenceID = licenceID;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public Date getExpiration_date() {
        return expiration_date;
    }

    public void setExpiration_date(Date expiration_date) {
        this.expiration_date = expiration_date;
    }

    public double getCosts() {
        return costs;
    }

    public void setCosts(double costs) {
        this.costs = costs;
    }

    private int LicenceID;
    private String name;
    private Date expiration_date;
    private double costs;


}
