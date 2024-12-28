# My own little corner of the internet

## The journey of making a personal website from scratch

Hi there! This repo describes a little passion project of mine: building my own personal website!  
The goal of this project was understanding webdevellopment at it's root, back to basics. This means that no fancy
frameworks were used, no, everything is build from the ground up.  
I use a combination of HTML, CSS, PHP, JS and SQL.

> Go visit my website: [www.jonas-brüll.be](www.xn--jonas-brll-heb.be)

## Project structure:

```
/
├── controllers/
|   ├── profiel/
|   ├── projecten/
|   └── *.php
├── engine/
|   ├── App.php
|   ├── config.php
|   ├── Container.php
|   ├── Database.php
|   ├── globals.php
|   ├── Router.php
|   ├── User.php
|   └── Validator.php
├── php/
├── public/
|   ├── css/
|   ├── img/
|   ├── js/
|   └── index.php
└── views/
    ├── errors/
    ├── partials/
    ├── profiel/
    ├── projecten/
    └── *.view.php

```

## Project naming convention:

```
CRUD_element/
├── create : create form for a new element via get request
├── destroy : redirection of a delete request
├── edit : edit form for current element via get request
├── index : display all elements via get request
├── show : show single element via get request
├── store : submision of create form via post request
└── update : submission of edit form via patch request
```

## Project control flow:

```
public/index.php -> engine/Router.php -> controllers/*.php -> views/*.view.php
```

Only the public folder will be accessible for the viewer, there all requests will be rerouted throug the index page (
server side).  
The index page will route the request through the Router, which will load the correct controller.  
In the controller, all the necessary logic will be performed, after which the HTML will be send to the client: it will
be visible to the viewer.
As all rerouting takes place on the index.php file, all css, img, js, will now apply on the loaded page, client side.