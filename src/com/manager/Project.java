package com.manager;

import java.util.LinkedList;
import java.util.List;

public class Project {
    private String name;
    private double hours_allocated;
    private Date deadline;
    private double intake;
    private List<Bussiness> bussiness_trips = new LinkedList<>();
    private double costs;
    private Team team_allocated;
    private Employee employee_allocated;
    private int importance;
}
