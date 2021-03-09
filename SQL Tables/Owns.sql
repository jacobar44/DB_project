Create Table Owns(
University_Name Char(50),
PID Integer not null,
Primary key(University_Name,PID),
Foreign key (University_Name) References University,
Foreign key(PID) References Profile_Create
)