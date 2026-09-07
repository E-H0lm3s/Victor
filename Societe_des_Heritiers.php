<?php
// ============================================================
// SITE OFFICIEL DE VICTOR LUSTIG
// https://mastodon.social/@V_Lust1
// Projet : "Opportunité Exceptionnelle 1925"
// Statut : EN COURS DE CONSTRUCTION
// ============================================================

// TODO: Connecter la base de données des investisseurs
// TODO: Finir le système de paiement sécurisé
// TODO: Ajouter la vérification d'identité
// $db = new PDO(...); // pas encore configuré

$page_title = "Victor Lustig | Opportunités Exclusives";
$version = "0.4.2-dev";
$construction = true;

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?> — Version <?= $version ?></title>
    <style>
        body {
            font-family: Georgia, serif;
            background: #f4f1ea;
            color: #2c2c2c;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }
        .banner-construction {
            background: #c0392b;
            color: white;
            text-align: center;
            padding: 12px;
            font-weight: bold;
            font-size: 1.1rem;
            letter-spacing: 1px;
        }
        header {
            background: #1a1a1a;
            color: #f1c40f;
            padding: 25px 40px;
            text-align: center;
            border-bottom: 4px solid #f1c40f;
        }
        header h1 {
            margin: 0;
            font-size: 2.4rem;
            letter-spacing: 3px;
        }
        header p {
            margin: 8px 0 0;
            font-style: italic;
            color: #ddd;
        }
        .container {
            max-width: 900px;
            margin: 40px auto;
            padding: 0 20px;
        }
        .card {
            background: white;
            border: 1px solid #ddd;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }
        h2 {
            color: #1a1a1a;
            border-bottom: 2px solid #f1c40f;
            padding-bottom: 8px;
        }
        .warning {
            background: #fff3cd;
            border-left: 5px solid #f1c40f;
            padding: 15px 20px;
            margin: 25px 0;
            font-size: 0.95rem;
        }
        .incomplete {
            background: #f8d7da;
            border: 1px dashed #c0392b;
            padding: 20px;
            color: #721c24;
            font-style: italic;
            text-align: center;
        }
        .btn {
            display: inline-block;
            background: #1a1a1a;
            color: #f1c40f;
            padding: 12px 28px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 15px;
            border: 2px solid #f1c40f;
        }
        .btn:hover {
            background: #f1c40f;
            color: #1a1a1a;
        }
        footer {
            text-align: center;
            padding: 30px;
            font-size: 0.9rem;
            color: #777;
            border-top: 1px solid #ddd;
            margin-top: 50px;
        }
        .todo {
            background: #2c3e50;
            color: #ecf0f1;
            padding: 8px 12px;
            font-family: monospace;
            font-size: 0.85rem;
            margin: 10px 0;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<div class="banner-construction">
    ⚠️ SITE EN CONSTRUCTION — VERSION <?= $version ?> — CE SITE EST FICTIF (CTF)
</div>

<header>
    <h1>VICTOR LUSTIG</h1>
    <p>« L’homme qui a vendu la Tour Eiffel… et qui peut encore vous offrir l’impossible »</p>
</header>

<div class="container">

    <div class="card">
        <h2>Une opportunité unique vous attend</h2>
        <p>
            Après le succès retentissant de mes précédentes opérations parisiennes, 
            je propose aujourd’hui à un cercle très restreint d’investisseurs 
            une nouvelle affaire d’une ampleur exceptionnelle.
        </p>
        <p>
            Cette opportunité ne sera ouverte qu’à quelques personnes sélectionnées.
        </p>

        <div class="warning">
            Attention : les places sont extrêmement limitées.  
            Seuls les investisseurs sérieux et discrets seront contactés.
        </div>
    </div>

    <div class="card">
        <h2>Les détails du projet</h2>
        
        <div class="incomplete">
            [SECTION EN COURS DE RÉDACTION]<br>
            Les documents officiels et le plan d’investissement seront bientôt disponibles.
        </div>

        <div class="todo">
            // TODO: Afficher ici le montant minimum d'investissement<br>
            // TODO: Ajouter le formulaire de candidature<br>
            // TODO: Intégrer le système de cryptage des données clients
        </div>
    </div>

    <div class="card">
        <h2>Prendre contact</h2>
        <p>Pour être considéré, veuillez laisser vos coordonnées :</p>

        <!-- Formulaire volontairement incomplet -->
        <form method="POST" action="">
            <p>
                <label>Nom complet :</label><br>
                <input type="text" name="nom" style="width:100%; padding:8px; margin-top:5px;">
            </p>
            <p>
                <label>Télégraphe / Téléphone :</label><br>
                <input type="text" name="contact" style="width:100%; padding:8px; margin-top:5px;">
            </p>

            <!-- Champ manquant volontairement -->
            <!-- <p>Adresse : ...</p> -->

            <button type="submit" class="btn" disabled>
                Envoyer ma candidature (bientôt disponible)
            </button>
        </form>

        <?php
        // Traitement du formulaire (pas encore implémenté)
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            echo '<div class="incomplete" style="margin-top:20px;">';
            echo 'Le système de traitement des candidatures n’est pas encore opérationnel.';
            echo '</div>';
        }
        ?>
    </div>

    <div class="card">
        <h2>À propos de Victor Lustig</h2>
        <p>
            Homme d’affaires international, négociateur hors pair, 
            spécialiste des transactions exceptionnelles…
        </p>
        <div class="incomplete">
            Biographie complète à venir.  
            (Section en attente de validation)
        </div>
    </div>

</div>

<footer>
    <p>
        © 1925 – Victor Lustig Enterprises<br>
        Toute ressemblance avec des personnages ayant existé est purement fortuite.<br>
        <strong>Ce site est fictif et fait partie d’un exercice Capture The Flag (CTF).</strong>
    </p>
    <p style="margin-top:10px; font-size:0.8rem; color:#aaa;">
        Build <?= $version ?> — Dernière modification : <?= date('d/m/Y H:i') ?>
    </p>
</footer>

</body>
</html>
