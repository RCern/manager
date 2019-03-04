package settings;

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


    /**
     * Constructs a new <code>Settings</code> iteration.
     */
    public Settings()
    {
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
