package com.manager;


import org.springframework.security.crypto.bcrypt.BCrypt;

import java.util.Scanner;
import java.sql.*;
public class Main {

    public static void main(String[] args) {

        int tempID = connector();
        //createAcc();
        displayProfil(tempID);

    }
    public static void displayProfil(int accountID)
    {
        try {
            Class.forName("com.mysql.cj.jdbc.Driver");
            Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/society?useTimezone=true&serverTimezone=UTC", "root", "");
            Statement stmt = con.createStatement();
            ResultSet rs = stmt.executeQuery("select * from employee");
            while (rs.next()) {

                if (accountID==rs.getInt(6)) {
                    System.out.println("Name= "+rs.getString(2));
                    System.out.println("Type= "+rs.getString(3));
                    System.out.println("Salary= "+rs.getDouble(4));
                    System.out.println("Time Participation= "+rs.getInt(5));
                }
            }con.close();
        }catch(Exception e){ System.out.println(e);}
    }

    public static void createAcc()
    {
        Scanner Scan = new Scanner(System.in);
        System.out.println("Entrez le nom d'utilisateur :");
        String name = Scan.next();
        System.out.println("Entrez le mot de passe :");
        String pass= BCrypt.hashpw(Scan.next(),BCrypt.gensalt());
        Account acc = new Account(name,pass);
        try{
            Class.forName("com.mysql.cj.jdbc.Driver");
            Connection con= DriverManager.getConnection("jdbc:mysql://localhost:3306/society?useTimezone=true&serverTimezone=UTC","root","");
            String RequestAdd= "INSERT INTO account (accountID,username,password) VALUES (? , ? , ?)";
            PreparedStatement stmt=con.prepareStatement(RequestAdd);
            stmt.setObject(1, null);
            stmt.setString(2,acc.getUsername());
            stmt.setString(3,acc.getPassword());
            stmt.executeUpdate();
            con.close();
        }catch(Exception e){ System.out.println(e);}

    }

    public static void deleteAcc()
    {

    }



    public static int connector(){
        Scanner Scan = new Scanner(System.in);
        System.out.println("Entrez le nom d'utilisateur :");
        String name = Scan.next();
        System.out.println("Entrez le mot de passe :");
        String pass= Scan.next();
        Login log = new Login(name,pass);
        try{
            Class.forName("com.mysql.cj.jdbc.Driver");
            Connection con= DriverManager.getConnection("jdbc:mysql://localhost:3306/society?useTimezone=true&serverTimezone=UTC","root","");
            Statement stmt=con.createStatement();
            int x=0;
            ResultSet rs=stmt.executeQuery("select * from account");
            while(rs.next()&& (x==0)) {

                if(log.allow_login(log,rs.getString(2),rs.getString(3)))
                {
                    System.out.println("Connected");
                    x=1;
                    return rs.getInt(1);
                }
            }
            System.out.println("Invalid username/password");
            con.close();

        }catch(Exception e){ System.out.println(e);}
        return -1;
    }

}