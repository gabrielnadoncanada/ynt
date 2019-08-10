import React from "react"
import Layout from "../components/layout"

export default () => (
    <Layout>
        <h2>Docs</h2>
        <h3>Guide d'utilisation</h3>
        <div>
            <p>Pour l'ajout d'une nouvelle tâche, 
vous devez d'abord cliquer sur la section 
«Tasks» situé dans le menu principal 
en haut de page. Par la suite, 
vous allez tomber sur un formulaire
 comportant trois champs de saisie 
ainsi qu'un champ de sélection. 
C'est là que vous créez une nouvelle tâche. 
Attention, tous les champs de saisie ont besoin d'être préalablement rempli, sinon vous aurez un message d'erreur. 
La nouvelle tâche crée comporte quatre paramètres
 : Un titre, une description, un 
destinataire ainsi que 
l'état de la tâche en cours. 
Normalement, une fois que vous 
aurez cliqué sur « submit », 
vous devriez voir apparaître la tâche juste
 en dessous du formulaire d'ajout de tâche,
 avec toutes ses informations. 
Par la suite, vous avez le choix de modifier 
ou de supprimer la tâche, la mise à jour de la page courante se fera d'elle même une fois l'action envoyée. Tous les paramètres entrés lors de la création de la tâche sont modifiables en tout temps.     </p>
        </div>
    </Layout>
)
