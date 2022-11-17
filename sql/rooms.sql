/* Showing results for Rooms.xlsx */

/* CREATE TABLE */
CREATE TABLE table_name(
roomID VARCHAR(100),
room_typeID DOUBLE,
room_type_name VARCHAR(100),
number_of_rooms DOUBLE,
max_guests DOUBLE
);

/* INSERT QUERY NO: 1 */
INSERT INTO table_name(roomID, room_typeID, room_type_name, number_of_rooms, max_guests)
VALUES
(
'SGL', 1, 'Single', 6, 1
);

/* INSERT QUERY NO: 2 */
INSERT INTO table_name(roomID, room_typeID, room_type_name, number_of_rooms, max_guests)
VALUES
(
'DBL ', 2, 'DoubleCLASSIC', 12, 2
);

/* INSERT QUERY NO: 3 */
INSERT INTO table_name(roomID, room_typeID, room_type_name, number_of_rooms, max_guests)
VALUES
(
'DBL', 3, 'DoubleSUPERIOR', 12, 3
);

/* INSERT QUERY NO: 4 */
INSERT INTO table_name(roomID, room_typeID, room_type_name, number_of_rooms, max_guests)
VALUES
(
'S ', 4, 'Suite', 4, 4
);