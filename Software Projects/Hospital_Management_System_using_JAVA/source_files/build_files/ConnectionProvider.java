package PProject;

import java.sql.*;
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

/**
 *
 * @author nafisha
 */
public class ConnectionProvider {
    public static Connection getCon()
    {
    try
    {
        Class.forName("com.mysql.cj.jdbc.Driver");
    Connection con=DriverManager.getConnection("jdbc:mysql://localhost:3306/nawar","root","wasit0ver!");
    return con;
    }
    catch(Exception e)
            {
            return null;
            }
    }
    
}
