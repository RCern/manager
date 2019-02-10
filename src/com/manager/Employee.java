package com.manager;

import java.util.LinkedList;
import java.util.List;

public class Employee {
    private int EmployeeId;
    private String name;
    private String type;
    private List<Project> projects = new LinkedList<>();
    private List<Team> teams = new LinkedList<>();
    private double salary;



    private int TimeParticipation;
    public Employee(int employeeid, String name, String type, List<Project> projects, List<Team> teams, double salary,int TimeParticipation) {
        this.EmployeeId = employeeid;
        this.name = name;
        this.type = type;
        this.projects = projects;
        this.teams = teams;
        this.salary = salary;
        this.TimeParticipation = TimeParticipation;
    }

    public int getEmployeeId() {
        return EmployeeId;
    }

    public void setEmployeeId(int employeeId) {
        EmployeeId = employeeId;
    }

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
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

    public int getTimeParticipation() {
        return TimeParticipation;
    }

    public void setTimeParticipation(int timeParticipation) {
        TimeParticipation = timeParticipation;
    }

    public void addProjects(Project p){
        projects.add(p);
    }

    public void addTeam(Team t){
        teams.add(t);
    }

    public void removeProjects(Project p){
        projects.remove(p.getProjectId());
    }

    public void removeTeams(Team t){
        projects.remove(t.getID());
    }



}

