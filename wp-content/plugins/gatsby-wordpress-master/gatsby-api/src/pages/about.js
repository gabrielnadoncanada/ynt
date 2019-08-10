import React from "react"
import Layout from "../components/layout"

export default () => (
    <Layout>
        <h2>About</h2>
        <div>
            <h3>Présentation du l'outil</h3>
            <p>Task Manager est une extension wordpress basé sur l'API REST de celui-ci. Les demandes venant de l'utilisateur sont donc envoyée au serveur via un système de routage. De plus, l'affichage côté client est géré à l'aide du framework GatsbyJS, lui-même basé sur React, ce qui évite un rechargement complet de la page lors d'une opération donnée.</p>
        </div>
        <div>
            <h3>Nos développeurs</h3>
            <ul>
                <li>
                    Philippe Roux
                </li>
                <li>
                    Gabriel Nadon
                </li>
                <li>
                    Emiliana Braga
                </li>
            </ul>
            <p>Task Manager a été conçu par trois développeurs juniors partageant tous un même point en commun : la passion du web. Dans ce projet, nos trois développeurs chevronnés ont uni leurs forces afin de livrer un produit de qualité sans précédent !   </p>
        </div>
    </Layout>
)
