package custom;

import javax.swing.*;
import javax.swing.border.LineBorder;
import java.awt.*;


/**
 * Custom_JButton_Color extends the class JButton.
 * It is a kind of square button meant to contain a color.
 * @author Hugues Begeot
 */
public class Custom_JButton_Color extends JButton
{
    public int Length = 15;
    public int Height = 15;

    public Custom_JButton_Color(Color C)
    {
        setText("");
        setOpaque(true);
        setBackground(C);
        setForeground(Color.RED);
        //setBorderPainted(true);
        //setBorderPainted(false);
        setBorder(new LineBorder(new Color(25,25,25), 1));
    }
}
