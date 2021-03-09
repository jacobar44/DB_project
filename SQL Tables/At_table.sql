Create Table At_Table(
University_Name Char(50),
Lname Char(20) not null,
Date_Founded Date,
Primary key (University_Name,Lname),
Foreign key (University_Name) References University,
Foreign key (Lname) References Locations
)