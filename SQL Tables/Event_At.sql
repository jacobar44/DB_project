Create Table Event_At(
EID Integer,
Event_Name Char (20) not null,
Event_Time Time not null,
Event_Date Date not null,
Lname Char(20) not null,
Descriptions Char(300),
Category Char(20) not null,
Contact_Phone Char(10) not null,
Contact_Email Char(20) not null,
Primary Key (EID),
Unique(Event_Time,Lname),
Foreign key (Lname)References Locations
)