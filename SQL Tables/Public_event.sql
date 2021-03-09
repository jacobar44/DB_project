Create Table Public_Events_Create(
EID Integer,
UID Integer not null,
Primary Key (EID),
Foreign Key(EID) References Event_At,
Foreign Key (UID) References Users
)