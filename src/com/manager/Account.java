package com.manager;

import java.util.List;

public class Account {


    private boolean admin;
    private String username;
    private String password;

    public Account(boolean admin, String username, String password) {
        this.admin = admin;
        this.username = username;
        this.password = password;
    }

    public boolean isAdmin() {
        return admin;
    }

    public void setAdmin(boolean admin) {
        this.admin = admin;
    }

    public String getUsername() {
        return username;
    }

    public void setUsername(String username) {
        this.username = username;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }


}
