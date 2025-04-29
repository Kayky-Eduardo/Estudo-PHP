#pip install pywin32

import ctypes
import pywintypes
import win32api
import win32con
import win32gui

def set_resolution(width, height):
    # Pega o modo de exibição atual
    devmode = pywintypes.DEVMODEType()
    devmode.PelsWidth = width
    devmode.PelsHeight = height
    devmode.Fields = win32con.DM_PELSWIDTH | win32con.DM_PELSHEIGHT

    # Tenta mudar a resolução
    result = win32api.ChangeDisplaySettings(devmode, 0)

    if result == win32con.DISP_CHANGE_SUCCESSFUL:
        print(f"Resolução alterada para {width}x{height}.")
    else:
        print(f"Erro ao alterar resolução. Código: {result}")

set_resolution(1920, 1080)
