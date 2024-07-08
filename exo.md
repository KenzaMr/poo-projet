### Modele
```sql
create table car(
    id INT PRIMARY KEY AUTO_INCREMENT,
    model VARCHAR(255),
    description VARCHAR(255),
    prix INT,
    img_pass VARCHAR(255)
)
```
##  Insertion
```sql 
INSERT INTO car (model, description, prix, img_pass) VALUES
('Renault Clio', 'Une voiture compacte et économique idéale pour la ville.', 15000, 'renault_clio.jpg'),
('Peugeot 208', 'Un design élégant avec une technologie de pointe.', 18000, 'peugeot_208.jpg'),
('Citroën C3', 'Confort et style pour une conduite agréable.', 17000, 'citroen_c3.jpg'),
('Volkswagen Golf', 'Performance et fiabilité pour les amateurs de conduite.', 25000, 'vw_golf.jpg'),
('BMW Série 3', 'Luxueuse et performante, parfaite pour les longs trajets.', 35000, 'bmw_serie3.jpg');
INSERT INTO car (model, description, prix, img_pass) VALUES
('Audi A4', 'Un mélange parfait de luxe et de performance.', 37000, 'audi_a4.jpg'),
('Mercedes-Benz Classe C', 'Élégance et technologie avancée.', 40000, 'mercedes_classe_c.jpg'),
('Toyota Corolla', 'Fiabilité et économie de carburant.', 20000, 'toyota_corolla.jpg'),
('Honda Civic', 'Design sportif et consommation efficiente.', 22000, 'honda_civic.jpg'),
('Ford Focus', 'Polyvalente et innovante, idéale pour toutes les situations.', 21000, 'ford_focus.jpg');

```