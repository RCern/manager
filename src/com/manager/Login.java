package com.manager;


import org.springframework.security.crypto.bcrypt.BCrypt;
import java.security.NoSuchAlgorithmException;


public class Login extends Account{

         public Login(String username, String password) {
             super( username, password);
         }

        public boolean check_password(Login account, String hash) throws NoSuchAlgorithmException
        {

            boolean matched = BCrypt.checkpw(account.getPassword(), hash);

            return matched;
        }
        public boolean check_username(Login account,String inputted_username){
            return account.getUsername().equals(inputted_username);
        }
        public boolean allow_login(Login account, String input_usr, String input_pass){
             if(check_username(account,input_usr) && check_username(account,input_pass)){
                 return true;
             }
             else return false;
        }


}
