package gui;


import custom.*;
import javax.swing.*;
import java.awt.*;


public class GUI_Login extends CustomJFrame
{
    private JPanel monPanel;
    private JButton button1;
    private JPasswordField fieldID;
    private JPasswordField fieldPassword;
    private JLabel labelPassword;
    private JLabel labelID;

    public GUI_Login(String titre)
    {
        super(titre);

        add(monPanel);
        pack();
        revalidate();
        setVisible(true);
    }


    private void createUIComponents()
    {
        fieldID = new CustomJTextField("ALPHA_NUMERIC", false, 20, 15,0,5);
        fieldPassword = new CustomJTextField("ALL", true, 20, 15,0,5);
    }
}
