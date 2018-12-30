package com.manager;

import java.util.LinkedList;
import java.util.List;

public class Team {
    private String name;
    private List<Integer> employees_in = new LinkedList<>();
    private List<Integer> projects_allocated = new LinkedList<>();
    private List<Integer> hours_per_project = new LinkedList<>();
}
