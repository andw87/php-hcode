<?php
//Quem nasceu primeiro???

$galinhaExiste = true;

/* Nos nao podemos chamar ovo() daqui
   porque ela ainda não existe,
   mas nos podemos chamar galinha() */

galinha();

if ($galinhaExiste) {
  function ovo()
  {
    echo "<br>Ovo - Eu não existo até que o programa passe por aqui.\n";
  }
}

/* Agora nos podemos chamar ovo()
   porque $galinhaExiste foi avaliado como true */

if ($galinhaExiste) ovo();

function galinha()
{
  echo "Galinha - Eu existo imediatamente desde o programa começar.\n";
}

?>
