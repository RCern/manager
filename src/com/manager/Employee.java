package com.manager;

import java.sql.Time;
import java.util.LinkedList;
import java.util.List;

public class Employee {
    private String name;
    private boolean inhouse;
    private List<Project> projects = new LinkedList<>();
    private List<Team> teams = new LinkedList<>();
    private double salary;
}

