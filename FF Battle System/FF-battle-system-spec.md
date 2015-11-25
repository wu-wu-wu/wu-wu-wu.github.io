
```
//determine ailments
if (status === false) {

	if (physical attack) {
    	if ( character === Yang ) {
            	Base Attack Power = (Level+1)*2 + Str/4 ;
    	} else if ( character === Edge ) {
        	if ( both hands === equipped ) {
            	Base Attack Power = Weapon on Left Hand's Attack Power +
                    Weapon on Right Hand's Attack Power +
					(Str/4 + Level/4)*2 ;
            } else {
                Base Attack Power = Weapon's Attack Power ;
			}         
        } else {
        	if ( primary or non-primary hand equipped === bow || arrow ) {
        		if ( primary hand equipped === bow && other hand equipped === arrows ) {
            		Base Attack Power = Base Attack Power (Bow and Arrow) * 4/5 ;
            	} else if ( non-primary hand equipped === bow && other hand equipped === arrows  ) {
					Base Attack Power = Bow's Attack Power/2 + Arrow's Attack Power + Str/4 ;
                    //critical hit modifier
                    var critical = Math.random() ;
						if (critical < 0.03) {
                       		Attack Power = Attack Power + Bow's Attack Power ;
                        } else {
                        	// figure out : hit rate + enemy defense 
                        }
       			}
        		else {
                	Base Attack Power = Base Attack Power (Fists) + 1 ;
            	}
         	} else {
         		if ( primary hand equipped with something ) {
            		Base Attack Power = Weapon's Attack Power + Str/4 + Level/4 ;
           		} else ( primary hand is empty aka fists ) {
					Base Attack Power = Str/4 + Level/4 ;
            	}
         	}
        } 
         // figure out possible critical hit attack modification : 1/32 probability
         // excluding: character with Mini/Toad status; Jump and Kick abilities; all monsters
         // special : elemental attack power modifiers 
         
    } else if (magic attack) {
    
    }
    
} else {
	determine status 
    if ( freeze status ){
		var i = 2 turns; take off 1 turn; wait
    }
}
```