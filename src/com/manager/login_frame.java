package com.manager;

import javax.swing.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class login_frame {
    private JPanel panelMain;
    private JButton buttonmsg;
    private JPasswordField passwordField1;
    private JTextField textField1;

    public login_frame() {
        buttonmsg.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                JOptionPane.showMessageDialog(null,"hello world!");
                if (textField1)
            }
        });

    }
    public static void main(String[] args){
        JFrame frame = new JFrame("App");
        frame.setContentPane(new login_frame().panelMain);
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.pack();
        frame.setVisible(true);
    }
}
