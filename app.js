
/**
 * Module dependencies.
 */

var express = require('express')
  , engine = require('ejs-locals')
  , routes = require('./routes')
  , user = require('./routes/user')
  , http = require('http')
  , path = require('path');

var template_engine = 'ejs';

var app = express();

app.engine('ejs', engine);

// all environments
app.set('template_engine', template_engine);
app.set('domain', 'localhost');
app.set('port', process.env.PORT || 80);
app.set('views', __dirname + '/views');
app.set('view engine', template_engine);
//app.set('view engine', 'ejs');
app.use(express.favicon());
app.use(express.logger('dev'));
app.use(express.bodyParser());
app.use(express.methodOverride());
  app.use(express.cookieParser('your secret here'));
  app.use(express.session());
app.use(app.router);
app.use(express.static(path.join(__dirname, 'public')));

// development only
if ('development' == app.get('env')) {
  app.use(express.errorHandler());
}

app.get('/', routes.index);
app.get('/users', user.list);

http.createServer(app).listen(app.get('port'), function(){
  console.log('Restacarta corriendo en el puerto: ' + app.get('port'));
});
