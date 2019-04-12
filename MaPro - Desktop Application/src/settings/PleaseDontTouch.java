package settings;

import java.awt.*;
import java.io.IOException;
import java.nio.file.Files;
import java.nio.file.Paths;
import java.util.LinkedHashMap;
import java.util.List;
import java.util.Map;


/**
 * Class containing unfinished business and / or methods that I may need further down the line.
 * @author Hugues Begeot
 */
public class PleaseDontTouch
{
    private final String Path_Color_UI = "./src/Colors_UI.txt";

    public Map<String, Color> colorBackgroundMap = new LinkedHashMap<>();
    public Map<String, Color> colorForegroundMap = new LinkedHashMap<>();
    public String Index;

    private static final Color BACKGROUND_LIGHT = new Color(200,200,200);
    private static final Color BACKGROUND_DARK = new Color(50,50,50);
    private static final Color FOREGROUND_LIGHT = new Color(50,50,50);
    private static final Color FOREGROUND_DARK = new Color(200,200,200);
    protected boolean isLight = true;

    private static final String DEFAULT_INDEX = "Default";
    private static final int DEFAULT_BACKGROUND_R = 80;
    private static final int DEFAULT_BACKGROUND_G = 100;
    private static final int DEFAULT_BACKGROUND_B = 205;
    private static final int DEFAULT_FOREGROUND_R = 50;
    private static final int DEFAULT_FOREGROUND_G = 50;
    private static final int DEFAULT_FOREGROUND_B = 50;
    /**
     * Constructs a new <code>JPasswordField</code>,
     * with a default document, <code>null</code> starting
     * text string, and 0 column width.
     */
    /*public Settings_Color()
    {
        Index = DEFAULT_INDEX;
        colorBackgroundMap.put(Index, new Color(DEFAULT_BACKGROUND_R, DEFAULT_BACKGROUND_G, DEFAULT_BACKGROUND_B) );
        colorForegroundMap.put(Index, new Color(DEFAULT_FOREGROUND_R, DEFAULT_FOREGROUND_G, DEFAULT_FOREGROUND_B) );

        Read_Color_Maps();
    }*/


    public Color Get_Background() {return colorBackgroundMap.get(Index);}
    public Color Get_Foreground() {return colorForegroundMap.get(Index);}

    public Color Get_Inverse_Background() {return colorForegroundMap.get(Index);}
    public Color Get_Inverse_Foreground() {return colorBackgroundMap.get(Index);}


    private void Read_Color_Maps()
    {
        try
        {
            String[] S = Files.readAllLines(Paths.get(Path_Color_UI)).toArray(new String[0]);
            String[] split = S[0].split(";");
            Index = split[1];

            int R, G, B;
            for(int i = 1; i<S.length ; i++)
            {
                split = S[i].split(";");

                R = Integer.parseInt(split[1]);
                G = Integer.parseInt(split[2]);
                B = Integer.parseInt(split[3]);
                colorBackgroundMap.put(split[0], new Color(R, G, B) );

                R = Integer.parseInt(split[4]);
                G = Integer.parseInt(split[5]);
                B = Integer.parseInt(split[6]);
                colorForegroundMap.put(split[0], new Color(R, G, B) );
            }
        }
        catch (IOException e)
        {
            e.printStackTrace();
            System.out.println("Could not operate with the Color.txt file (Settings_Color Java Class)");
        }
    }
    /*
    public void Update_Color_Maps()
    {
        try
        {
            PrintWriter W = new PrintWriter(Path_Color_UI, StandardCharsets.UTF_8);

            W.println("Color Background Index;" + Index + ";");
            for(Map.Entry<String, Color> KEY : colorBackgroundMap.entrySet())
            {
                if(!KEY.getKey().equals("Default"))
                {
                    W.println(KEY.getKey() + ";"
                            + colorBackgroundMap.get(KEY.getKey()).getRed() + ";"
                            + colorBackgroundMap.get(KEY.getKey()).getGreen() + ";"
                            + colorBackgroundMap.get(KEY.getKey()).getBlue() + ";"
                            + colorForegroundMap.get(KEY.getKey()).getRed() + ";"
                            + colorForegroundMap.get(KEY.getKey()).getGreen() + ";"
                            + colorForegroundMap.get(KEY.getKey()).getBlue() + ";");
                }
            }
            W.close();
        }
        catch (IOException e)
        {
            e.printStackTrace();
            System.out.println("Could not rewrite the Color.txt file (Settings_Color Java Class)");
        }
    }*/


    /**
     * Creates a textual representation of the class's instance
     * @return Textual representation of the instance
     */
    public java.util.List<String> toString(Map<String, Color> map)
    {
        List<String> S = null;

        for(Map.Entry<String, Color> KEY : map.entrySet())
        {
            S.add(String.format("Index %d : R - %d, G - %d, B - %d\n",
                    KEY.getKey(),
                    KEY.getValue().getRed(),
                    KEY.getValue().getGreen(),
                    KEY.getValue().getBlue()
            ));
        }
        System.out.println("\n");

        return S;
    }
}
