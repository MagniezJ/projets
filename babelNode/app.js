const express = require("express");
const sqlite3 = require('sqlite3');
const bodyParser = require('body-parser');
//On appelle express//
const app = express();
//On instancie le port //
const port = 3030;
const dbname = 'main.db';
let user = {
    isAdmin: false,
};
//ouverture bd
var livereload = require("livereload");
var server = livereload.createServer();
server.watch(__dirname + "/public");

let db = new sqlite3.Database(dbname, err => {
    if (err)
        throw err
    console.log('Database stated on ' + dbname)
});


app.set('view engine', 'ejs'); /* prise en compte dossier ejs */
//Déclarer des middleware -check tuto//
app.use(express.static("public")); /* prise en compte du dossier public ( page static */
app.use(bodyParser.urlencoded({
    extended: false
})); /* recuperation des données du body */

app.get("/", (req, res) => {
    res.render('index', {
        admin: user.isAdmin
    });
    /*  redirection d'accueil*/
})


app.post('/', (req, res) => {
    console.log(user.isAdmin);
    let mdp = req.body.pass;
    const fo = '((?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])).{6,}';
    let p = 0;
    
    if (mdp.value.match(fo) == true) {
        p = 1;
    } else {
        p = 0;
    }
    if (p == 0) {
        user.isAdmin = false;
        console.log("retry")
    } else {
        user.isAdmin = true;
        console.log("cool");
    }
    res.render('index', {
        admin: user.isAdmin
    });

});

app.get('/new', (req, res) => {
    res.render('new');
    /*  redirection d'accueil*/
})
db.close(err => {
    if (err)
        throw err
    console.log('Database close')
})
//On ecoute le port//
app.listen(port, function () {
    console.log("");
});