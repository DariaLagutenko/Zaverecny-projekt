/* Showing results for Reservations.xlsx */

/* CREATE TABLE */
CREATE TABLE Reservations
(
reservationID INT(100),
date_of_creation date_format(100),
customer VARCHAR(100),
arrival_date date_format(100),
departure_date date_format(100),
nights_count INT(100),
guests_count INT(100),
room_typeID INT(100),
board VARCHAR(100),
notes VARCHAR(100),
);