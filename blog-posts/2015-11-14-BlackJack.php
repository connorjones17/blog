<?php

$title="Blackjack";
$author="Connor Jones";
$date ="November 14th, 2015";
$image="Blackjack.jpg";

$content_preview ="Gambling gone wrong... We're juggling objects and classes";

$content="The blackjack game is something we have taken from the ordinary world and put it into
an object-oriented context. This is something that every person on this planet should be able to do.
It's the ability to assess your surrounding environment and be able to split it up into a simple, logical format
that requires concepts such as inheritance, encapsulation, abstraction and polymorphism.
<p>
This ability is within all of us and really doesn't take much thought. The example brought up
last week was a farm. You have the farm class which is the class at the top of the tree in this case.
Then within a farm you would have animals, now obviously that is not the only thing that exists on the
farm and it's very reasonable to assume that a farm would contain more than one animal. This means that an
animal class should be created. Now, all animals eat, sleep (rave, repeat) and excrement so they are expressing
functionality that can live within the animal class. However, a sheep and a cow are different for many reasons
and so they need separate functionality. Where a sheep goes 'baaaaa' and a cow 'mooooo', it would be madness
to allow this kind of functionality in the same class so they need separate classes to define themselves
separate to one another. Because they both eat, sleep etc they can have separate classes but extend the
animal class and gain all the functionality in that class. Make sense?? Probably not, but, jog it.
</p><p>
We basically did that for the blackjack game. As a mayden group, with the mighty Luke leading the way on
a friday afternoon when we were all spazzed out from sheer exhaustion, we cracked on and planned the game.
The classes created were Card, Hand, DeckOfCards, Player, Dealer and Game. These were split up to define
separate types. The card would store data like the face name and value, the suit, possibly colour. The hand would
store two objects of the Card class so it could access the name, value, suit, colour of the card it was storing. Yes?
Then the Hand class could store the hand total, number of hands if you are playing a more complex version etc. The
 deck of cards class stores an entire array of cards. These cards are of course instances (objects) of the card class
 but they are all unique. They were also initialised in the deck of cards class. The player class has an properties such
 as name, you could add age and stuff but obviously they need a hand. So this is how it becomes so stunningly complex and
 simple at the same time. Because now player has a hand object which holds a card object that was initialised in the deck of
 cards class. And when we build the game class we start to see all of this pull together. It's absolute synergy at its
 finest. A game can have multiple players so it holds player objects which hold hand objects which hold card objects. It
 is the class to initialise the deck of cards class and the player class which is how each player can get unique hands and
  cards.
</p><p>
I mean it is literally just wonderful and beautiful simplicity like this that allows complex applications to be built. OOP
 is absolutely on point. Fantastic.
</p>";