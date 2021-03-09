Create Table Affiliated_Admin(
UID integer,
Primary key (UID),
Foreign key (UID) References Users,
)
