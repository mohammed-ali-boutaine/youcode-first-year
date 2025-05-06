
# Diagramme de classe

## Relations Principales

Un **diagramme de classe** est un type de diagramme UML (Unified Modeling Language) qui représente la structure statique d'un système en modélisant :

- Les classes (blueprints des objets)
- Leurs attributs (données)
- Leurs méthodes (opérations)
- Les relations entre elles

### Visibilité des Membres (access modifiers)
`+` Public (accessible par tous)
`-` Privé (accessible seulement dans la classe)
`#` Protégé (accessible dans la classe et ses enfants)

- **Héritage** : Relation "est-un" (ex : Chien hérite de Animal).
- **Composition** : Relation "fait-partie-de" où les parties ne peuvent exister sans le tout (dépendance forte du cycle de vie).
- **Agrégation** : Relation "a-un" où les parties peuvent exister indépendamment (dépendance faible du cycle de vie).

- **Association** : Relation entre deux classes sans dépendance forte (ex : Client et Commande).
- **Dépendance** : Relation où une classe utilise une autre (ex : Facture utilise Produit).


exmple :
[Université] ◆— [Département] ◇— [Professeur]
[Étudiant] "1..*" — "suit" — "1..4" [Cours]
[Personne] ◁— [Professeur]
[Personne] ◁— [Étudiant]
[Notes] - - - > [Cours]


