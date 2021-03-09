Create Table SuperAdmin(
UID Integer,
Primary Key (UID),
Foreign Key (UID) References Users
)