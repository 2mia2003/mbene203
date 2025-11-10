<?php
/*$eleves  = [
'cm2' =>['jean','Marc','jane','Marion'],
'cm1' =>['Abibatou','Marcelin']
];
foreach($eleves as $classes=> $listEleves){
    echo "la classe :$classes \n";
    foreach($listEleves as $eleve){
        echo "-$eleve\n";
    }
};
*/
/*$note = [];
$action = null;
while($action !== 'fin')
{
   $action = readline("entrer une valeur ou (\'fin\' pour terminer la saisie)");
    if($action !== 'fin'){
        $note[] = (int)$action;
    }
} 


foreach($note as $notes){
    echo"notes :$notes\n";
}
    */
    /*$heureDebut = null;
    echo"Veuillez rentrer un creneaux\n";
    while(true){
    $heureDebut = readline("veuillez saisir l'heure de debut :");
    $heurefin = readline("veuillez saisir l'heure de fin :");
     if($heurefin < $heureDebut || $heureDebut === 'fin' )
     {
            echo"Veuillez saisir la bonne heure\n";
     }
        
     
     elseif($heureDebut >= 9 && $heurefin <= 17)
     {
        echo"le magasin est ouvert\n";
       
     }
     else{
        echo"le magasin n'est pas ouvert";
       
     }
     
     
    
    }
        */
       /* $creneau = [];
        while(true){
            $debut = (int)readline("saisir l'heure de debut :");
            $fin =(int)readline( "saisir l'heure de fin :");
            if($debut >= $fin){
               echo"veuillez rentrer les bonnes creneaux \n";
            }
            else{
                $creneau[] = [$debut,$fin];
                $action = readline(' voulez vous saisir un nouveau creneaux(o\n):');
                if($action === 'n'){
                    break;
                }
            }
        }
        /*
        $heure = (int)readline("quelle heure voulez vous visiter le magasin : ");
        $creneauTrouve = false;
        foreach($creneau as $creneaux){
            if($heure >= $creneaux[0] && $heure <= $creneaux[1]){
                $creneauTrouve = true;
                break;
            }
        }
        if($creneauTrouve){
            echo "le magasin est ouvert ";
        }
        else{
            echo"le magasin n'est pas ouvert ";
        }
            */
           /* echo "le magasin est ouvert de ";
            foreach($creneau as $k => $creneaux){
                if ($k>0){
                    echo " et de ";
                }
             
                echo " {$creneaux[0]}h a {$creneaux[1]}h";
            }
                */
                $Etudiant = [
                    'mat'=> 240169,
                    'nom' => 'Diop',
                    'prenom' => 'Bamba',
                    'Nais' => '21-03-2004',
                    'Age' => 19
                ];
                foreach($Etudiant as $info => $etud){
                    echo" $info:$etud <br>";
                   
                    }
                    echo $Etudiant["Nais"];
                    
                $tab = [
                    'Etudiant'=> [
                     'mat'=> 240169,
                    'nom' => 'Diop',
                    'prenom' => 'Bamba',
                    'Nais' => '21-03-2004',
                    'Age' => 19
                    ],
                    'Filiere' => [
                        'NumF'=> 22211,
                        'NomF' => 'Informatique'
                    ],
                    'Departement' => [
                       'NumDep'=> 22,
                        'NomDep' => 'Informatique'
                        ]
                ];

               foreach($tab as $element => $tableau){
                echo " $element:  <br>";
                foreach($tableau as $montab){
                    echo " $montab  <br>";
                }
               }
               $NbL = count($tab);
               echo"le nomdre d'element est : $NbL";
                
                
    ?>



