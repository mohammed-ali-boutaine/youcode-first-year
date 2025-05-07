# Révision Globale sur SQL
pour sql envoie votre base de donnner a ai pour te donner les challenge possible

## Concepts Fondamentaux

### Définition

SQL (Structured Query Language) est un langage standardisé pour gérer et manipuler des bases de données relationnelles.

### Systèmes de Gestion

- **SGBDR** : Système de Gestion de Bases de Données Relationnelles  
  Exemples : MySQL, PostgreSQL, Oracle, SQL Server, SQLite

### Structure de Base

- **Schéma Relationnel** :

  - **Tables** : Structures principales contenant les données
  - **Colonnes** : Champs/attributs avec un type de données
  - **Lignes** : Enregistrements/tuples

- **Types de Données** :
  - Numériques : `INT`, `FLOAT`, `DECIMAL`
  - Textuelles : `VARCHAR`, `CHAR`, `TEXT`
  - Temporelles : `DATE`, `TIME`, `DATETIME`
  - Booléens : `BOOLEAN`
  - Binaires : `BLOB`

---

## Commandes SQL Essentielles

### Langage de Définition (DDL) et Langage d'Interrogation (DQL)

```sql
SELECT nom, email
FROM clients
WHERE date_inscription > '2023-01-01'
ORDER BY nom
LIMIT 10;
```

---

## Clés et Relations

### Types de Clés

- **Primaire** : Identifiant unique (`PRIMARY KEY`)
- **Étrangère** : Lien vers une clé primaire d'une autre table (`FOREIGN KEY`)
- **Composite** : Clé formée de plusieurs colonnes

### Relations

- **1-1** : Une ligne d'une table correspond à une seule ligne d'une autre
- **1-n** : Une ligne correspond à plusieurs lignes (relation la plus courante)
- **n-n** : Plusieurs à plusieurs (nécessite une table de jointure)

---

## Jointures (JOIN)

### Types de Jointures

```sql
-- INNER JOIN (intersection)
SELECT c.nom, c.email, p.montant
FROM clients c
INNER JOIN paiements p ON c.id = p.client_id;

-- LEFT JOIN (tous de gauche + correspondance droite)
SELECT c.nom, c.email, p.montant
FROM clients c
LEFT JOIN paiements p ON c.id = p.client_id;

-- RIGHT JOIN (tous de droite + correspondance gauche)
-- FULL JOIN (tous des deux tables - non supporté par MySQL)
```

---

## Agrégations et Groupements

### Fonctions d'Agrégation

```sql
SELECT
    COUNT(*) AS total_clients,
    AVG(montant) AS moyenne_paiements,
    SUM(montant) AS total_paiements,
    MAX(montant) AS paiement_max,
    MIN(montant) AS paiement_min
FROM paiements;
```

### Groupement avec `GROUP BY`

```sql
SELECT client_id, COUNT(*) AS nb_paiements, SUM(montant) AS total
FROM paiements
GROUP BY client_id
HAVING COUNT(*) > 3;
```

---

## Sous-Requêtes

### Types

```sql
-- Dans WHERE
SELECT nom
FROM clients
WHERE id IN (SELECT client_id FROM paiements WHERE montant > 100);

-- Dans FROM
SELECT moyennes.moy
FROM (SELECT AVG(montant) AS moy FROM paiements) moyennes;

-- Dans SELECT
SELECT nom,
       (SELECT COUNT(*) FROM paiements p WHERE p.client_id = c.id) AS nb_paiements
FROM clients c;
```

---

## Contraintes et Intégrité

### Types de Contraintes

- `NOT NULL` : Valeur obligatoire
- `UNIQUE` : Valeur unique dans la colonne
- `CHECK` : Validation conditionnelle
- `DEFAULT` : Valeur par défaut
- `INDEX` : Optimisation des recherches

### Exemple Complet

```sql
CREATE TABLE produits (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    prix DECIMAL(10,2) CHECK (prix > 0),
    categorie_id INT,
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (categorie_id) REFERENCES categories(id) ON DELETE SET NULL
);
```

---

## Transactions

### Propriétés ACID

- **Atomicité** : Tout ou rien
- **Cohérence** : Respect des règles
- **Isolation** : Exécution indépendante
- **Durabilité** : Résultats persistants

### Commandes

```sql
START TRANSACTION;
INSERT INTO commandes (client_id, montant) VALUES (1, 99.99);
INSERT INTO paiements (commande_id, montant) VALUES (LAST_INSERT_ID(), 99.99);
COMMIT;
-- ou ROLLBACK en cas d'erreur
```

---

## Optimisation

### Bonnes Pratiques

- Utiliser des `INDEX` sur les colonnes fréquemment interrogées
- Éviter `SELECT *` (préférer lister les colonnes)
- Limiter les sous-requêtes coûteuses
- Utiliser `EXPLAIN` pour analyser les requêtes
- Normaliser la base (mais dénormaliser si nécessaire pour la performance)

### Exemple d'INDEX

```sql
CREATE INDEX idx_client_nom ON clients(nom);
CREATE INDEX idx_paiement_date ON paiements(date);
```

---

## Fonctions Utiles

### Chaînes de Caractères

```sql
SELECT CONCAT(nom, ' ', prenom) AS nom_complet,
       UPPER(nom) AS nom_majuscules,
       SUBSTRING(email, 1, 5) AS debut_email,
       LENGTH(adresse) AS longueur_adresse
FROM clients;
```

### Dates

```sql
SELECT NOW(), CURDATE(), CURTIME();
SELECT DATE_ADD(date_commande, INTERVAL 7 DAY) AS date_livraison;
SELECT DATEDIFF(NOW(), date_naissance) AS age_en_jours;
```

### Conditions

```sql
SELECT nom,
       CASE
           WHEN age < 18 THEN 'Mineur'
           WHEN age BETWEEN 18 AND 65 THEN 'Adulte'
           ELSE 'Senior'
       END AS categorie_age
FROM clients;
```
