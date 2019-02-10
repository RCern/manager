package com.manager;

import java.util.LinkedList;
import java.util.List;

public class Team {
    private int ID;
    private String name;
    private List<Integer> employees_in = new LinkedList<>();
    private List<Integer> projects_allocated = new LinkedList<>();
    private List<Integer> hours_per_project = new LinkedList<>();
    public Team(String name, List<Integer> employees_in, List<Integer> projects_allocated, List<Integer> hours_per_project) {
        this.name = name;
        this.employees_in = employees_in;
        this.projects_allocated = projects_allocated;
        this.hours_per_project = hours_per_project;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public List<Integer> getEmployees_in() {
        return employees_in;
    }

    public void setEmployees_in(List<Integer> employees_in) {
        this.employees_in = employees_in;
    }

    public List<Integer> getProjects_allocated() {
        return projects_allocated;
    }

    public void setProjects_allocated(List<Integer> projects_allocated) {
        this.projects_allocated = projects_allocated;
    }

    public List<Integer> getHours_per_project() {
        return hours_per_project;
    }

    public void setHours_per_project(List<Integer> hours_per_project) {
        this.hours_per_project = hours_per_project;
    }


    public int getID() {
        return ID;
    }

    public void setID(int ID) {
        this.ID = ID;
    }
}
