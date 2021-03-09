Create Table RSO_Creates(
RSOID Integer,
Name char(20) not null,
UID Integer not null,
Email_Domain  char(20) not null,
Primary Key (RSOID),
Foreign Key (UID) References Affiliated_Admin
)