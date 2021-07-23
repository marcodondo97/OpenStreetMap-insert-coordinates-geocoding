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

Thanks to this application the users can insert a placeholder on the map.

 
Operation: The program import the map from the library and prints it on screen, then it search on the database to find out if there are placeholders or it inserts them on the map. You can click the placeholder to zoom the map in order to be able to divide too many nearby markers and separate them, clicking on the single placeholder will open an infowindow where you can read the information about the user.

The registration user takes place in two moments: first step you have to type the the street address, second, once clicked on continue the data entered will make an http request to the OpenStreetMap site which will process them and find the coordinates (latitude and longitude), afterwards, the page will extract the coordinates from the OpenStreetMap site and it will insert them automatically on a form and the user can type the data he wants to put in the placeholder infowindow, once clicked on send the data will be allocated in the database and they will be displayed on the map in the correct position.

If the street is not written correctly or the program cannot find the location, it opens an alert and the user have to type the coordinates manually following the instructions.

This program is opensource.



Invitation to take tests.
it is necessary to create a database.
I USED XAMPP V 5.5.38.


<h2> Images </h2>

<img src="screenshot/62973197-e9589c80-be15-11e9-89c1-67ab27499d60.png" width="60%">

<img src="screenshot/62973203-ecec2380-be15-11e9-9d02-feb070c280f4.jpg" width="60%">

