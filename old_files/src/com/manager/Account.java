package com.manager;

/**
 * Account class is used to store the Accounts from the database
 * @author Radu Cernaianu
 * @version 1.1
 * @version since 09/09/2019
 */
public class Account {

    private String Username;
    private String Password;
    private int AccountID;

    /**
     * Constructor of the Account class
     * @param username  Username
     * @param password  Password
     * @param accountID Account ID
     */
    public Account( String username, String password, int accountID) {
        this.Username = username;
        this.Password = password;
        this.AccountID = accountID;
    }
    /**
     * Constructor of the Account class
     * @param username  Username
     * @param password  Password
     */
    public Account( String username, String password) {
        this.Username = username;
        this.Password = password;
    }

    /**
     * ID getter
     * @return AccountID
     */
    public int getAccountID() {
        return AccountID;
    }

    /**
     * ID setter
     * @param accountID
     */
    public void setAccountID(int accountID) {
        AccountID = accountID;
    }

    /**
     * Username getter
     * Username getter
     * @return  Username
     */
    public String getUsername() {
        return Username;
    }

    /**
     * Username setter
     * @param username  Username
     */
    public void setUsername(String username) {
        this.Username = username;
    }

    /**
     * Password getter
     * @return Password
     */
    public String getPassword() {
        return Password;
    }

    /**
     * Password setter
     * @param password Password
     */
    public void setPassword(String password) {
        this.Password = password;
    }



}
