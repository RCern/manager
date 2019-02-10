package com.manager;

import java.util.Calendar;

import java.util.LinkedList;
import java.util.List;

public class Project {
    private int ProjectId;
    private String name;
    private double hours_allocated;
    private Calendar deadline;
    private double intake;
    private List<Business> business_trips = new LinkedList<>();
    private double costs;
    private Team team_allocated;

    public int getProjectId() {
        return ProjectId;
    }

    public void setProjectId(int projectId) {
        ProjectId = projectId;
    }

    public int getPriority() {
        return priority;
    }

    public void setPriority(int priority) {
        this.priority = priority;
    }

    private int priority;

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

    public Calendar getDeadline() {
        return deadline;
    }

    public void setDeadline(Calendar deadline) {
        this.deadline = deadline;
    }

    public double getIntake() {
        return intake;
    }

    public void setIntake(double intake) {
        this.intake = intake;
    }

    public List<Business> getBusiness_trips() {
        return business_trips;
    }

    public void setBusiness_trips(List<Business> business_trips) {
        this.business_trips = business_trips;
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



    public Project(int ProjectId, String name, double hours_allocated, Calendar deadline, double intake, List<Business> business_trips, double costs, Team team_allocated, Employee employee_allocated, int importance) {
        this.ProjectId = ProjectId;
        this.name = name;
        this.hours_allocated = hours_allocated;
        this.deadline = deadline;
        this.intake = intake;
        this.business_trips = business_trips;
        this.costs = costs;
        this.team_allocated = team_allocated;
        this.priority = importance;
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
