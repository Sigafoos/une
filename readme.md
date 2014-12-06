# Universal NPC Emulator
From the rulebook (available for [pay-what-you-want at DriveThruRPG](http://rpg.drivethrustuff.com/product/134163/UNE-The-Universal-NPC-Emulator-rev)):

> UNE is a supplement for any pen and paper roleplaying game to help facilitate the creation and playing of a non-player character (“NPC”) to something  with the depth of a true character.  
>
> UNE is universal.  It was designed to be run with every standing genre in tabletop roleplaying.  Some terms must bend a little more depending on a genre.  The terms are not definite answers that restrict possibilities; they are ideas to get the creative juices flowing. 
>
> UNE is focused on the NPC aspect of a game.  With UNE, a simple NPC can become a true character in the story with just a few die rolls, and UNE can give that NPC direction of purpose for itself, towards characters, and even for the story as a whole. 
>
> UNE is an emulator.  It can be used without a GM, and some of the best results may occur when a whole group of players uses it.   

## Features
* One click generation of NPCs
* Specify parameters (how friendly, ethnic source of name, etc)
* Refresh any section you don't like
* Save/load NPCs for later

### Saving
Saving uses `localStorage`, available on all modern browsers. It's tied to the device you're using, so Safari on an iPad will always have those NPCs, as will Chrome on a PC, but never the twain shall meet.

## Planned features
* Import/export saved NPCs
* Delete saved NPCs
* Edit name instead of using random
* Add notes/identifier to a NPC (ie "Phandalin townmaster") to remember how you're using them
* Lots more language options (everything from [Kate Monk's Onomastikon](http://tekeli.li/onomastikon/))
* Possible interaction with [BOLD](https://github.com/sigafoos/bold) (down the line, when I actually make BOLD)
* Other stuff I'm forgetting

## Known issues
* Renaming a saved character gets weird. I think it auto-saves a new name, even if you don't click save.

Webapp created by [Dan Conley](http://www.danconley.net). 
