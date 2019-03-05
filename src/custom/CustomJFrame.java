package custom;

import javax.imageio.ImageIO;
import javax.swing.*;
import settings.*;

import java.awt.*;
import java.io.File;
import java.io.IOException;
import java.net.URI;
import java.net.URISyntaxException;

public abstract class CustomJFrame extends JFrame
{
    private Settings settings = new Settings();

    /**
     * default @CustomJFrame's constructor.
     * @deprecated We'll prefer using the other constructor
     * */
    public CustomJFrame()
    {
        setPreferredSize(new Dimension(500, 500));
    }


    /**
     * Regular @CustomJFrame's constructor.
     * <p>
     * @param type Type of the JFrame we want to create.
     * */
    public CustomJFrame(String type)
    {
        try { setIconImage( ImageIO.read( new File("./src/pictures/logo.png")) ); }
        catch (IOException e) { System.out.println("Icon not found"); }

        if(!settings.windowMap.containsKey(type)) type = "Default";

        setTitle(settings.windowMap.get(type).name);
        setPreferredSize(new Dimension(settings.windowMap.get(type).dimX, settings.windowMap.get(type).dimY));
        setBackground(settings.color.Get_Background());

        System.out.println(settings.color.Get_Background());


        setResizable(false);
        setAlwaysOnTop(false);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);


        pack();
        setLocationRelativeTo(null);
        setVisible(true);
    }


    /** Minimize the current Frame (hide it within Window's ToolBar)*/
    void GUI_Minimize()
    {
        setState(Frame.ICONIFIED);
    }
    /** Close the Program (not just the current Frame)*/
    void GUI_Exit()
    {
        System.exit(1);
    }



    final String URL_Account_Forgot = "http://www.9gag.com";
    final String URL_Account_New = "http://www.Youtube.com";
    /**
     * Launches a Web research.
     * It can either be the page to create an account,
     * or to get a forgotten ID / password
     * <p>
     * @param url the Website we want to see
     * */
    void Call_Website(String url)
    {
        if(Desktop.isDesktopSupported())
        {
            Desktop desktop = Desktop.getDesktop();
            try
            {
                desktop.browse(new URI(url));
            }
            catch (IOException | URISyntaxException e)
            {
                // TODO Auto-generated catch block
                e.printStackTrace();
            }
        }
        else
        {
            Runtime runtime = Runtime.getRuntime();
            try
            {
                runtime.exec("xdg-open " + url);
            }
            catch (IOException e)
            {
                // TODO Auto-generated catch block
                e.printStackTrace();
            }
        }
    }
}