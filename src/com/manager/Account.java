package com.manager;


public class Account {

    private String Username;
    private String Password;
    private int AccountID;

    public Account( String username, String password, int accountID) {
        this.Username = username;
        this.Password = password;
        this.AccountID = accountID;
    }
    public Account( String username, String password) {
        this.Username = username;
        this.Password = password;
    }


    public int getAccountID() {
        return AccountID;
    }

    public void setAccountID(int accountID) {
        AccountID = accountID;
    }

    public String getUsername() {
        return Username;
    }

    public void setUsername(String username) {
        this.Username = username;
    }

    public String getPassword() {
        return Password;
    }

    public void setPassword(String password) {
        this.Password = password;
    }



}
