<?php
/*
namespace MonNamespace; // Déclaration du namespace.


    // Toutes les constantes, fonctions et classes déclarées ici feront partie du namespace MonNamespace.

$template = 'index';
include 'layout.phtml';

    function strlen()
        {
            echo 'Hello world !';
        }

    strlen();
*/
/*
    namespace A
        {
            function quelNamespace()
            {
                echo 'A';
            }

            quelNamespace(); // Affiche « A ».
        }

        namespace B
        {
            function quelNamespace()
            {
                echo 'B';
            }

            quelNamespace();  // Affiche « B ».
        }
  */
/*  namespace A
    {
        echo __NAMESPACE__;
    }

    namespace B
    {
    	echo __NAMESPACE__;
    }
*/
  /*  namespace A\B // antislash is for under-namespace (A is the main and B is inside A)
    {
        echo __NAMESPACE__;
    }

    namespace A
    {
        echo __NAMESPACE__;
    }*/

  /*  namespace A\B
   {
       function getNamespace()
       {
           echo __NAMESPACE__;
       }
   }

   namespace A
   {
       B\getNamespace(); // Appel de façon relative.
       \A\B\getNamespace(); // Appel de façon absolue.
   }*/

   /*namespace A;

    echo strlen('Hello world !'); // Appel relatif, élément non qualifié.
    echo namespace\strlen('Hello world !'); // Appel relatif, élément qualifié. Résultat : erreur fatale car fonction inexistante.*/

    /*require 'F.ns.php';

    use A\B\C\D\E\F as nsF;

    nsF\getNamespace(); // Se transforme en A\B\C\D\E\F\getNamespace().*/

  /*  require 'F.ns.php';

    use A\B\C\D\E\F\MaClasse;

    $a = new MaClasse; // Se transforme en $a = new A\B\C\D\E\F\MaClasse.
    $a->hello();*/

    require 'F.ns.php';

    use A\B\C\D\E\F\MaClasse as Hello;

    $a = new Hello; // Se transforme en $a = new A\B\C\D\E\F\MaClasse.
    $a->hello();
?>
