package com.manager;

import java.util.LinkedList;
import java.util.List;

public class Employee {
    public Employee(String name, boolean inhouse, List<Project> projects, List<Team> teams, double salary) {
        this.name = name;
        this.inhouse = inhouse;
        this.projects = projects;
        this.teams = teams;
        this.salary = salary;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public boolean isInhouse() {
        return inhouse;
    }

    public void setInhouse(boolean inhouse) {
        this.inhouse = inhouse;
    }

    public List<Project> getProjects() {
        return projects;
    }

    public void setProjects(List<Project> projects) {
        this.projects = projects;
    }

    public List<Team> getTeams() {
        return teams;
    }

    public void setTeams(List<Team> teams) {
        this.teams = teams;
    }

    public double getSalary() {
        return salary;
    }

    public void setSalary(double salary) {
        this.salary = salary;
    }

    private String name;
    private boolean inhouse;
    private List<Project> projects = new LinkedList<>();
    private List<Team> teams = new LinkedList<>();
    private double salary;
}

