var express = require('express');
var app = express();
var bodyParser = require('body-parser');

var teams = [
{
    id: 1,
    name: 'WeAreTheBest'
},
{
    id: 2,
    name: 'FortniteTeam'
},
{
    id: 3,
    name: '4MATIK'
}
];

var currentId = 3;

var PORT = process.env.PORT || 3000;

app.use(express.static(__dirname));
app.use(bodyParser.json());

app.get('/teams', function(req, res) {
    res.send({ teams: teams });
});

app.post('/teams', function(req, res) {
    var teamName = req.body.name;
    currentId++;

    teams.push({
        id: currentId,
        name: teamName
    });

    res.send('Successfully created new team!');
});

app.put('/teams/:id', function(req, res) {
    var id = req.params.id;
    var newName = req.body.newName;

    var found = false;

    teams.forEach(function(team, index) {
        if (!found && team.id === Number(id)) {
            team.name = newName;
        }
    });

    res.send('Succesfully updated Team!');
});

app.delete('/teams/:id', function(req, res) {
    var id = req.params.id;

    var found = false;

    teams.forEach(function(team, index) {
        if (!found && team.id === Number(id)) {
            teams.splice(index, 1);
        }
    });

    res.send('Successfully deleted team!');
});

app.listen(PORT, function() {
    console.log('Server listening on ' + PORT);
});
