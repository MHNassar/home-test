# PHP Home Test

## Table of contents
* [Technologies](#technologies)
* [Technical Requirements](#technical-requirements)
* [Setup](#setup)
* [Test](#test)


## Technologies 
Project is created with:
* php version: 8.0
* Symfony Components :  decoupled libraries for PHP applications. Battle-tested in hundreds of thousands of projects and downloaded billions of times, they're the foundation of the most important PHP projects.
* Docker & Docker Compose to 

## Technical Requirements
Before you install project you only need to install
[Docker](https://docs.docker.com/get-docker/) | [docker-compose](https://docs.docker.com/compose/install/)

## Setup:
## Setup:
```
 git clone git@github.com:MHNassar/home-test.git
 cd /home-test
 docker-compose up --build -d
```
To check status
```bash
 docker-compose ps
```
To install the project 
* run composer install 
```bash
docker exec -it core-app sh -c "composer install" -d
```

## Test:

To run the tests

```bash
docker exec -it core-app sh -c "./vendor/bin/phpunit" -d
```
