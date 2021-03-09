Create Table Joins (
UID Integer,
RSOID Integer not null,
Date_Joined Date not null,
Primary key (UID,RSOID),
Foreign key (UID) References Users,
Foreign key (RSOID) References RSO_Creates
)