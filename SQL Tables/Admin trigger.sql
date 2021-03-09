Create Trigger Admin_Insert On Users
 FOR INSERT, UPDATE, DELETE
 As
if((Select Cat_Level from inserted)=2)
Insert Into Affiliated_Admin(UID)
 Select (UID) from inserted
 Go
 
