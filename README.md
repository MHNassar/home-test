# PHP Home Test

## Table of contents
* [Technologies](#technologies)
* [Technical Requirements](#technical-requirements)
* [Setup](#setup)
* [Test](#test)
* [Completed Tasks](#completed-tasks)
* [HTTP API](#http-api)

## Technologies 
Project is created with:
* php version: 8.0
* Symfony Components : decoupled libraries for PHP applications. Battle-tested in hundreds of thousands of projects and downloaded billions of times, they're the foundation of the most important PHP projects.
* Docker & Docker Compose to 

## Technical Requirements
Before you install project you only need to install
[Docker](https://docs.docker.com/get-docker/) | [docker-compose](https://docs.docker.com/compose/install/)

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
## Completed Tasks  
- **[#]**  Implement the missing code to make the tests run successfully
- **[#]**  Provide and implement at least one (1) other implementation of the `UrlIdGenerator` interface able to generate the same IDs, also including tests
- **[#]**  Provide a runnable environment of some kind (VM, Docker) in which the tests are still running successfully
- **[#]**  Extend the environment to be able to run an integration test with your implementation against it and write that integration test
- **[#]**  Extend the environment further with a small HTTP service allowing consumers to look up the URL IDs for a list URLs they provide
- **[#]**  That service should probably not always re-calculate those IDs on the fly, so implement a caching layer of some fashion


## HTTP API
Using Symfony component i creat a sample HTTP server framework to serve REST Api ( create , find , get All)
### Features implemented 
* HTTP request and response 
* Caching 
* DependencyInjection
* Events & Event Listener

It's ready to be expanded and made larger, but I've chosen to keep it as simple as possible.
#### Some ideas to Expand the framework 
* Request Validation 
* Error Handling
* Add Html render 
* etc ...

## Apis 
#### Create new URL: 
* Url : http://localhost:8060/url/creat
* POST 
* Body : Content-Type > Json 
```
{
    "url": "http://www.facebook.com/fb/test3"
}
```

#### Fetch all urls: 
* Url : http://localhost:8060/urls
* GET

#### Fetch only one url By id:
* Url : http://localhost:8060/urls/1
* GET

