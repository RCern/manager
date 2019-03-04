package custom;

import settings.Settings_Color;

import javax.swing.*;
import java.awt.*;

public class CustomJButton extends JButton implements Set_Color
{
    Settings_Color script_C = new Settings_Color();

    public CustomJButton(String Content, boolean Border)
    {
        super(Content);
        setBorderPainted(Border);
        Set_Color();
    }

    public void setColorBackground(Color C) { setBackground(C); }
    public void setColorForeground(Color C) { setForeground(C); }
}
