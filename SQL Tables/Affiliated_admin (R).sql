Create Table Affiliated_Admin(
UID integer,
University_Name char(50) not null,
Primary key (UID),
Foreign key (UID) References Users,
Foreign key (University_Name) References University,
)
