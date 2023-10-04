create table add_details(
	regno varchar(100) primary key,
	f_name varchar(100),
	m_name varchar(100),
	l_name varcahr(100),
	dob date,
	contact number,
	email varchar(100),
	gender varchar(100),
	dept varchar(100)
);

create table registers(
	regno varchar(100) primary key,
	pas varchar(50)
	
);

create table `terminated students`(
	regno varchar(100) primary key,
	f_name varchar(100),
	m_name varchar(100),
	l_name varcahr(100),
	dob date,
	contact number,
	email varchar(100),
	gender varchar(100),
	dept varchar(100),
	reason varchar(255)
);
