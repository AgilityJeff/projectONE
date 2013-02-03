(c) 2013 CJR Enterprises - All rights reserved.

Questions, Comments, permission to use requests, and suggestions for improvement should go to AgilityJeff on GitHub.

projectONE is a minimalist MVC written entirely in procedural PHP for those new to the language.  As a non-OO php enthusiast, I have been looking quite a long while for a way to manage multi-page sites and form wizards with minimal learning curve.  Since I wasn't finding it "out there", I decided to take on the task myself and that's what this project hopes to achieve!

Every View (page/form) has a corresponding Model.  Within that Model there are three mandatory functions:  prepare() (grabs values from a db record or stuffs all the form fields with blanks for a record append form), validate (which checks $_POST data), and process() which would perform the requested db action.

This is based on Fat Model / Skinny Controller and allows the View to grab data from the Model.  I understand that the php community likes to pass data through the controller but don't believe that's the purest form of MVC.

There is no db class included, that could easily be plugged in to the application/model.php script.  Since php is moving from mysql to mysqli and PDO, I thought it might be best to stay away from the 'best choice' until things settle down a bit in that area.

There is no css file yet ... sorry I 'cheated' a couple of times... but I do intended to get that cleaned up pretty quickly!