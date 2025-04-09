# Mini-Projet Docker – Location de Voiture

## 1. Présentation  
Ce mini-projet est une application de **gestion de location de voitures** permettant aux utilisateurs de consulter et réserver des véhicules en ligne.  
Le projet a été développé dans le cadre du module **Développement dans le Cloud** (année universitaire 2024–2025), avec pour objectif la **conteneurisation et le déploiement dans le cloud** via Docker et GitHub.

## 2. Technologies utilisées  
- Laravel  
- HTML  
- CSS  
- JavaScript  
- Docker

## 3. Equipe  
El Mehdi Benali & Youssef Hakati

## 4. Lien vers l’image Docker  
👉 [https://hub.docker.com/r/elmehdibenali/locationvoiture_app](https://hub.docker.com/r/elmehdibenali/locationvoiture_app)

## 5. Instructions pour exécuter en local avec Docker

### 🔨 Construire l’image Docker  
```bash
# Cette commande construit l’image Docker à partir du Dockerfile
docker build -t locationvoiture_app .
# Exécuter le conteneur :
docker run -p 8080:8080 mini-projet-cloud
# Affiche toutes les images Docker disponibles localement
docker images
# Montre les conteneurs actuellement en cours d'exécution
docker ps

 

