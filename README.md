# Smart-Parking-System

### Problem
My family and I were going outside to shop in Costco only to be stumped by the unavailability of the parking slots. We roamed 
around for about half an hour before we got to park. Furthermore, this idling in the parking lot can also contribute to vehicle 
accidents, as several established statistcal data show that parking spaces are frequent locations of car accidents. 

### Solution
The system would sense the spots that are occupied and unoccupied and update them on a website for users to view. 
I used ultrasonic distance sensors with the Arduino Mega to capture the distance between the car and the ultrasonic sensor. 
I built a model car parking area with six slots to test out this concept. Then, with a breadboard between the car parking slots, 
I attached the sensors, perfectly aligned to send and receive its sound waves. Then, Then, on an interval, I would update the SQL
database using HTTP GET requests to push the sensor data to SQL server. So, in the end, the user will be able to monitor a table 
with values of green checks or red crosses, letting the user know if there is a car parked in that slot or not. 
In this way, you will know where to park without having to roam around for a really long time!

### Additional Links
This project was arguably one of my more popular one. Watch how it works [here](https://www.youtube.com/watch?v=QHyiKysKVyk&feature=emb_logo)! If you want to replicate this, learn how to do so with my
detailed guide [here](https://www.instructables.com/id/Automatic-Car-Parking-System/)!
