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
    private double costs;
    private Team team_allocated;
    private int priority;

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



    public Project(int ProjectId, String name, double hours_allocated, Calendar deadline, double intake, double costs, Team team_allocated, Employee employee_allocated, int importance) {
        this.ProjectId = ProjectId;
        this.name = name;
        this.hours_allocated = hours_allocated;
        this.deadline = deadline;
        this.intake = intake;
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
