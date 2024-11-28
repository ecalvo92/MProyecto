function SoloNumeros(e)
{
    var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;

    if(keyCode >= 48 && keyCode <= 57)
    {
        return true;
    }

    return false;
}