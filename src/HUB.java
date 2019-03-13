import gui.*;
import javax.swing.*;

public class HUB
{
    public static void main(String[] argv) throws ClassNotFoundException, UnsupportedLookAndFeelException, InstantiationException, IllegalAccessException
    {
        UIManager.setLookAndFeel(UIManager.getSystemLookAndFeelClassName());
        GUI_Login Login = new GUI_Login("Login");
    }
}