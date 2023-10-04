>>insert into add_details values('$regno' , '$f_name', '$m_name','$l_name', '$dob','$contact','$email','$gender','$dept');



>>update add_details
set $col = '$update' 
where regno = '$regno';



>>select * from add_details where regno='$data' or f_name='$data' or m_name='$data' or l_name='$data' or dob ='$data' or contact ='$data' or email = '$data' or gender ='$data' or dept ='$data';


>>delete from add_details where regno = '$regno';


>>select * from add_details;


