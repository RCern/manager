package com.manager;


import org.springframework.security.crypto.bcrypt.BCrypt;
import java.security.NoSuchAlgorithmException;

/**
 * Login class is used for authentication.
 * It extends the Account class
 * We used BCrypt from the Spring Framework
 *
 * @author Radu Cernaianu
 * @version 1.1
 * @version since 08/09/2019
 */
public class Login extends Account{
    /**
     * Constructor of the Login class, used in the Login window
     * @param username Username
     * @param password Password of the user
     */
    public Login(String username, String password) {
             super(username,password);
         }

    /**
     * This method verifies if the password written by the user mathces the hash saved in the database
     * @param account   Account object
     * @param hash      Hash value of the password in the database
     * @return  True if the password is correct, otherwise false
     * @throws NoSuchAlgorithmException
     */
        public boolean check_password(Login account, String hash) throws NoSuchAlgorithmException
        {

            boolean matched = BCrypt.checkpw(account.getPassword(), hash);

            return matched;
        }

    /**
     * This method verifies if the password written by the user mathces the hash saved in the database.
     * @param account   Account object
     * @param inputted_username Username in the database
     * @return  True if the username is correct, otherwise false
     */
        public boolean check_username(Login account,String inputted_username){
            return account.getUsername().equals(inputted_username);
        }

    /**
     * This method verifies if the values entered are matched with the database.
     * @param account   Account object.
     * @param input_usr Database Username
     * @param input_pass Database Password
     * @return True if the credentials are correct, otherwise false
     */
        public boolean allow_login(Login account, String input_usr, String input_pass){
             if(check_username(account,input_usr) && check_username(account,input_pass)){
                 return true;
             }
             else return false;
        }


}
