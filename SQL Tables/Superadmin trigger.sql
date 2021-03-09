Create Trigger SuperAdmin_Insert On Users
 FOR INSERT, UPDATE, DELETE
 As
if((Select Cat_Level from inserted)=3)
Insert Into SuperAdmin(UID)
 Select (UID) from inserted
 Go