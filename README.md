# OpenStreetMap-insert-coordinates-geocoding

How to insert geo coordinates in map from name adress?

<h2> Introduction </h2>

To build map I used the following technologies:

- Frontend: markup and scripting languages HTML5, Javascript and JQuery;
- Import map from leaflat js (https://leafletjs.com/);
- Geocoding: OpenStreetMap (https://www.openstreetmap.org/#map=5/45.768/11.382);
- Backend: PHP5 ;
- Database: MySql and PHP5;
 

<h2>Description</h2>

Have the user insert their placeholder on the map starting from the entry of an alphanumeric address .

 

Operation: The program takes the map from the library and prints it on screen, then it search on the database to find out if there are placeholders and inserts them on the map. You can clilck the placeholder to zoom the map in order to be able to divide too many nearby markers and separate them, clicking on the single placeholder will open an infowindow where the data you can check the registered users info.

The user registration takes place in two moments: first of all you to type the the street address, the second, once clicked on continue the data entered will make an http request to the OpenStreetMap site which will process them and find the coordinates (latitude and longitude), afterwards, the page will extract the coordinates from the OpenStreetMap site to insert them automatically on a form and the user can type the data he wants to put in the placeholder infowindow, once clicked on send the data will be allocated the database webserver and they will be displayed on the map.

If the street is not written correctly or the program cannot find the way, it opens an alert and the user have to type the coordinates manually following the instructions.

This program is opensource.



Invitation to take tests.
it is necessary to create a database.
I USED XAMPP V 5.5.38.


<h2> Images </h2>

<img src="screenshot/62973197-e9589c80-be15-11e9-89c1-67ab27499d60.png" width="60%">

<img src="screenshot/62973203-ecec2380-be15-11e9-9d02-feb070c280f4.jpg" width="60%">

