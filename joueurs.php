<?php
is_connect();
 
 $List_users=getData("liste_joueurs");

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Interface joueur</title>
</head>
<script type="text/javascript">
window.onload=function()
    {
        
        var top_score = document.getElementById('top_score');
		var affiche_topScores = document.getElementById('affiche_topScores');
		var mon_score = document.getElementById('mon_score');
		var affiche_MonScore = document.getElementById('affiche_MonScore');
        
        document.onclick=function(div)
        {
            if(div.target.id=='top_score')
            {
                
                affiche_MonScore.style.display="none";   
                affiche_topScores.style.display="block";
            }

            if(div.target.id=='mon_score')
            {
                affiche_topScores.style.display="none";
                affiche_MonScore.style.display="block";  
               
            }
        }
    }
             </script>