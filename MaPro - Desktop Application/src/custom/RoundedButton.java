package custom;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.MouseEvent;

public class RoundedButton extends JButton
{
    ActionListener actionListener;       // Post action events to listeners
    String label;
    boolean pressed = false;

    int Font_Style;
    int Font_Size;

    public RoundedButton(String Label, int F_Style, int F_Size)
    {
        super(Label);
        label = Label;
        enableEvents(AWTEvent.MOUSE_EVENT_MASK);
        Font_Style = F_Style;
        Font_Size = F_Size;
        //Set_Color();
    }


    @Override
    public void paint(Graphics g)
    {
        // paint the interior of the button
        if (pressed) g.setColor(getBackground().darker().darker());
        else g.setColor(getBackground());
        g.fillRoundRect(0, 0, getWidth() - 1, getHeight() - 1, 20, 20);

        // draw the perimeter of the button
        g.setColor(getBackground().darker().darker().darker());
        g.drawRoundRect(0, 0, getWidth() - 1, getHeight() - 1, 20, 20);


        /*Font f = new Font("Georgia", 1, 14);
        setFont(f);*/

        // draw the label centered in the button
        /*Font f = getFont();
        if (f != null)
        {
            FontMetrics fm = getFontMetrics(getFont());
            g.setColor(getForeground());
            g.drawString(label, getWidth() / 2 - fm.stringWidth(label) / 2, getHeight() / 2 + fm.getMaxDescent());
        }*/
        setFont(new Font("Georgia", Font_Style, Font_Size));
        setText(label);
    }


    public void addActionListener(ActionListener listener)
    {
        actionListener = AWTEventMulticaster.add(actionListener, listener);
        enableEvents(AWTEvent.MOUSE_EVENT_MASK);
    }


    public void removeActionListener(ActionListener listener)
    {
        actionListener = AWTEventMulticaster.remove(actionListener, listener);
    }


    @Override
    public boolean contains(int x, int y)
    {
        int mx = getSize().width / 2;
        int my = getSize().height / 2;
        return (((mx - x) * (mx - x) + (my - y) * (my - y)) <= mx * mx);
    }


    @Override
    public void processMouseEvent(MouseEvent e)
    {
        Graphics g;

        switch (e.getID())
        {
            case MouseEvent.MOUSE_PRESSED:
                // render myself inverted....
                pressed = true;

                // Repaint might flicker a bit. To avoid this, you can use
                // double buffering (see the Gauge example).
                repaint();
                break;

            case MouseEvent.MOUSE_RELEASED:
                if (actionListener != null)
                {
                    /*actionListener.actionPerformed(new ActionEvent(
                            this, ActionEvent.ACTION_PERFORMED, label));*/
                }
                // render myself normal again
                if (pressed)
                {
                    pressed = false;

                    // Repaint might flicker a bit. To avoid this, you can use
                    // double buffering (see the Gauge example).
                    repaint();
                }
                break;

            case MouseEvent.MOUSE_ENTERED:
                break;

            case MouseEvent.MOUSE_EXITED:
                if (pressed)
                {
                    // Cancel! Don't send action event.
                    pressed = false;

                    // Repaint might flicker a bit. To avoid this, you can use
                    // double buffering (see the Gauge example).
                    repaint();

                    // Note: for a more complete button implementation,
                    // you wouldn't want to cancel at this point, but
                    // rather detect when the mouse re-entered, and
                    // re-highlight the button. There are a few state
                    // issues that that you need to handle, which we leave
                    // this an an excercise for the reader (I always
                    // wanted to say that!)
                }
                break;
        }
        super.processMouseEvent(e);
    }


    public void Set_Color_Background(Color C) { setBackground(C); }
    public void Set_Color_Foreground(Color C) { setForeground(C); }
}


/*public class RoundedButton extends Component implements Set_Color
{
    ActionListener actionListener;       // Post action events to listeners
    String label;                       // The Button's text
    boolean pressed = false;           // true if the button is detented.

    public RoundedButton(String label)
    {
        this.label = label;
        enableEvents(AWTEvent.MOUSE_EVENT_MASK);
        Set_Color();
    }


    @Override
    public void paint(Graphics g)
    {
        // paint the interior of the button
        if (pressed)
            g.setColor(getBackground().darker().darker());
        else
            g.setColor(getBackground());
        g.fillRoundRect(0, 0, getWidth() - 1, getHeight() - 1, 20, 20);

        // draw the perimeter of the button
        g.setColor(getBackground().darker().darker().darker());
        g.drawRoundRect(0, 0, getWidth() - 1, getHeight() - 1, 20, 20);

        // draw the label centered in the button
        Font f = getFont();
        if (f != null)
        {
            FontMetrics fm = getFontMetrics(getFont());
            g.setColor(getForeground());
            g.drawString(label, getWidth() / 2 - fm.stringWidth(label) / 2, getHeight() / 2 + fm.getMaxDescent());
        }
    }


    @Override
    public Dimension getPreferredSize()
    {
        Font f = getFont();
        if (f != null) {
            FontMetrics fm = getFontMetrics(getFont());
            int max = Math.max(fm.stringWidth(label) + 40, fm.getHeight() + 40);
            return new Dimension(max, max);
        } else {
            return new Dimension(100, 100);
        }
    }


    @Override
    public Dimension getMinimumSize() {
        return new Dimension(100, 100);
    }


    public void addActionListener(ActionListener listener) {
        actionListener = AWTEventMulticaster.add(actionListener, listener);
        enableEvents(AWTEvent.MOUSE_EVENT_MASK);
    }


    public void removeActionListener(ActionListener listener)
    {
        actionListener = AWTEventMulticaster.remove(actionListener, listener);
    }


    @Override
    public boolean contains(int x, int y)
    {
        int mx = getSize().width / 2;
        int my = getSize().height / 2;
        return (((mx - x) * (mx - x) + (my - y) * (my - y)) <= mx * mx);
    }


    @Override
    public void processMouseEvent(MouseEvent e)
    {
        Graphics g;

        switch (e.getID())
        {
            case MouseEvent.MOUSE_PRESSED:
                // render myself inverted....
                pressed = true;

                // Repaint might flicker a bit. To avoid this, you can use
                // double buffering (see the Gauge example).
                repaint();
                break;

            case MouseEvent.MOUSE_RELEASED:
                if (actionListener != null)
                {
                    actionListener.actionPerformed(new ActionEvent(
                            this, ActionEvent.ACTION_PERFORMED, label));
                }
                // render myself normal again
                if (pressed)
                {
                    pressed = false;

                    // Repaint might flicker a bit. To avoid this, you can use
                    // double buffering (see the Gauge example).
                    repaint();
                }
                break;

            case MouseEvent.MOUSE_ENTERED:
                break;

            case MouseEvent.MOUSE_EXITED:
                if (pressed)
                {
                    // Cancel! Don't send action event.
                    pressed = false;

                    // Repaint might flicker a bit. To avoid this, you can use
                    // double buffering (see the Gauge example).
                    repaint();

                    // Note: for a more complete button implementation,
                    // you wouldn't want to cancel at this point, but
                    // rather detect when the mouse re-entered, and
                    // re-highlight the button. There are a few state
                    // issues that that you need to handle, which we leave
                    // this an an excercise for the reader (I always
                    // wanted to say that!)
                }
                break;
        }
        super.processMouseEvent(e);
    }


    public void Set_Color_Background(Color C) { setBackground(C); }
    public void Set_Color_Foreground(Color C) { setForeground(C); }
}
*/