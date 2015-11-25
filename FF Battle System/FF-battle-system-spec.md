# FF Battle System Pseudo-code
Completely based off of [Deadlike2's FF4 Algorithms FAQ](http://www.gamefaqs.com/snes/588330-final-fantasy-iv/faqs/54945)

## Step 1: Compute the Attacker's Base Attack Power + Critical Dmg
```
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
                    
                    //critical hit modifier
                    var critical = Math.random() ;
						if (critical < 0.03) {
                       		Attack Power = Attack Power + Bow's Attack Power * 4/5 ;
                        } else {
                        	// figure out : hit rate + enemy defense 
                        }
                        
            	} else if ( non-primary hand equipped === bow && other hand equipped === arrows  ) {
					Base Attack Power = Bow's Attack Power/2 + Arrow's Attack Power + Str/4 ;
                    
                    //critical hit modifier
                    var critical = Math.random() ;
						if (critical < 0.03) {
                       		Attack Power = Attack Power + Bow's Attack Power ;
                        } else {
                        	// figure out : hit rate + enemy defense 
                        }
                        
       			} else {
                	Base Attack Power = Base Attack Power (Fists) + 1 ;
            	}
                
         	} else {
         		if ( primary hand equipped with something ) {
            		Base Attack Power = Weapon's Attack Power + Str/4 + Level/4 ;
                    
                    //critical hit modifier
                    var critical = Math.random() ;
						if (critical < 0.03) {
                       		Attack Power = Attack Power + (Weapon's Attack Power/2) ;
                        } else {
                        	// figure out : hit rate + enemy defense 
                        }
                    
           		} else ( primary hand is empty aka fists ) {
					Base Attack Power = Str/4 + Level/4 ;
            	}
         	}
        } 
        
        figure out possible critical hit attack modification : 1/32 probability
        excluding: character with Mini/Toad status; Jump and Kick abilities; all monsters
        special : elemental attack power modifiers 
         
    } else if (magic attack) {
    
    }
    
} else {
	//determine status 
    if ( status === mini || toad ){
    	attack = 1 ;
        no critical ;
		set status duration timer to 1; 
    } else if ( status === curse ) {
    	Attack Power = Attack Power * 1/2 ;
    } else if ( status === berserk ) {
    	Attack Power = Attack Power * 3/2 ;
   	}	
	Kick special modifier : Attack Power = Attack Power * 1/2
    Jump special modifier : Attack Power = Attack Power * 2 
    Power special modifier : Attack Power = Attack Power * 2
    Deadly special modifier : Attack Power = Attack Power * 3
}


```
## In-progress aka shit to figure out:

### 1) Physical Damage Algorithm  
[x] Step 1: Compute the Attacker's Base Attack Power  
Step 2: Modify the Base Attack Power  
Step 3: Compute the Attacker's Hit Rate aka Attack% or Precision  
Step 4: Factor in the Hit Rate Modifiers  
Step 5: Calculate the Attack Multiplier  
Step 6: Calculate Target's Defense  
Step 7: Factor in Defense Modifiers  
Step 8: Calculate Evade AKA Defense%  
Step 9: Apply Evade Modifiers  
Step 10: Compute Defense Multiplier  
Step 11: Modify the Attack Multiplier  
Step 12: Plugging All The Numbers In...  
Step 13: Inflicting Statuses  

### 2) Magical Damage Algorithm  
Step 1: Determine the Spell's Base Spell Power  
Step 2: Modify the Base Spell Power  
Step 3: Determine the Caster's Spell Multiplier  
Step 4: Compute the Spell's Hit Rate  
Step 5: Modify the Spell's Hit Rate  
Step 6: Compute the Target's Magic Defense  
Step 7: Modify the Target's Magic Defense  
Step 8: Compute the Target's Magic Evade aka Magic Defense%  
Step 9: Modify the Target's Magic Evade  
Step 10: Compute the Target's Magic Defense Multiplier  
Step 11: Modify the Magic Defense Multiplier  
Step 12: Modify the Spell Multiplier  
Step 13: Plugging All The Numbers In...  
Step 14: Special Exceptions  

### 3) HP Based Spells  
Damage Based On The Target's Maximum HP  
Damage Based On The Caster's Current HP  

### 4) The Rest Of The Spells And Status Resistance  

### 5) The Boss Bit  

### 6) List of Commands  

### 7) Spells with Special Behavior  

### 8) Statuses  

### 9) Tips
Heal outside of battle   
Formation  
Casting "weapon-item" magic  
Slow  


