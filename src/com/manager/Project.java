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

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public double getHours_allocated() {
        return hours_allocated;
    }

    public void setHours_allocated(double hours_allocated) {
        this.hours_allocated = hours_allocated;
    }

    public Date getDeadline() {
        return deadline;
    }

    public void setDeadline(Date deadline) {
        this.deadline = deadline;
    }

    public double getIntake() {
        return intake;
    }

    public void setIntake(double intake) {
        this.intake = intake;
    }

    public List<Bussiness> getBussiness_trips() {
        return bussiness_trips;
    }

    public void setBussiness_trips(List<Bussiness> bussiness_trips) {
        this.bussiness_trips = bussiness_trips;
    }

    public double getCosts() {
        return costs;
    }

    public void setCosts(double costs) {
        this.costs = costs;
    }

    public Team getTeam_allocated() {
        return team_allocated;
    }

    public void setTeam_allocated(Team team_allocated) {
        this.team_allocated = team_allocated;
    }

    public Employee getEmployee_allocated() {
        return employee_allocated;
    }

    public void setEmployee_allocated(Employee employee_allocated) {
        this.employee_allocated = employee_allocated;
    }

    public int getImportance() {
        return importance;
    }

    public void setImportance(int importance) {
        this.importance = importance;
    }

    private int importance;

    public Project(String name, double hours_allocated, Date deadline, double intake, List<Bussiness> bussiness_trips, double costs, Team team_allocated, Employee employee_allocated, int importance) {
        this.name = name;
        this.hours_allocated = hours_allocated;
        this.deadline = deadline;
        this.intake = intake;
        this.bussiness_trips = bussiness_trips;
        this.costs = costs;
        this.team_allocated = team_allocated;
        this.employee_allocated = employee_allocated;
        this.importance = importance;
    }
    /*
    public int dynamic_importance(List<Project> prj){
        Project most_imp;
        for (int i = 0; i < prj.size();i++){
            if (prj(i).get().deadline > prj){

            }
    }
        return ;
    }*/
}
