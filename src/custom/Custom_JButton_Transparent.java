package custom;


import settings.Settings_Color;
import javax.swing.*;
import java.awt.*;


public class Custom_JButton_Transparent extends JButton
{
    Settings_Color script_C = new Settings_Color();

    public Custom_JButton_Transparent(String Text)
    {
        setText(Text);
        setOpaque(false);
        setContentAreaFilled(false);
        setBorderPainted(false);
    }
}
