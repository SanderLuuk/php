(function(global, $) {
    
    var Greetr = function(firstName, lastName, language) {
        return new Greetr.init(firstName, lastName, language);   
    }
    
    var supportedLangs = ['en', 'es']; // luuakse massiv  'en', 'es'
    
    var greetings = { // luuakse tava tervitus
        en: 'Hello',
        es: 'Hola'
    };
    
    var formalGreetings = { // luuakse viisakas kõneviis tervituseks
        en: 'Greetings',
        es: 'Saludos'
    };
    
    var logMessages = { //luuakse sisselogimisel keelevalikust olenevalt kirje.
        en: 'Logged in',
        es: 'Inició sesión'
    };
    
    Greetr.prototype = { // siin saavad meetodid samad atribuudid mis on genereeritud all 
		//self.firstName = firstName || '';
        //self.lastName = lastName || '';
        //self.language = language || 'en';
        
        fullName: function() { // luuakse funktsioon mis tagastab täisnime
            return this.firstName + ' ' + this.lastName;   
        },
        
        validate: function() { // luuakse funktsioon mis vaatab kas keel mida küsitakse/sisestatakse on õige, kui ei ole õige , siis väljastatakse sõne "invalid language".
             if (supportedLangs.indexOf(this.language)  === -1) {
                throw "Invalid language";   
             }
        },
        
        greeting: function() { // luuakse terivuts funktsioon, millega väljastakse tervitus vastavalt keelele mis ollakse valitud ja see jörel eesnimi.
            return greetings[this.language] + ' ' + this.firstName + '!';
        },
        
        formalGreeting: function() {// luuakse viiakustervitus funktsioon. millega väljastatakse viisakas tervitus, mis viitab valitud keelele ning see järel täis nimi ( ees kui ka perek. nimi).
            return formalGreetings[this.language] + ', ' + this.fullName();  
        },
        
        greet: function(formal) { // luuakse funktsioon greet mille põhjal v'öjastatakse kas fromaalne tervitus või lihtne tervitus
            var msg;
            
            // if undefined or null it will be coerced to 'false'
            if (formal) {
                msg = this.formalGreeting();  
            }
            else {
                msg = this.greeting();  
            }

            if (console) {
                console.log(msg);
            }

            // 'this' refers to the calling object at execution time
            // makes the method chainable
            return this;
        },
        
        log: function() {
            if (console) {
                console.log(logMessages[this.language] + ': ' + this.fullName()); 
            }
                            
            return this;
        },
                            
        setLang: function(lang) {
            this.language = lang;
                    
            this.validate();
            
            return this;
        }
        
    };
    
    Greetr.init = function(firstName, lastName, language) {
        
        var self = this;
        self.firstName = firstName || '';
        self.lastName = lastName || '';
        self.language = language || 'en';
        
    }
    
    Greetr.init.prototype = Greetr.prototype;
    
    global.Greetr = global.G$ = Greetr;
    
}(window, jQuery));