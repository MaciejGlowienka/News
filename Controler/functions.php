<?php

function zapisz_plik()
{
  $lokalizacja = './temp/plik_obrazkowy.jpg';

  if(is_uploaded_file($_FILES['obrazek']['tmp_name']))
  {
    if(!move_uploaded_file($_FILES['obrazek']['tmp_name'], $lokalizacja))
    {
      echo 'problem: Nie udało się skopiować pliku do katalogu.';
        return false;  
    }
  }
  else
  {
    echo 'problem: Możliwy atak podczas przesyłania pliku.';
	echo 'Plik nie został zapisany.';
    return false;
  }
  return true;
}