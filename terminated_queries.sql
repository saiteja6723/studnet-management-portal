>>insert into `terminated students`(regno,f_name,m_name,l_name,dob, contact,email,gender,dept) select * from add_details where regno = '$regno';

>>update `terminated students` set reason ='$reason' where regno = '$regno';

>>select * from `terminated students`;
