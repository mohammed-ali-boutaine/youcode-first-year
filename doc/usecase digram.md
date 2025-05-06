# Use Case

## Définition

Un diagramme de cas d'utilisation est un type de diagramme UML qui représente les interactions entre un système et ses acteurs.

### Concepts Principaux

- **Acteur** : Représente un rôle joué par un utilisateur, un système externe ou un périphérique.

- **Types d'Acteurs** :
  - **Acteur Principal** : Initie l'interaction (ex : Client).
  - **Acteur Secondaire** : Soutient le système (ex : Système de Paiement).

### Relations dans les Diagrammes

- **Association** : Relation entre un acteur et un cas d'utilisation (représentée par une ligne simple).  
  Exemple : `(Client) ————— (Passer Commande)`

- **Include** : Relation obligatoire où un cas inclut un autre (flèche pointillée avec `<<include>>`).  
  Exemple : `(Passer Commande) ——————> (Vérifier Paiement) [<<include>>]`

- **Extend** : Relation optionnelle dans certaines conditions (flèche pointillée avec `<<extend>>`).  
  Exemple : `(Passer Commande) ——————> (Appliquer Réduction) [<<extend>>]`

- **Généralisation** : Relation "est un" (ou "est une sorte de") (spécialisation).  
  Exemple : `(Utilisateur) ———▷ (Client)`
