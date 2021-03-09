Create Table Users(
UID integer,
Password char(20) not null,
Name char(20) not null,
Cat_Level integer not null,
Primary key (UID),
University_Name char(50) not null,
Foreign key (University_Name) References University,
Check (Cat_Level>0 And Cat_Level<4)
)