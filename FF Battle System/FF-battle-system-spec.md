
```
//determine ailments
if (status === false) {
	if (physical attack) {
        if ( primary or non-primary hand equipped === bow || arrow ) {
        	if ( primary hand equipped === bow && other hand equipped === arrows ) {
            	Base Attack Power = Base Attack Power (Bow and Arrow) * 4/5
            } else if ( non-primary hand equipped === bow && other hand equipped === arrows  ) {
				Base Attack Power = Bow's Attack Power/2 + Arrow's Attack Power + Str/4
       		}
        	else {
                Base Attack Power = Base Attack Power (Fists) + 1
            }
         } else {
         	if ( primary hand equipped with something ) {
            	Base Attack Power = Weapon's Attack Power + Str/4 + Level/4
            } else ( primary hand is empty aka fists ) {
				Base Attack Power = Str/4 + Level/4            	
            }
         }
    } else if (magic attack) {
    
    }
    
} else {
	determine status 
    if ( freeze status ){
		var i = 2 turns; take off 1 turn; wait
    }
}
```