Create Table RSO_Events_Owns(
EID Integer,
RSOID Integer not null,
Primary key (EID),
Foreign key (EID) References Event_At,
Foreign key (RSOID) References RSO_Creates
)