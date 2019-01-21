package com.manager;

import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;
import java.util.LinkedList;
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

    public List<Account> accounts(String path)
    {
        String csvFile = "/Users/radu_/IdeaProjects/manager/accounts.csv";
        String line = "";
        String cvsSplitBy = ",";
        List<Account> accounts_list = new LinkedList<>();
        try (BufferedReader br = new BufferedReader(new FileReader(csvFile))) {

            while ((line = br.readLine()) != null) {


                String[] Line = line.split(cvsSplitBy);
                Account a = new Account(Boolean.valueOf(Line[2]),Line[0],Line[1]);
                accounts_list.add(a);

            }

        } catch (IOException e) {
            e.printStackTrace();
        }
        return accounts_list;
    }


}
