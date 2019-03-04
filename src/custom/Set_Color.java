package custom;

import settings.Settings_Color;

import java.awt.*;

public interface Set_Color
{
    Settings_Color script_C = new Settings_Color();

    default void Set_Color()
    {
        setColorBackground(script_C.Get_Background());
        setColorForeground(script_C.Get_Foreground());
    }

    abstract void setColorBackground(Color C);
    abstract void setColorForeground(Color C);
}
