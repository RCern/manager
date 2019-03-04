package custom;

import javax.swing.*;
import java.awt.*;

public class CustomJLabel  extends JLabel implements Set_Color
{
    public CustomJLabel(String Message, int horizontalAlignment)
    {
        super(Message, horizontalAlignment);
        Set_Color();
    }


    @Override public void setColorBackground(Color C) { int X = 0; }
    @Override public void setColorForeground(Color C) { setForeground(C); }
}