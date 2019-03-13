package gui;

import custom.*;
import javax.swing.*;
import java.awt.*;


public class GUI_Login extends CustomJFrame
{
    private JPanel panel;
    private JLabel labelLogo;
    private JPanel panelLogo;

    private JPanel panelInputs;
    private JButton buttonLogin;
    private JLabel labelID;
    private JLabel labelPassword;
    private JPasswordField fieldID;
    private JPasswordField fieldPassword;
    private JPanel panelFields;


    public GUI_Login(String titre)
    {
        super(titre);

        ImageIcon imageIcon = new ImageIcon(pathLogoFull); // load the image to a imageIcon
        Image image = imageIcon.getImage(); // transform it
        Image newimg = image.getScaledInstance((int) (settings.windowMap.get("Login").dimX * 0.9), settings.windowMap.get("Login").dimY/3,  java.awt.Image.SCALE_SMOOTH); // scale it the smooth way
        imageIcon = new ImageIcon(newimg);  // transform it back
        labelLogo.setIcon(imageIcon);

        settings.color.componentsBackground.add(panel);
        settings.color.componentsBackground.add(panelLogo);
        settings.color.componentsBackground.add(panelInputs);
        settings.color.componentsBackground.add(panelFields);
        settings.color.componentsForeground.add(labelID);
        settings.color.componentsForeground.add(labelPassword);
        settings.color.updateColors();

        labelID.setFont( settings.FONT);
        labelPassword.setFont(settings.FONT);


        add(panel);
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
