Create Table Comments(
UID Integer,
EID Integer not null,
Texts Char(300),
Rating Integer,
Timestamps Time not null,
Primary key (UID,EID),
Foreign key (UID) References Users,
Foreign key (EID) References Event_At,
Check (Rating>=0 And Rating<=5)
)
