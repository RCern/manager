package custom;


import settings.Settings_Color;
import javax.swing.*;


/**
 * Custom_JButton_Transparent extends the class JButton.
 * It is a kind of button of which the borders and background are transparent.
 * @author Hugues Begeot
 */
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
