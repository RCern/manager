package settings;

import java.awt.*;
import java.util.HashMap;
import java.util.Map;


/**
 * Settings class is used to store all generic values of a window.
 * @author Hugues Begeot
 */
public class Settings
{
    public Settings_Color color = new Settings_Color();
    public Map<String, Settings_Window> windowMap = new HashMap<>();

    private final static String FONT_NAME = "Georgia";
    private final static int FONT_STYLE = Font.PLAIN;
    private final static int FONT_SIZE = 14;
    public Font FONT;


    /**
     * Constructs a new <code>Settings</code> iteration.
     */
    public Settings()
    {
        FONT = new Font(FONT_NAME, FONT_STYLE, FONT_SIZE);
        // Windows Parameters
        Window_Fill();
    }

    /**
     * Fills the Map with final values for the label, length and width
     */
    private void Window_Fill()
    {
        windowMap.put("Default", new Settings_Window("Default"));
        windowMap.put("Login", new Settings_Window("Login"));
        windowMap.put("Main", new Settings_Window("Main"));
    }
}