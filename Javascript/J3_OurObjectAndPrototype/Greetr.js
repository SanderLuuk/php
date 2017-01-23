(function(global, $) {
    
    var Greetr = function(firstName, lastName, language) { //luuakse uus muutuja Greetr  millele omistatakse funktsioon firstname,l astname ja language.
        return new Greetr.init(firstName, lastName, language);   // tagastatakse uus greetr.init mis on jquery object.
    }
    
    Greetr.prototype = {}; // luuakse prototüüp et lisada meetodid ja et hoida mälu kokku
    
    Greetr.init = function(firstName, lastName, language) { //luuakse greets init funktsioon.
        
        var self = this; // luuakse objekt self et ta ei viitaks this'iga globaalsele objektile.
        self.firstName = firstName || '';  // luuakse self firstname objekt ja määratakse omaduseks firstname OR(või) '' string
        self.lastName = lastName || '';
        self.language = language || 'en'; // siin omistatakse language'ile dafault 'en'.
        
    }
    
    Greetr.init.prototype = Greetr.prototype; // see on funktsioon  mis omistab v viitab endale kõik greetr'iga saadud objektid. ( firstname, lastname, language)
    
    global.Greetr = global.G$ = Greetr; // siin viidatakse global ja jquery'le . m6lemad loodud Greetr'ile.
    
}(window, jQuery));