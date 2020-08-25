const express = require("express");
const bodyParser = require('body-parser');
//On appelle express//
const app = express();
//On instancie le port //
const port = 3030;

app.set('view engine', 'ejs'); /* prise en compte dossier ejs */
//Déclarer des middleware -check tuto//
app.use(express.static("public")); /* prise en compte du dossier public ( page static */
app.use(bodyParser.urlencoded({extended: false
})); /* recuperation des données du body */

app.get("/", (req, res) => {
    res.render('index'); 
/*  redirection d'accueil*/
})

app.get('/new', (req, res) => {
    res.render('new'); 
/*  redirection d'accueil*/
})

//On ecoute le port//
app.listen(port, function () {
    console.log("");
});