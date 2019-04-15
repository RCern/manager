package custom;

import settings.Settings_Color;

import javax.swing.*;
import java.awt.*;

public class CustomJButton extends JButton
{
    Settings_Color script_C = new Settings_Color();

    public CustomJButton(String Content, boolean Border)
    {
        super(Content);
        setBorderPainted(Border);
    }
}
